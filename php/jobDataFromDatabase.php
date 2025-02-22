<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli) {
    // Initialize default values
    $currentJobDescription = '';
    $jobs = array(); // Array to store all jobs

    if (isset($_GET['id'])) {
        // Fetch the current job details for the specific entry
        $id = $_GET['id'];
        $stmt = $mysqli->prepare("SELECT ID, jobID, jobDescription, unitPrice, status FROM `createJob` WHERE `ID` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($ID, $jobID, $jobDescription, $unitPrice, $jobStatus);
        if ($stmt->fetch()) {
            $currentJobDescription = $jobDescription;
        }
        $stmt->close();
    } else {
        // Fetch all jobs for dropdown options
        $stmt = $mysqli->prepare("SELECT `ID`, `jobID`, `jobDescription`, `unitPrice`, `status` FROM `createJob`");
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($ID, $jobID, $jobDescription, $unitPrice, $jobStatus);

        // Populate the `$jobs` array
        while ($stmt->fetch()) {
            $jobs[] = array(
                'ID' => $ID,
                'jobID' => $jobID,
                'jobDescription' => $jobDescription,
                'unitPrice' => $unitPrice,
                'status' => $jobStatus
            );
        }
        $stmt->close(); // Close the statement after populating the array
    }
} else {
    echo "Database connection failed: " . $mysqli->connect_error;
    exit;
}

db_close($mysqli);
