<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli) {
    // Initialize required variables
    $currentSpareType = '';
    $spareTypes = array(); // Array to store all spare parts

    if (isset($_GET['id'])) {
        // Fetch the specific spare part details
        $id = $_GET['id'];
        $stmt = $mysqli->prepare("SELECT `spareID`, `spareType`, `spareCharge`, `status` FROM `sparePartsDetails` WHERE `spareID` = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($spareID, $spareType, $spareCharge, $spareStatus);
        if ($stmt->fetch()) {
            $currentSpareType = $spareType;
        }
        $stmt->close();
    } else {
        // Fetch all spare parts for the dropdown options
        $stmt = $mysqli->prepare("SELECT `spareID`, `spareType`, `spareCharge`, `status` FROM `sparePartsDetails`");
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($spareID, $spareType, $spareCharge, $spareStatus);

        // Populate the `$spares` array
        while ($stmt->fetch()) {
            $spareTypes[] = array(
                'spareID' => $spareID,
                'spareType' => $spareType,
                'spareCharge' => $spareCharge,
                'status' => $spareStatus
            );
        }
        $stmt->close(); // Close the statement after populating the array
    }
} else {
    echo "Database connection failed: " . $mysqli->connect_error;
    exit;
}

db_close($mysqli);
