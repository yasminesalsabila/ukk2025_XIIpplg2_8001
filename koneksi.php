<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi = mysqli_connect('localhost', 'root', '', 'ukk2025_xiipplg2_8001');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
