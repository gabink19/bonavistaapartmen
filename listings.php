<?php
session_start();
if (empty($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
require_once 'koneksi.php'; // Buat file koneksi.php untuk koneksi database

// --- INIT VARIABLES ---
$msg = '';
$action = $_GET['action'] ?? '';

// --- HANDLE IMAGE UPLOAD ---
function uploadImage($file) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);
    $filename = uniqid() . "_" . basename($file["name"]);
    $targetFile = $targetDir . $filename;
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return $targetFile;
    }
    return false;
}

// --- CRUD LOGIC ---
// CREATE
if ($action == 'create' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $desc = $_POST['description'];
    $stmt = $conn->prepare("INSERT INTO listings (type, price, status, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $type, $price, $status, $desc);
    $stmt->execute();
    $listing_id = $stmt->insert_id;
    $stmt->close();

    // Handle images (max 10)
    if (!empty($_FILES['images']['name'][0])) {
        $totalFiles = count($_FILES['images']['name']);
        $maxFiles = min($totalFiles, 10);
        for ($key = 0; $key < $maxFiles; $key++) {
            $imgFile = [
                "name" => $_FILES['images']['name'][$key],
                "tmp_name" => $_FILES['images']['tmp_name'][$key]
            ];
            $imgPath = uploadImage($imgFile);
            if ($imgPath) {
                $stmt = $conn->prepare("INSERT INTO listings_images (listings_id, image_url) VALUES (?, ?)");
                $stmt->bind_param("is", $listing_id, $imgPath);
                $stmt->execute();
                $stmt->close();
            }
        }
    }
    $msg = "Listing created!";
}

// DELETE
if ($action == 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    // Delete images
    $res = $conn->query("SELECT image_url FROM listings_images WHERE listings_id=$id");
    while ($row = $res->fetch_assoc()) {
        if (file_exists($row['image_url'])) unlink($row['image_url']);
    }
    $conn->query("DELETE FROM listings_images WHERE listings_id=$id");
    $conn->query("DELETE FROM listings WHERE id=$id");
    $msg = "Listing deleted!";
}

// EDIT
if ($action == 'edit' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $res = $conn->query("SELECT * FROM listings WHERE id=$id");
    $edit = $res->fetch_assoc();
    $images = $conn->query("SELECT * FROM listings_images WHERE listings_id=$id");
}

// DELETE IMAGE (AJAX)
if ($action == 'delete_image' && isset($_POST['img_id'])) {
    $img_id = intval($_POST['img_id']);
    $img_res = $conn->query("SELECT image_url FROM listings_images WHERE id=$img_id");
    $img = $img_res->fetch_assoc();
    if ($img && file_exists($img['image_url'])) unlink($img['image_url']);
    $conn->query("DELETE FROM listings_images WHERE id=$img_id");
    echo "success";
    exit;
}

// UPDATE
if ($action == 'update' && isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_GET['id']);
    $type = $_POST['type'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $desc = $_POST['description'];
    $stmt = $conn->prepare("UPDATE listings SET type=?, price=?, status=?, description=? WHERE id=?");
    $stmt->bind_param("sissi", $type, $price, $status, $desc, $id);
    $stmt->execute();
    $stmt->close();

    // Handle new images
    if (!empty($_FILES['images']['name'][0])) {
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $imgFile = [
                "name" => $_FILES['images']['name'][$key],
                "tmp_name" => $tmp_name
            ];
            $imgPath = uploadImage($imgFile);
            if ($imgPath) {
                $stmt = $conn->prepare("INSERT INTO listings_images (listings_id, image_url) VALUES (?, ?)");
                $stmt->bind_param("is", $id, $imgPath);
                $stmt->execute();
                $stmt->close();
            }
        }
    }
    $msg = "Listing updated!";
    header("Location: listings.php");
    exit;
}

