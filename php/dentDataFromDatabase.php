<?php

require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli) {
    // Initialize required variables
    $currentDentType = '';
    $dentTypes = array(); // Array to store all dent details

    if (isset($_GET['id'])) {
        // Fetch the specific dent details
        $id = $_GET['id'];
        $stmt = $mysqli->prepare("SELECT `dentID`, `dentPaintType`, `dentPaintCharge`, `status` FROM `dentPaintDetails` WHERE `dentID` = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($dentID, $dentType, $dentCharge, $dentStatus);
        if ($stmt->fetch()) {
            $currentDentType = $dentType;
        }
        $stmt->close();
    } else {
        // Fetch all dent types for dropdown options
        $stmt = $mysqli->prepare("SELECT `dentID`, `dentPaintType`, `dentPaintCharge`, `status` FROM `dentPaintDetails`");
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($dentID, $dentType, $dentCharge, $dentStatus);

        // Populate the `$dents` array
        while ($stmt->fetch()) {
            $dentTypes[] = array(
                'dentID' => $dentID,
                'dentType' => $dentType,
                'dentCharge' => $dentCharge,
                'status' => $dentStatus
            );
        }
        $stmt->close(); // Close the statement after populating the array
    }
} else {
    echo "Database connection failed: " . $mysqli->connect_error;
    exit;
}

db_close($mysqli);
