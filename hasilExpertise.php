<?php
require_once('connection.php');
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $json_data = file_get_contents("php://input");

    $data = json_decode($json_data, true);
    if ($data === null) {
        http_response_code(400);
        echo json_encode(array("Success" => false, "message" => "Data JSON tidak valid."));
    } else {
        $report = $data["Report"];
        // if (!empty($report["report"])) {
             $dataReport = $report["report"];
        //     if (!empty($dataReport["description"]) && !empty($dataReport["reportDate"]) && !empty($dataReport["doctorID"]) && !empty($dataReport["doctorName"]) && !empty($dataReport["link"])) {
                $patientID = $data["Report"]["patient"]["id"];
                $orderID = $data["Report"]["order"]["id"];
                $description = $dataReport["description"];
                $reportDate = $dataReport["reportDate"];
                $doctorID = $dataReport["doctorID"];
                $doctorName = $dataReport["doctorName"];
                $link = $dataReport["link"];

                $datetime = new DateTime($reportDate);
                $formattedDate = $datetime->format('Y-m-d H:i:s');

                $sections = explode("=>", $dataReport["description"]);
                $hasil = $kesan = $usul = $klinis = "";
                $expectedTitles = array("Hasil", "Kesan", "Usul", "Klinis");
                foreach ($sections as $section) {
                    // Memisahkan judul dan isi dengan delimiter ":"
                    $parts = explode(":", $section, 2);
                    $title = trim($parts[0]);
                    $content = trim($parts[1]);
                    $matchingTitle = null;
                    foreach ($expectedTitles as $expectedTitle) {
                        similar_text(strtolower($title), strtolower($expectedTitle), $similarity);
                        if ($similarity > 80) {
                            $matchingTitle = $expectedTitle;
                            break;
                        }
                    }
                    
                    if ($matchingTitle !== null) {
                        switch ($matchingTitle) {
                            case "Hasil":
                                $hasil = $content;
                                break;
                            case "Kesan":
                                $kesan = $content;
                                break;
                            case "Usul":
                                $usul = $content;
                                break;
                            case "Klinis":
                                $klinis = $content;
                                break;
                        }
                    }else{}
                }
                $response = json_encode($json_data);
                // SQL untuk memasukkan data ke dalam tabel report_rad
                $insertSql1 = "INSERT INTO layanan.report_rad 
                            (PATIENT_ID, TINDAKAN_MEDIS, DESCRIPTION, REPORT_DATE, DOCTOR_ID, DOCTOR_NAME, LINK, RESPONSE)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt1 = $koneksi_layanan->prepare($insertSql1);
                $stmt1->bind_param("ssssssss", $patientID, $orderID, $description, $reportDate, $doctorID, $doctorName, $link, $response);

                // SQL untuk memasukkan atau memperbarui data ke dalam tabel hasil_rad
                $insertSql2 = "INSERT INTO layanan.hasil_rad 
                            (TINDAKAN_MEDIS, KLINIS, KESAN, USUL, HASIL, TANGGAL, DOKTER, OLEH, STATUS)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, '2')
                            ON DUPLICATE KEY UPDATE 
                            KLINIS = VALUES(KLINIS),
                            KESAN = VALUES(KESAN),
                            USUL = VALUES(USUL),
                            HASIL = VALUES(HASIL),
                            TANGGAL = VALUES(TANGGAL),
                            DOKTER = VALUES(DOKTER),
                            OLEH = VALUES(OLEH),
                            STATUS = '2'";
                $stmt2 = $koneksi_layanan->prepare($insertSql2);
                $stmt2->bind_param("ssssssss", $orderID, $klinis, $kesan, $usul, $hasil, $formattedDate, $doctorID, $doctorID);
                // Eksekusi pernyataan pertama
                $insertResult1 = $stmt1->execute();

                // Eksekusi pernyataan kedua
                $insertResult2 = $stmt2->execute();

                // Cek hasil eksekusi kedua pernyataan
                if ($insertResult1 && $insertResult2) {
                    $response = array("Success" => true, "message" => "Data berhasil disimpan ke dalam database.", "data" => $data);
                } else {
                    http_response_code(500);
                    $errorMessage = $koneksi_layanan->error;
                    $response = array("Success" => false, "message" => "Gagal menyimpan data ke dalam database: " . $errorMessage);
                }

                // Menutup statement
                $stmt1->close();
                $stmt2->close();

        //    } 
        //     else {
        //         http_response_code(400); // Bad Request
        //         $response = array("Success" => false, "message" => "Bidang 'report' ada yang kosong.");
        //     }
        // } else {
        //     http_response_code(400); // Bad Request
        //     $response = array("Success" => false, "message" => "Bidang 'report' tidak boleh kosong.");
        // }
    }
    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Metode HTTP tidak diizinkan."));
}
