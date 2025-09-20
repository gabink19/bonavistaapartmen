<?php
require_once 'koneksi.php'; // Buat file koneksi.php untuk koneksi database
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="BonaVista Apartments — premium residences with full facilities, tennis court schedule, services, and contact info." />
    <meta name="author" content="BonaVista Apartments" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />
    <title>BonaVista Apartments</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css?v=2.1" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css?v=2.1" />
    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css?v=2.1" />
    <link rel="stylesheet" href="assets/css/owl.css?v=2.1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flickity@2/dist/flickity.min.css">
    <style>
      .gallery-cell {
          width: 300px;
          /* height: 150px; */
          margin-right: 10px;
          /* background: #8C8; */
          counter-increment: gallery-cell;
          text-align: center;
      }
          
      /* cell number */
      .gallery-cell:before {
          display: block;
          text-align: center;
          /* content: counter(gallery-cell); */
          /* line-height: 150px; */
          font-size: 80px;
          color: white;
      }
      .gallery-cell a p {
          color: #ffffff;
          font-size: 16px;
          font-weight: 600;
          margin-bottom: 5px;
          margin-top: 10px;
      }
      .gallery-cell img {
          width: 100%;
          height: auto;
          transition: transform 0.3s ease-in-out;
      }

      .gallery-cell:hover img {
          transform: scale(1.07); /* Memperbesar gambar sedikit saat hover */
      }
      .gallery-cell:hover p {
          transform: scale(1.07); /* Memperbesar gambar sedikit saat hover */
      }
      /* Mengubah warna dot yang aktif */
      .flickity-page-dots .dot {
          background-color: white;
      }

      /* Mengubah warna dot saat hover */
      .flickity-page-dots .dot:hover {
          background-color: rgba(255, 255, 255, 0.7); /* Agak transparan saat hover */
      }

      /* Mengubah warna dot yang aktif */
      .flickity-page-dots .dot.is-selected {
          background-color: white; /* Warna putih untuk dot aktif */
      }
      .feature .feature-text {
          padding-left: 30px;
      }

      .feature .feature-text h3 {
          margin: 0 0 10px 0;
          color: #ffffff;
          font-size: 25px;
          font-weight: 600;
      }

      .feature .feature-text p {
          margin: 0;
          color: #ffffff;
          font-size: 18px;
          font-weight: 400;
      }

      .feature .col-md-12:nth-child(2n) [class^="flaticon-"]::before,
      .feature .col-md-12:nth-child(2n) h3,
      .feature .col-md-12:nth-child(2n) p {
          color: #ffffff;
      }

    </style>
  </head>
  <body style="overflow-x: hidden;">
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader" aria-hidden="true">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" role="banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav" aria-label="Main Navigation">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo" aria-label="BonaVista Apartments Home">
                <img src="assets/images/logobonavista.png" alt="BonaVista Apartments Logo" style="height: 48px;" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                <li class="scroll-to-section"><a href="#features">About</a></li>
                <li class="scroll-to-section"><a href="#facilities">Facilities</a></li>
                <li class="scroll-to-section"><a href="#gallery">Gallery</a></li>
                <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                <li class="" style="display: none;"><a href="#"></a></li>
              </ul>
              <a class="menu-trigger" aria-label="Open menu"><span>Menu</span></a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top" style="background-image: url('assets/images/background.jpeg');">
      <img src="assets/images/background2.jpeg" alt="Lifestyle at BonaVista" id="bg-video" />

      <div class="video-overlay header-text">
        <div class="caption">
          
        </div>
      </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Our About Us Start ***** -->
    <section class="section" id="features" style="background-color: #2d5a44;margin-bottom: 0px !important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2 style="color: white !important;">ABOUT <em>US</em></h2>
            </div>
          </div>
        </div>
        <div class="row" id="tabs" style="padding-bottom: 80px;">
          <div class="col-lg-8">
            <ul>
              <li><a href="#tabs-1"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Access to Toll JORR and MRT</a></li>
              <li><a href="#tabs-2"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Near by premium hospitals</a></li>
              <li><a href="#tabs-3"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Playground &amp; Jogging</a></li>
              <li><a href="#tabs-4"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Tennis &amp; Football</a></li>
              <li><a href="#tabs-5"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Palm Plaza &amp; Garden</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <section class="tabs-content">
              <article id="tabs-1">
                <img src="assets/images/collage_result.jpg" alt="Lobby and EV Charger" />
                <h4 style="color:#ed563b;">Access to Toll JORR and MRT</h4>
                <p style="text-align: justify;color:white;">Easy access to Jakarta Outer Ring Road (JORR) and the MRT, making commuting and travel convenient for residents.</p>
              </article>
              <article id="tabs-2">
                <img src="assets/images/pool_collage.jpg" alt="Nearby Hospitals" />
                <h4 style="color:#ed563b;">Nearby Premium Hospitals</h4>
                <p style="text-align: justify;color:white;">Close to Mayapada Hospital Jakarta Selatan, Siloam Hospital TB Simatupang, and RS Pondok Indah, ensuring quality healthcare is always within reach.</p>
              </article>
              <article id="tabs-3">
                <img src="assets/images/playground_garden_collage.jpg" alt="Nearby Schools" />
                <h4 style="color:#ed563b;">Nearby Acclaimed Schools</h4>
                <p style="text-align: justify;color:white;">Surrounded by top schools such as Kinderfield, Singapore Intercultural School, Cikal, and Al-Izhar, providing excellent education options for families.</p>
              </article>
              <article id="tabs-4">
                <img src="assets/images/sport_collage.jpg" alt="Nearby Facilities" />
                <h4 style="color:#ed563b;">Nearby Grocery Stores, Laundry, Bank, Mall</h4>
                <p style="text-align: justify;color:white;">Convenient access to daily necessities with nearby grocery stores, laundry services, banks, and shopping malls.</p>
              </article>
              <article id="tabs-5">
                <img src="assets/images/garden_collage.jpg" alt="Facilities and Garden" />
                <h4 style="color:#ed563b;">Playground, Jogging, Tennis, Football, Palm Plaza &amp; Garden</h4>
                <p style="text-align: justify;color:white;">Enjoy a variety of facilities including playground, jogging track, tennis and football courts, and the serene Palm Plaza &amp; Garden for relaxation and recreation.</p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Our About Us End ***** -->

    <!-- ***** Our Facilities Start ***** -->
    <section class="section section-bg-cover" id="facilities" style="background-image: url('assets/images/background.jpeg');;margin-bottom: 0px !important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2 style="color: white !important;">OUR <em>FACILITIES</em></h2>
            </div>
          </div>
        </div>
        <div class="row" id="tabs">
          <div class="col-lg-6">
            <ul>
              <li style="text-align: center;"><a href="#tabs-1" style="background-color:#ffffff;">Access to Toll JORR and MRT</a></li>
              <li style="text-align: center;"><a href="#tabs-2" style="background-color:#ffffff;">Near by premium hospitals</a></li>
              <li style="text-align: center;"><a href="#tabs-3" style="background-color:#ffffff;">Playground &amp; Jogging</a></li>
              <li style="text-align: center;"><a href="#tabs-4" style="background-color:#ffffff;">Tennis &amp; Football</a></li>
              <li style="text-align: center;"><a href="#tabs-5" style="background-color:#ffffff;">Palm Plaza &amp; Garden</a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li style="text-align: center;"><a href="#tabs-1" style="background-color:#ffffff;">Access to Toll JORR and MRT</a></li>
              <li style="text-align: center;"><a href="#tabs-2" style="background-color:#ffffff;">Near by premium hospitals</a></li>
              <li style="text-align: center;"><a href="#tabs-3" style="background-color:#ffffff;">Playground &amp; Jogging</a></li>
              <li style="text-align: center;"><a href="#tabs-4" style="background-color:#ffffff;">Tennis &amp; Football</a></li>
              <li style="text-align: center;"><a href="#tabs-5" style="background-color:#ffffff;">Palm Plaza &amp; Garden</a></li>
            </ul>
          </div>
          <div class="col-lg-6 offset-lg-3">
              <ul>
                <li style="text-align: center;margin-bottom: 20px;margin-top: 20px;">
                  <a href="https://booking.bonavistaapartments.com/">BOOK COURT NOW! <br /> (Residents Only)</a>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Our Facilities End ***** -->

    <!-- ***** Our Gallery Start ***** -->
    <section class="section section-bg-cover" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2>OUR <em>GALLERY</em></h2>
            </div>
          </div>
        </div>
        <div class="row" id="tabs">
          <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
              <div class="col-lg-12">
                <div class="loop owl-carousel">
                  <?php
                  $galleryDir = 'gallery/';
                  $images = glob($galleryDir . '*.{jpg}', GLOB_BRACE);

                  if ($images && count($images) > 0) {
                    $chunkSize = 2;
                    $chunks = array_chunk($images, $chunkSize);
                    foreach ($chunks as $chunk) {
                      echo '<div class="item">';
                      foreach ($chunk as $img) {
                        $imgName = basename($img);
                        // Optional: Extract title from filename, e.g. "Operasi Katarak" from "operasi_katarak.jpg"
                        $title = ucwords(str_replace(['-', '_'], ' ', pathinfo($imgName, PATHINFO_FILENAME)));
                        echo '<div class="portfolio-item">
                            <div class="thumb">
                              <img src="' . $img . '" alt="' . htmlspecialchars($title) . '">
                              <div class="hover-content">
                                <div class="inner-content">
                                  <a href="#"><h4>' . $title . '</h4></a>
                                  <span>2024</span>
                                </div>
                              </div>
                            </div>
                            </div>';
                      }
                      echo '</div>';
                    }
                  } else {
                    echo '<div class="item"><div class="portfolio-item"><div class="thumb"><div class="hover-content"><div class="inner-content"><span>No gallery images found.</span></div></div></div></div></div>';
                  }
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Our Gallery End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="listing-unit"  style="background:#2d5a44">
      <div class="container" style="max-width: 100%;">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2 style="color: white;">LISTING <em>RENT/SALE</em></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="cta-content" style="margin-bottom: 70px !important;">
              <div class="col-md-12 fact-left wow slideInLeft">
              <div class="col-lg-12 carousel-flick">
                  <div class="gallery js-flickity"
                      data-flickity-options='{ "wrapAround": true, "cellAlign": "center", "contain": true, "autoPlay": 3000 }'>
                          <?php
                            $query = "SELECT 
                                          l.*, 
                                          li.image_url
                                      FROM 
                                          listings l
                                      LEFT JOIN (
                                          SELECT 
                                              listings_id, 
                                              image_url
                                          FROM 
                                              listings_images
                                          WHERE 
                                              id IN (
                                                  SELECT MIN(id) FROM listings_images GROUP BY listings_id
                                              )
                                      ) li ON l.id = li.listings_id";
                            $result = mysqli_query($conn, $query);
                            $rowCount = $result ? mysqli_num_rows($result) : 0;

                            // Membuat array untuk menyimpan data
                            $dataArray = [];

                            // Ambil semua data yang ada
                            if ($result && $rowCount > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $dataArray[] = $row;
                                }
                                // Jika rowCount kurang dari 6, ulangi data yang sudah ada sampai jumlahnya mencapai 6
                                // while (count($dataArray) < 2 && $rowCount > 0) {
                                //     $dataArray[] = $dataArray[count($dataArray) % $rowCount];
                                // }
                                foreach ($dataArray as $data) :
                                    $gambar = !empty($data['image_url']) ? $data['image_url'] : 'assets/images/notfound.jpg';
                            ?>
                                <div class="gallery-cell">
                                    <a href="javascript:void(0);" 
                                      class="open-modal"
                                      data-id="<?php echo $data['id']; ?>"
                                      data-img="<?php echo $gambar; ?>"
                                      data-type="<?php echo strtoupper($data['type'] ?? ''); ?>"
                                      data-price="Rp <?php echo isset($data['price']) ? number_format($data['price'], 0, ',', '.') : '0'; ?>">
                                        <img src="<?php echo $gambar; ?>" style="height: 150px; width: 260px; max-width: 100%;">
                                        <p style="text-align: center;">
                                          <span class="badge badge-primary" style="font-size: 15px;">
                                            <?php echo strtoupper($data['type'] ?? ''); ?>
                                          </span>
                                        </p>
                                        <p style="text-align: center;">Rp <?php echo isset($data['price']) ? number_format($data['price'], 0, ',', '.') : '0'; ?></p>
                                    </a>
                                </div>
                            <?php
                                endforeach;
                            } else {
                                echo '<div class="gallery-cell"><p style="color:white;">No listings available.</p></div>';
                            }
                            ?>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Map Us Area Starts ***** -->
    <section class="section" id="map-us">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div id="map">
              <iframe
                title="BonaVista Apartments Location Map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.734898003699!2d106.7845086!3d-6.298525199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1d84740310d%3A0xede1afae77f95eb3!2sBona%20Vista%20Apartement!5e0!3m2!1sid!2sid!4v1754901830772!5m2!1sid!2sid"
                width="100%"
                height="600px"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Map Us Area Ends ***** -->
     
    <!-- ***** Our Contact Us Start ***** -->
    <section class="section" id="contact-us" style="background-color: #2d5a44;margin-bottom: 0px !important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2 style="color: white !important;">CONTACT <em>US</em></h2>
            </div>
          </div>
        </div>
        <div class="row" id="tabs" style="padding-bottom: 80px;">
          <div class="col-lg-9">
            <section class="tabs-content">
              <article id="tabs-1">
                <h5 style="color:#fff;margin-bottom:10px;">
                  Email:
                  <a href="mailto:pprsh2019@gmail.com" style="color:#25d366;text-decoration:underline;">
                    pprsh2019@gmail.com
                  </a>
                </h5>
                <h5 style="color:#fff;margin-bottom:10px;">
                  Phone: (021)769-2535 (Building Management Office)
                </h5>
                <h5 style="color:#fff;margin-bottom:10px;">
                  Mobile:
                  <a href="https://wa.me/6285735341400" target="_blank" style="color:#25d366;text-decoration:underline;display:inline-flex;align-items:center;">
                    <img src="assets/images/waicon.png" alt="WhatsApp" style="height:22px;width:22px;margin-right:6px;vertical-align:middle;">
                    0857-3534-1400
                  </a>
                </h5>
                <br />
                <br />
                <h5 style="color:#fff;margin-bottom:10px;">Address: </h5>
                <h5 style="color:#fff;margin-bottom:10px;">Jalan Bonavista Raya</h5>
                <h5 style="color:#fff;margin-bottom:10px;">Kelurahan Lebak Bulus</h5>
                <h5 style="color:#fff;margin-bottom:10px;">Kecamatan Cilandak</h5>
                <h5 style="color:#fff;margin-bottom:10px;">Jakarta Selatan 12440</h5>
              </article>
            </section>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Our About Us End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="whatsapp-float" onclick="openWhatsApp()" role="button" aria-label="Chat via WhatsApp">
        <img src="assets/images/waicon.png" alt="WhatsApp icon" />
      </div>

      <script>
        function openWhatsApp() {
          // Use international format if available, e.g., 62818xxxxxxx
          var phoneNumber = "6285932680177";
          var message = "Hello, I'd like to ask about your services.";
          var url = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);
          window.open(url, "_blank");
        }
      </script>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>BonaVista Apartments - 2025</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js?v=2.1"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Global Init -->
    <script src="assets/js/custom.js?v=2.1"></script>

    <!-- Modal Bootstrap -->
