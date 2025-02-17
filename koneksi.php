<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$koneksi = mysqli_connect('localhost','root','','ukk2025_XIIpplg2_8001');
