<?php
require_once('connection.php');
getDataJsonFromDatabase();

function getDataJsonFromDatabase()
{
    global $koneksi_layanan;
    global $koneksi_pendaftaran;
    $sql = $sql = "SELECT 
            order_rad.TANGGAL, 
            order_rad.DOKTER_ASAL, 
            order_rad.ALASAN,
            order_rad.KUNJUNGAN as KUNJUNGAN_ASAL,
            order_detil_rad.TINDAKAN,
            order_detil_rad.REF AS TINDAKAN_MEDIS,
            kunjungan.NOPEN, 
            kunjungan.RUANGAN, 
            kunjungan.NOMOR,
            kunjungan.MASUK,
            pendaftaran.NORM,
            pasien.NAMA, 
            pasien.GELAR_DEPAN, 
            pasien.GELAR_BELAKANG, 
            pasien.TANGGAL_LAHIR, 
            pasien.ALAMAT,
            pasien.JENIS_KELAMIN,
            kontak_pasien.NOMOR AS NOMOR_KONTAK,
            master_ruangan.DESKRIPSI AS NAMA_RUANGAN,
            tindakan.NAMA AS NAMA_TINDAKAN,
            dokter.NIP AS NIP_DOKTER,
            pegawai.NAMA AS NAMA_DOKTER,
            modality_rad.MODALITY
        FROM layanan.order_rad
        LEFT JOIN layanan.order_detil_rad ON order_rad.NOMOR = order_detil_rad.ORDER_ID
        INNER JOIN pendaftaran.kunjungan ON order_rad.NOMOR = kunjungan.REF
        INNER JOIN pendaftaran.pendaftaran ON kunjungan.NOPEN = pendaftaran.NOMOR
        INNER JOIN master.pasien ON pendaftaran.NORM = pasien.NORM
        LEFT JOIN master.kontak_pasien ON pasien.NORM = kontak_pasien.NORM
        LEFT JOIN master.ruangan AS master_ruangan ON kunjungan.RUANGAN = master_ruangan.ID
        LEFT JOIN master.tindakan ON order_detil_rad.TINDAKAN = tindakan.ID
        LEFT JOIN layanan.modality_rad ON order_detil_rad.TINDAKAN = modality_rad.TINDAKAN
        LEFT JOIN master.dokter ON order_rad.DOKTER_ASAL = dokter.ID
        LEFT JOIN master.pegawai ON dokter.NIP = pegawai.NIP
        WHERE kunjungan.RUANGAN = '101110101' AND kunjungan.NOMOR NOT IN (SELECT NOMOR FROM pendaftaran.log_order_radiologi)";

    $result = $koneksi_layanan->query($sql);



    if (!$result) {
        die("Error: " . $koneksi_layanan->error);
    }

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $asal = $row['KUNJUNGAN_ASAL'];
            $sql2 = "SELECT b.DESKRIPSI
                    FROM pendaftaran.kunjungan a
                    JOIN master.ruangan b ON a.RUANGAN = b.ID
                    WHERE a.NOMOR = $asal";

            $result2 = $koneksi_pendaftaran->query($sql2);
            $departement = '';
            if ($result2) {
                $row2 = $result2->fetch_assoc();
                $departement = $row2['DESKRIPSI'];
            } else {
                echo "Tidak ada data yang ditemukan.";
            }

            if ($row['JENIS_KELAMIN'] == 1) {
                $jns_kelamin = 'M';
            } else {
                $jns_kelamin = 'F';
            }
            $tanggal_waktu = $row['TANGGAL_LAHIR'];
            $tanggal = date("Y-m-d", strtotime($tanggal_waktu));

            $data[] = array(
                'Order' => array(
                    'patient' => array(
                        'id' => $row['NORM'],
                        'first_name' => '',
                        'middle_name' => '',
                        'last_name' => $row['NAMA'],
                        'sex' => $jns_kelamin,
                        'birthDate' => $tanggal,
                        'phone' => $row['NOMOR_KONTAK'],
                        'address' => $row['ALAMAT'],
                        'height' => '',
                        'weight' => '',
                        'priority' => '',
                        'department' => $departement,
                    ),
                    'order' => array(
                        'id' => $row['TINDAKAN_MEDIS'],
                        'serviceCode' => $row['TINDAKAN'],
                        'serviceName' => $row['NAMA_TINDAKAN'],
                        'status' => 'NEW',
                        'orderDate' => $row['TANGGAL'],
                        'doctor' => $row['NAMA_DOKTER'],
                        'modality' => $row['MODALITY'],
                        'masuk' => $row['MASUK'],
                        'nokun' => $row['NOMOR'],
                        'clinicalDiagnosis' => $row['ALASAN'],
                    ),
                ),
            );
            
            // $dataToInsert[] = array(
            //     'MASUK' => $row['MASUK'],
            //     'NOMOR' => $row['NOMOR'],
            //     'MODALITY' => $row['MODALITY'],
            //     'Order' => array(
            //         'patient' => array(
            //             'id' => $row['NORM'],
            //             'first_name' => '',
            //             'middle_name' => '',
            //             'last_name' => $row['NAMA'],
            //             'sex' => $jns_kelamin,
            //             'birthDate' => $tanggal,
            //             'phone' => $row['NOMOR_KONTAK'],
            //             'address' => $row['ALAMAT'],
            //             'height' => '',
            //             'weight' => '',
            //             'priority' => '',
            //             'department' => $departement,
            //         ),
            //         'order' => array(
            //             'id' => $row['TINDAKAN_MEDIS'],
            //             'serviceCode' => $row['TINDAKAN'],
            //             'serviceName' => $row['NAMA_TINDAKAN'],
            //             'status' => 'NEW',
            //             'orderDate' => $row['TANGGAL'],
            //             'doctor' => $row['NAMA_DOKTER'],
            //             'modality' => $row['MODALITY'],
            //             //'modality' => 'DX',
            //             'clinicalDiagnosis' => $row['ALASAN'],
            //         ),
            //     )
            // );
        }
        foreach ($data as $data_item) {
            sendDataToAPI($data_item);
        }

        // foreach ($dataToInsert as $record) {
        //     $masuk = $record['MASUK'];
        //     $nomor = $record['NOMOR'];
        //     $modality = $record['MODALITY'];
        //     $data_send =  $record['Order'];
        //     $json_data_send = json_encode($data_send, JSON_PRETTY_PRINT);

        //     $insertSql = "INSERT INTO pendaftaran.log_order_radiologi (MASUK, NOMOR) VALUES ('$masuk', $nomor)";
        //     $insertResult = $koneksi_layanan->query($insertSql);

        //     if (!$insertResult) {
        //         die("Error: " . $koneksi_layanan->error);
        //     }
        // }
    }else{
        echo "Tidak ada kunjungan radiologi baru";
    }
    $json_data = json_encode($data, JSON_PRETTY_PRINT);
    // echo $json_data;
    // return  $json_data;
}

function sendDataToAPI($data)
{
    global $koneksi_layanan;
    $json_data = json_encode($data);
    $masuk = $data['Order']['order']['masuk'];
    $nokun = $data['Order']['order']['nokun'];
    $modality = $data['Order']['order']['modality'];

    // echo $json_data;
    $api_url = 'http://119.252.175.77:10110/pacs/putOrder/';

    // Konfigurasi pengiriman data ke API menggunakan cURL
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($json_data)
    ));

    $response = curl_exec($ch);

    if (!$response) {
        echo 'Error: ' . curl_error($ch);
    } else {
        echo 'API Response: ' . $response;
        $responseData = json_decode($response, true);
        if (isset($responseData['code']) && $responseData['code'] == '200') {
            $insertSql = "INSERT INTO pendaftaran.log_order_radiologi (MASUK, NOMOR,MODALITY, DATA_SEND) VALUES ('$masuk', $nokun,'$modality','$json_data')";
            $insertResult = $koneksi_layanan->query($insertSql);
            if (!$insertResult) {
                die("Error: " . $koneksi_layanan->error);
            }
        }
    }

    curl_close($ch);
}
