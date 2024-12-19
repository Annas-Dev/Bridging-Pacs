<?php
require_once('connection.php');
$no_order_rad = "131010101012308020002"; // Ganti dengan nilai REF yang Anda cari

$sql = "SELECT 
            order_rad.TANGGAL, 
            order_rad.DOKTER_ASAL, 
            order_detil_rad.TINDAKAN,
            kunjungan.NOPEN, 
            kunjungan.RUANGAN, 
            pendaftaran.NORM,
            pasien.NAMA, 
            pasien.GELAR_DEPAN, 
            pasien.GELAR_BELAKANG, 
            pasien.TANGGAL_LAHIR, 
            pasien.ALAMAT,
            pasien.JENIS_KELAMIN,
            kontak_pasien.NOMOR AS NOMOR_KONTAK,
            ruangan.DESKRIPSI AS NAMA_RUANGAN,
            tindakan.NAMA AS NAMA_TINDAKAN,
            dokter.NIP AS NIP_DOKTER,
            pegawai.NAMA AS NAMA_DOKTER
        FROM layanan.order_rad
        LEFT JOIN layanan.order_detil_rad ON order_rad.NOMOR = order_detil_rad.ORDER_ID
        INNER JOIN pendaftaran.kunjungan ON order_rad.NOMOR = kunjungan.REF
        INNER JOIN pendaftaran.pendaftaran ON kunjungan.NOPEN = pendaftaran.NOMOR
        INNER JOIN master.pasien ON pendaftaran.NORM = pasien.NORM
        LEFT JOIN master.kontak_pasien ON pasien.NORM = kontak_pasien.NORM
        LEFT JOIN master.ruangan ON kunjungan.RUANGAN = ruangan.ID
        LEFT JOIN master.tindakan ON order_detil_rad.TINDAKAN = tindakan.ID
        LEFT JOIN master.dokter ON order_rad.DOKTER_ASAL = dokter.ID
        LEFT JOIN master.pegawai ON dokter.NIP = pegawai.NIP
        WHERE order_rad.NOMOR = '$no_order_rad'";

$result = $koneksi_layanan->query($sql);

if (!$result) {
    die("Error: " . $koneksi_layanan->error);
}

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data = array(
            'Order' => array(
                'patient' => array(
                    'id' => $row['NORM'],
                    'first_name' => $row['GELAR_DEPAN'],
                    'middle_name' => $row['NAMA'],
                    'last_name' => $row['GELAR_BELAKANG'],
                    'sex' => $row['JENIS_KELAMIN'],
                    'birthDate' => $row['TANGGAL_LAHIR'],
                    'phone' => $row['NOMOR_KONTAK'],
                    'address' => $row['ALAMAT'],
                    'height' => '',
                    'weight' => '',
                    'priority' => '',
                    'department' => $row['NAMA_RUANGAN'],
                ),
                'order' => array(
                    'id' => '',
                    'serviceCode' => $row['TINDAKAN'],
                    'serviceName' => $row['NAMA_TINDAKAN'],
                    'status' => 'NEW',
                    'orderDate' => $row['TANGGAL'],
                    'doctor' => $row['NAMA_DOKTER'],
                    'modality' => '',
                    'clinicalDiagnosis' => '',
                ),
            ),
        );
    }
}

// Konversi data menjadi format JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $json_data;
