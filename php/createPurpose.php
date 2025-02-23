<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['pupID']) && !empty($_POST['purpose']) && isset($_POST['pupStatus'])) {

        // Assign variables after basic sanitization
        $pupID = htmlspecialchars(trim($_POST['pupID']));
        $purpose = htmlspecialchars(trim($_POST['purpose']));
        $pupStatus = !empty($_POST['pupStatus']) ? htmlspecialchars(trim($_POST['pupStatus'])) : 'Inactive';

        // Validate jobDescription (only letters, numbers, spaces allowed)
        if (!preg_match("/^[\p{Devanagari}a-zA-Z0-9\s\(\)]+$/u", $purpose)) {
            echo "Purpose Description can only contain letters (including Nepali), numbers, and spaces.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO `createPurpose` (`ID`, `pupID`, `purpose`, `status`) VALUES (NULL, ?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("sss", $pupID, $purpose, $pupStatus);
        if ($stmt->execute()) {
            header("Location: ../purpose-list.php");
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