<div class="modal fade" id="carouselModal" tabindex="-1" role="dialog" aria-labelledby="carouselModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="carouselModalLabel">Detail Listing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="modalImages" class="mb-3"></div>
        <div id="modalType" class="mb-2"></div>
        <div id="modalPrice" class="mb-2"></div>
        <div id="modalDesc" class="mb-2"></div>
      </div>
    </div>
  </div>
</div>
    <script>
$(document).ready(function() {
  $('.gallery').on('click', '.open-modal', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
      url: 'listing_detail.php',
      type: 'GET',
      data: { id: id },
      dataType: 'json',
      success: function(res) {
        // Foto-foto
        var imgHtml = '';
        if (res.images && res.images.length > 2) {
          imgHtml += '<div class="modal-flickity js-flickity" style="width:100%;" data-flickity-options=\'{ "wrapAround": true, "cellAlign": "center", "contain": true }\'>';
          res.images.forEach(function(img) {
            imgHtml += '<div class="gallery-cell"><img src="' + (img || 'assets/images/notfound.jpg') + '" class="modal-thumb" style="height:200px;width:auto;margin:5px;border-radius:8px;object-fit:cover;cursor:pointer;" onclick="window.open(\''+(img || 'assets/images/notfound.jpg')+'\', \'_blank\');"></div>';
          });
          imgHtml += '</div>';
        } else if (res.images && res.images.length) {
          imgHtml += '<div class="d-flex flex-wrap justify-content-center">';
          res.images.forEach(function(img) {
            imgHtml += '<img src="' + (img || 'assets/images/notfound.jpg') + '" class="modal-thumb" style="height:200px;width:auto;margin:5px;border-radius:8px;object-fit:cover;cursor:pointer;" onclick="window.open(\''+(img || 'assets/images/notfound.jpg')+'\', \'_blank\');">';
          });
          imgHtml += '</div>';
        } else {
          imgHtml = '<div class="text-center text-muted">No images available.</div>';
        }
        $('#modalImages').html(imgHtml);

        // Info lain
        $('#modalType').html('<span class="badge badge-primary" style="font-size: 15px;">'+(res.type || '-')+'</span>');
        $('#modalPrice').text(res.price || '-');
        $('#modalDesc').html('<strong>Deskripsi:</strong> <br>' + (res.desc || '-'));
        $('#carouselModal').modal('show');
      },
      error: function() {
        $('#modalImages').html('<div class="text-center text-danger">Failed to load data.</div>');
        $('#modalType').html('');
        $('#modalPrice').html('');
        $('#modalDesc').html('');
        $('#carouselModal').modal('show');
      }
    });
  });

  $('#carouselModal').on('shown.bs.modal', function () {
    if ($('.modal-flickity').length) {
      $('.modal-flickity').flickity({
        wrapAround: true,
        cellAlign: 'center',
        contain: true
      });
      $('.modal-flickity').flickity('resize');
    }
  });

  $('#carouselModal').on('hidden.bs.modal', function () {
    if ($('.modal-flickity').length) {
      $('.modal-flickity').flickity('destroy');
    }
  });
});
</script>
  </body>
</html>
