<?php
require_once 'databaseConnection.php';

$mysqli = db_connect(); // Get the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobID = $_POST["jobNumber"]; // Fetch job number from the form
    $stmt = $mysqli->prepare("INSERT INTO lubricants (jobNumber, lubType, lubQuan, lubPrice, lubDis, lubNet, labourCode, labourQuan, labourPrice, labourDis, labourNet, dentType, dentQuan, dentPrice, dentDis, dentNet, spareType, spareQuan, sparePrice, spareDis, spareNet) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Error in preparing statement: " . $mysqli->error);
    }

    for ($i = 0; $i <= 10; $i++) {
        $lubType = $_POST["lubType" . ($i == 0 ? "" : $i)] ?? '';
        $lubQuan = $_POST["lubQuan" . ($i == 0 ? "" : $i)] ?? 0;
        $lubPrice = $_POST["lubPrice" . ($i == 0 ? "" : $i)] ?? 0;
        $lubDis = $_POST["lubDis" . ($i == 0 ? "" : $i)] ?? 0;
        $lubNet = $_POST["lubNet" . ($i == 0 ? "" : $i)] ?? 0;

        $labourCode = $_POST["labourCode" . ($i == 0 ? "" : $i)] ?? '';
        $labourQuan = $_POST["labourQuan" . ($i == 0 ? "" : $i)] ?? 0;
        $labourPrice = $_POST["labourPrice" . ($i == 0 ? "" : $i)] ?? 0;
        $labourDis = $_POST["labourDis" . ($i == 0 ? "" : $i)] ?? 0;
        $labourNet = $_POST["labourNet" . ($i == 0 ? "" : $i)] ?? 0;

        $dentType = $_POST["dentType" . ($i == 0 ? "" : $i)] ?? '';
        $dentQuan = $_POST["dentQuan" . ($i == 0 ? "" : $i)] ?? 0;
        $dentPrice = $_POST["dentPrice" . ($i == 0 ? "" : $i)] ?? 0;
        $dentDis = $_POST["dentDis" . ($i == 0 ? "" : $i)] ?? 0;
        $dentNet = $_POST["dentNet" . ($i == 0 ? "" : $i)] ?? 0;

        $spareType = $_POST["spareType" . ($i == 0 ? "" : $i)] ?? '';
        $spareQuan = $_POST["spareQuan" . ($i == 0 ? "" : $i)] ?? 0;
        $sparePrice = $_POST["sparePrice" . ($i == 0 ? "" : $i)] ?? 0;
        $spareDis = $_POST["spareDis" . ($i == 0 ? "" : $i)] ?? 0;
        $spareNet = $_POST["spareNet" . ($i == 0 ? "" : $i)] ?? 0;
        

        // Insert data only if at least one field is filled
        if (!empty(trim($lubType)) || !empty(trim($labourCode)) || !empty(trim($dentType)) || !empty(trim($spareType)) || !empty(trim($customLubType))) {
            $stmt->bind_param("ssidddsidddsidddsiddd", $jobID, $lubType, $lubQuan, $lubPrice, $lubDis, $lubNet, $labourCode, $labourQuan, $labourPrice, $labourDis, $labourNet, $dentType, $dentQuan, $dentPrice, $dentDis, $dentNet,  $spareType, $spareQuan, $sparePrice, $spareDis, $spareNet);
            $stmt->execute();
        }
    }

    echo "Data inserted successfully!";

    $stmt->close();
}

$mysqli->close();
