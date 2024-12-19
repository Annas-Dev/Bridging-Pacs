<?php
require_once('connection.php');
getDataJsonFromDatabase();

function getDataJsonFromDatabase()
{
    global $koneksi_layanan;
    global $koneksi_pendaftaran;
    $sql = $sql = "SELECT 
                    ordrad.TANGGAL, 
                    ordrad.DOKTER_ASAL, 
                    ordrad.ALASAN,
                    ordrad.KUNJUNGAN AS KUNJUNGAN_ASAL,
                    ordet.REF AS TINDAKAN_MEDIS,
                    kunj.NOPEN, 
                    kunj.RUANGAN, 
                    kunj.NOMOR,
                    kunj.MASUK,
                    pendaftar.NORM,
                    psn.NAMA, 
                    psn.GELAR_DEPAN, 
                    psn.GELAR_BELAKANG, 
                    psn.TANGGAL_LAHIR, 
                    psn.ALAMAT,
                    psn.JENIS_KELAMIN,
                    kontak_pasien.NOMOR AS NOMOR_KONTAK,
                    ruang.DESKRIPSI AS NAMA_RUANGAN,
                    tindak.ID AS TINDAKAN,
                    tindak.NAMA AS NAMA_TINDAKAN,
                    tindakBaru.ID AS TINDAKAN_BARU,
                    tindakBaru.NAMA AS NAMA_TINDAKAN_BARU,
                    dktr.NIP AS NIP_DOKTER,
                    peg.NAMA AS NAMA_DOKTER,
                    modality.MODALITY
                FROM 
                    layanan.order_rad AS ordrad
                    LEFT JOIN layanan.order_detil_rad AS ordet
                        ON ordrad.NOMOR = ordet.ORDER_ID

                    INNER JOIN pendaftaran.kunjungan AS kunj
                        ON ordrad.NOMOR = kunj.REF

                    INNER JOIN pendaftaran.pendaftaran AS pendaftar
                        ON kunj.NOPEN = pendaftar.NOMOR

                    INNER JOIN master.pasien AS psn
                        ON pendaftar.NORM = psn.NORM

                    LEFT JOIN master.kontak_pasien AS kontak_pasien
                        ON psn.NORM = kontak_pasien.NORM

                    LEFT JOIN master.ruangan AS ruang
                        ON kunj.RUANGAN = ruang.ID

                    -- Mapping Tindakan Baru To Lama
                    LEFT JOIN master.mapping_tindakan_lama_to_baru_rad AS map_tindakan
                        ON ordet.TINDAKAN = map_tindakan.ID_TINDAKAN_BARU
                    LEFT JOIN master.tindakan AS tindak
                        ON map_tindakan.ID_TINDAKAN_LAMA = tindak.ID
                    
                    -- Langsung Ammbil Tindakan Baru
                    LEFT JOIN master.tindakan AS tindakBaru
                        ON ordet.TINDAKAN = tindakBaru.ID

                    LEFT JOIN layanan.modality_rad AS modality
                        ON map_tindakan.ID_TINDAKAN_LAMA = modality.TINDAKAN

                    LEFT JOIN master.dokter AS dktr
                        ON ordrad.DOKTER_ASAL = dktr.ID

                    LEFT JOIN master.pegawai AS peg
                        ON dktr.NIP = peg.NIP

                WHERE 
                    kunj.RUANGAN = '101110101' 
                    AND kunj.NOMOR NOT IN (
                        SELECT NOMOR 
                        FROM pendaftaran.log_order_radiologi
                    )
                    AND ordrad.TANGGAL > '2024-12-17';";

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

            $tindakan = '';
            $namaTIndakan = '';
            if ($row['TINDAKAN'] != null) {
                $tindakan = $row['TINDAKAN'];
                $namaTIndakan = $row['NAMA_TINDAKAN'];
            }else{
                $tindakan = $row['TINDAKAN_BARU'];
                $namaTIndakan = $row['NAMA_TINDAKAN_BARU'];
            }

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
                        'serviceCode' => $tindakan,
                        'serviceName' => $namaTIndakan,
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
            // Persiapkan pernyataan SQL dengan parameter
            $insertSql = "INSERT INTO pendaftaran.log_order_radiologi (MASUK, NOMOR, MODALITY, DATA_SEND, RESPONSE) VALUES (?, ?, ?, ?, ?)";
            $stmt = $koneksi_layanan->prepare($insertSql);
            $stmt->bind_param("sssss", $masuk, $nokun, $modality, $json_data, $response);
            $insertResult = $stmt->execute();
            if (!$insertResult) {
                die("Error: " . $koneksi_layanan->error);
            }
            $stmt->close();
        }
    }

    curl_close($ch);
}
