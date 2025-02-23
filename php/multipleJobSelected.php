<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Debugging: Check received data
    if (!isset($_GET['jobid']) || !isset($_GET['selectedjobs'])) {
        echo "Missing required data.";
        exit;
    }

    $jobId = $_GET['jobid'];
    $selectedJobs = explode(",", $_GET['selectedjobs']); // Convert string to array

    // Sanitize inputs
    $jobId = htmlspecialchars($jobId, ENT_QUOTES, 'UTF-8');
    $selectedJobs = array_map(function($job) {
        return htmlspecialchars($job, ENT_QUOTES, 'UTF-8');
    }, $selectedJobs);

    // Convert array to a comma-separated string for storage
    $jobAll = implode(", ", $selectedJobs);

    // Prepare and insert into the database
    $stmt = $mysqli->prepare("INSERT INTO multipleJobSelected (jobid, selectedJobs) VALUES (?, ?)");

    if ($stmt === false) {
        echo "Error preparing statement: " . $mysqli->error;
        exit;
    }

    $stmt->bind_param("ss", $jobId, $jobAll);

    if ($stmt->execute()) {
        echo "<script>window.close();</script>"; // Close the tab after insertion
    } else {
        echo "Error inserting record: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $mysqli->close();
} else {
    echo "Invalid request method.";
}
?>
