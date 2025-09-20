<?php
$host = "localhost";
$user = "u1114618_booking_us3r";
$pass = "u1114618_booking_p455";
$db   = "u1114618_booking";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} 