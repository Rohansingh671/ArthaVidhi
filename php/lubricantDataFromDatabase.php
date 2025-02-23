<?php

require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli) {
    // Initialize required variables
    $currentLubricantType = '';
    $lubricantTypes = array(); // Array to store all lubricant details

    if (isset($_GET['id'])) {
        // Fetch the specific lubricant details
        $id = $_GET['id'];
        $stmt = $mysqli->prepare("SELECT `lubricantID`, `lubricantType`, `lubricantCharge`, `status` FROM `lubricantDetails` WHERE `lubricantID` = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($lubricantID, $lubricantType, $lubricantCharge, $lubStatus);
        if ($stmt->fetch()) {
            $currentLubricantType = $lubricantType;
        }
        $stmt->close();
    } else {
        // Fetch all lubricant types for dropdown options
        $stmt = $mysqli->prepare("SELECT `lubricantID`, `lubricantType`, `lubricantCharge`, `status` FROM `lubricantDetails`");
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($lubricantID, $lubricantType, $lubricantCharge, $lubStatus);

        // Populate the `$lubricants` array
        while ($stmt->fetch()) {
            $lubricantTypes[] = array(
                'lubricantID' => $lubricantID,
                'lubricantType' => $lubricantType,
                'lubricantCharge' => $lubricantCharge,
                'status' => $lubStatus
            );
        }
        $stmt->close(); // Close the statement after populating the array
    }
} else {
    echo "Database connection failed: " . $mysqli->connect_error;
    exit;
}

db_close($mysqli);
