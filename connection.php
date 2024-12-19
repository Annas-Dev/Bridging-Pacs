<?php
// PROD
$servername = "10.10.10.33";
$username = "itrstc";
$password = "S!rstc214155";
// DEV
// $servername = "119.252.175.37";
// $username = "databasedev";
// $password = "Rstc@2023";
$dbname_pendaftaran = "pendaftaran";
$dbname_master = "master";
$dbname_layanan = "layanan";

// Membuat koneksi ke database pendaftaran
$koneksi_pendaftaran = new mysqli($servername, $username, $password, $dbname_pendaftaran);

// Mengecek koneksi
if ($koneksi_pendaftaran->connect_error) {
    die("Koneksi ke database pendaftaran gagal: " . $koneksi_pendaftaran->connect_error);
}

// Membuat koneksi ke database master
$koneksi_master = new mysqli($servername, $username, $password, $dbname_master);

// Mengecek koneksi
if ($koneksi_master->connect_error) {
    die("Koneksi ke database master gagal: " . $koneksi_master->connect_error);
}

// Membuat koneksi ke database master
$koneksi_layanan = new mysqli($servername, $username, $password, $dbname_layanan);

// Mengecek koneksi
if ($koneksi_layanan->connect_error) {
    die("Koneksi ke database master gagal: " . $koneksi_layanan->connect_error);
}
