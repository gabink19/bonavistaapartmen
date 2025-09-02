<?php
require_once 'koneksi.php';

$id = intval($_GET['id'] ?? 0);

$query = "SELECT l.*, li.image_url 
          FROM listings l 
          LEFT JOIN listings_images li ON l.id = li.listings_id 
          WHERE l.id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

$images = [];
$desc = '';
$type = '';
$price = '';
if ($result) {
    while ($row = $result->fetch_assoc()) {
        if ($row['image_url']) $images[] = $row['image_url'];
        $desc = $row['description'];
        $type = strtoupper($row['type']);
        $price = 'Rp ' . number_format($row['price'], 0, ',', '.');
    }
}

echo json_encode([
    'images' => $images,
    'desc' => $desc,
    'type' => $type,
    'price' => $price,
    'id' => $id
]);
?>