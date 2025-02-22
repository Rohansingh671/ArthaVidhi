<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['jobID']) && !empty($_POST['jobDescription']) && !empty($_POST['unitPrice']) && isset($_POST['jobStatus'])) {

        // Assign variables after basic sanitization
        $jobID = htmlspecialchars(trim($_POST['jobID']));
        $jobDescription = htmlspecialchars(trim($_POST['jobDescription']));
        $unitPrice = htmlspecialchars(trim($_POST['unitPrice']));
        $jobStatus = !empty($_POST['jobStatus']) ? htmlspecialchars(trim($_POST['jobStatus'])) : 'Inactive';

        // Validate jobDescription (only letters, numbers, spaces allowed)
        if (!preg_match("/^[\p{Devanagari}a-zA-Z0-9\s\(\)]+$/u", $jobDescription)) {
            echo "Job Description can only contain letters (including Nepali), numbers, and spaces.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO `createJob` (`ID`, `jobID`, `jobDescription`, `unitPrice`, `status`) VALUES (NULL, ?, ?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("ssss", $jobID, $jobDescription, $unitPrice, $jobStatus);
        if ($stmt->execute()) {
            header("Location: ../brand-list.php");
        } else {
            echo "Error inserting record: " . $stmt->error;
        }

        // Close statement and database connection
        $stmt->close();
        $mysqli->close();
    } else {
        echo "Required fields are missing.";
    }
} else {
    echo "Invalid request method.";
}
