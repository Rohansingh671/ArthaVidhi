<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli) {
    // Initialize an array to store all jobs
    $jobCards = array();

    if (isset($_GET['id'])) {
        // Fetch the current job details for the specific entry
        $id = $_GET['id'];
        $stmt = $mysqli->prepare("SELECT ID, jobNumber, jobDate, registerNumber, millage, vehicleBrand, vehicleModel, vehicleColour, engineNumber, vinNumber, customerName, contactNumber FROM `jobCard` WHERE `ID` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($ID, $jobNumber, $jobDate, $registerNumber, $millage, $vehicleBrand, $vehicleModel, $vehicleColour, $engineNumber, $vinNumber, $customerName, $contactNumber);
        $stmt->fetch();
        $stmt->close();
    } else {
        // Fetch all jobs for dropdown options
        $stmt = $mysqli->prepare("SELECT `ID`, `jobNumber`, `jobDate`, `registerNumber`, `millage`, `vehicleBrand`, `vehicleModel`, `vehicleColour`, `engineNumber`, `vinNumber`, `customerName`, `contactNumber`, `paymentStatus` FROM `jobCard`");
        $stmt->execute();
        $stmt->bind_result($ID, $jobNumber, $jobDate, $registerNumber, $millage, $vehicleBrand, $vehicleModel, $vehicleColour, $engineNumber, $vinNumber, $customerName, $contactNumber, $paymentStatus);

        // Populate the `$jobCards` array
        while ($stmt->fetch()) {
            $jobCards[] = array(
                'ID' => $ID,
                'jobNumber' => $jobNumber,
                'jobDate' => $jobDate,
                'registerNumber' => $registerNumber,
                'millage' => $millage,
                'vehicleBrand' => $vehicleBrand,
                'vehicleModel' => $vehicleModel,
                'vehicleColour' => $vehicleColour,
                'engineNumber' => $engineNumber,
                'vinNumber' => $vinNumber,
                'customerName' => $customerName,
                'contactNumber' => $contactNumber,
                'paymentStatus' => $paymentStatus
            );
        }
        $stmt->close(); // Close the statement after populating the array
    }
} else {
    echo "Database connection failed: " . $mysqli->connect_error;
    exit;
}

// Close the database connection
$mysqli->close();
