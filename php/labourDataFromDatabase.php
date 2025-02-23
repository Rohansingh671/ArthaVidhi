<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli) {
    // Initialize required variables
    $currentLabourCode = '';
    $labourCodes = array(); // Array to store all labour codes

    if (isset($_GET['id'])) {
        // Fetch the specific labour code details
        $id = $_GET['id'];
        $stmt = $mysqli->prepare("SELECT `labourID`, `labourCode`, `labourCharge`, `status` FROM `labourCode` WHERE `labourID` = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($labourID, $labourCode, $labourCharge, $codeStatus);
        if ($stmt->fetch()) {
            $currentLabourCode = $labourCode;
        }
        $stmt->close();
    } else {
        // Fetch all labour codes for dropdown options
        $stmt = $mysqli->prepare("SELECT `labourID`, `labourCode`, `labourCharge`, `status` FROM `labourCode`");
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($labourID, $labourCode, $labourCharge, $codeStatus);

        // Populate the `$labours` array
        while ($stmt->fetch()) {
            $labourCodes[] = array(
                'labourID' => $labourID,
                'labourCode' => $labourCode,
                'labourCharge' => $labourCharge,
                'status' => $codeStatus
            );
        }
        $stmt->close(); // Close the statement after populating the array
    }
} else {
    echo "Database connection failed: " . $mysqli->connect_error;
    exit;
}

db_close($mysqli);