// --- FETCH DATA ---
$listings = $conn->query("SELECT * FROM listings ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Listings</title>
    <!-- AdminLTE CSS (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Summernote CSS (for rich text editor) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.13.7/css/dataTables.bootstrap4.min.css">
    <style>
        .img-thumb { width: 80px; height: 60px; object-fit: cover; margin: 2px; border-radius: 4px; position: relative; }
        .img-thumb-wrap { display: inline-block; position: relative; }
        .img-thumb-btn {
            position: absolute; top: 2px; right: 2px; background: rgba(0,0,0,0.7); color: #fff;
            border: none; border-radius: 50%; width: 22px; height: 22px; font-size: 14px; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
        }
        .modal-lg-custom { max-width: 900px; }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <span class="navbar-brand">Admin Listings</span>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="listings.php" class="brand-link">
            <span class="brand-text font-weight-light">Bonavista Admin</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://ui-avatars.com/api/?name=Admin" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Administrator</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="listings.php" class="nav-link <?= ($action == '' ? 'active' : '') ?>">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Listings</p>
                        </a>
                    </li>
                    <!-- Logout Button -->
                    <li class="nav-item mt-3">
                        <a href="logout.php" class="nav-link text-danger">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    <!-- Add more menu items here -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper p-4" style="margin-left: 250px;">
        <div class="container-fluid">
            <?php if ($msg): ?>
                <script>
                Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: '<?= addslashes($msg) ?>',
                  timer: 2000,
                  showConfirmButton: false
                });
                </script>
            <?php endif; ?>

            <?php if ($action == 'edit' && isset($edit)): ?>
                <!-- EDIT FORM -->
                <div class="card">
                    <div class="card-header"><h3>Edit Listing</h3></div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="listings.php?action=update&id=<?= $edit['id'] ?>" id="editListingForm">
                            <div class="form-group">
                                <label>Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="sale" <?= $edit['type']=='sale'?'selected':'' ?>>Sale</option>
                                    <option value="rent" <?= $edit['type']=='rent'?'selected':'' ?>>Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control" value="<?= $edit['price'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="active" <?= $edit['status']=='active'?'selected':'' ?>>Active</option>
                                    <option value="inactive" <?= $edit['status']=='inactive'?'selected':'' ?>>Inactive</option>
                                    <option value="sold" <?= $edit['status']=='sold'?'selected':'' ?>>Sold</option>
                                    <option value="rented" <?= $edit['status']=='rented'?'selected':'' ?>>Rented</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="edit_description" class="form-control summernote" required><?= htmlspecialchars($edit['description']) ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Images (max 10)</label>
                                <input type="file" name="images[]" multiple class="form-control" accept="image/*" id="editImagesInput">
                                <small class="form-text text-muted">You can upload up to 10 images. Existing images shown below.</small>
                            </div>
                            <div class="form-group">
                                <label>Existing Images</label><br>
                                <div id="editImagesList">
                                <?php
                                $imgCount = 0;
                                while($img = $images->fetch_assoc()):
                                    $imgCount++;
                                ?>
                                    <span class="img-thumb-wrap" data-img-id="<?= $img['id'] ?>">
                                        <img src="<?= $img['image_url'] ?>" class="img-thumb" alt="">
                                        <button type="button" class="img-thumb-btn" title="Delete Image" onclick="deleteImage(<?= $img['id'] ?>, this)"><i class="fas fa-times"></i></button>
                                    </span>
                                <?php endwhile; ?>
                                </div>
                                <small id="editImagesCount" class="form-text text-muted">Total images: <span><?= $imgCount ?></span></small>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="listings.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            <?php else: ?>
                <!-- ADD LISTING BUTTON & MODAL -->
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#addListingModal">
                    <i class="fas fa-plus"></i> Add Listing
                </button>
                <!-- Modal -->
                <div class="modal fade" id="addListingModal" tabindex="-1" role="dialog" aria-labelledby="addListingLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-lg-custom" role="document">
                    <div class="modal-content">
                      <form method="post" enctype="multipart/form-data" action="listings.php?action=create" id="addListingForm">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addListingLabel">Add Listing</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Type</label>
                                    <select name="type" class="form-control" required>
                                        <option value="sale">Sale</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="sold">Sold</option>
                                        <option value="rented">Rented</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Upload Images (max 10)</label>
                                    <input type="file" name="images[]" multiple class="form-control" accept="image/*" id="imagesInput">
                                    <small class="form-text text-muted">You can upload up to 10 images.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="description" class="form-control summernote" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-success">Add Listing</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- LISTINGS TABLE -->
                <div class="card">
                    <div class="card-header"><h3>All Listings</h3></div>
                    <div class="card-body">
                        <table id="listingsTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Images</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = $listings->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= ucfirst($row['type']) ?></td>
                                        <td><?= number_format($row['price']) ?></td>
                                        <td><?= ucfirst($row['status']) ?></td>
                                        <td><?= htmlspecialchars($row['description']) ?></td>
                                        <td>
                                            <?php
                                            $imgs = $conn->query("SELECT image_url FROM listings_images WHERE listings_id=".$row['id']);
                                            while($img = $imgs->fetch_assoc()):
                                            ?>
                                                <img src="<?= $img['image_url'] ?>" class="img-thumb" alt="">
                                            <?php endwhile; ?>
                                        </td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td>
                                            <a href="listings.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-listing" data-id="<?= $row['id'] ?>"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- AdminLTE JS (CDN) & Bootstrap JS (for modal) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- Summernote JS (for rich text editor) -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net@1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script>
$(function() {
    // Summernote rich text editor
    $('.summernote').summernote({
        height: 200
    });

    // Limit image upload to 10 files (add modal)
    $('#imagesInput').on('change', function() {
        if (this.files.length > 10) {
            alert('Maximum 10 images allowed!');
            this.value = '';
        }
    });

    // Limit image upload to 10 files (edit form)
    $('#editImagesInput').on('change', function() {
        let existing = $('#editImagesList .img-thumb-wrap').length;
        if (this.files.length + existing > 10) {
            alert('Maximum total 10 images allowed!');
            this.value = '';
        }
    });

    // DataTables
    $('#listingsTable').DataTable({
        responsive: true,
        autoWidth: false,
        pageLength: 10,
        language: {
            search: "Search:",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            paginate: {
                previous: "Prev",
                next: "Next"
            }
        }
    });

    // SweetAlert for delete
    $('.delete-listing').on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Delete this listing?',
            text: "This action cannot be undone.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'listings.php?action=delete&id=' + id;
            }
        });
    });
});

// SweetAlert for success message
<?php if ($msg): ?>
Swal.fire({
  icon: 'success',
  title: 'Success',
  text: '<?= addslashes($msg) ?>',
  timer: 2000,
  showConfirmButton: false
});
<?php endif; ?>
</script>
</body>
</html>