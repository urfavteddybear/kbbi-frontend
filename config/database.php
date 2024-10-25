<?php
function getConnection() {
    $servername = "localhost";
    $username = "root"; // Ganti sesuai dengan konfigurasi Anda
    $password = ""; // Ganti sesuai dengan konfigurasi Anda
    $dbname = "kbbi"; // Nama database

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    return $conn;
}
