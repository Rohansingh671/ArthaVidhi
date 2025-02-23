<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['lubricantID']) && !empty($_POST['lubricantType']) && !empty($_POST['lubricantCharge']) && isset($_POST['lubStatus'])) {

        // Assign variables after basic sanitization
        $lubricantID = htmlspecialchars(trim($_POST['lubricantID']));
        $lubricantType = htmlspecialchars(trim($_POST['lubricantType']));
        $lubricantCharge = htmlspecialchars(trim($_POST['lubricantCharge']));
        $lubStatus = !empty($_POST['lubStatus']) ? htmlspecialchars(trim($_POST['lubStatus'])) : 'Inactive';

        // Validate lubricantType (only letters, numbers, spaces allowed)
        if (!preg_match("/^[\p{Devanagari}a-zA-Z0-9\s\(\)]+$/u", $lubricantType)) {
            echo "Lubricant Type can only contain letters (including Nepali), numbers, and spaces.";
            exit;
        }

        // Validate lubricantCharge (only numbers allowed)
        if (!preg_match("/^\d+(\.\d{1,2})?$/", $lubricantCharge)) {
            echo "Lubricant Charge must be a valid numeric value.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO `lubricantDetails` (`lubricantID`, `lubricantType`, `lubricantCharge`, `status`) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("ssss", $lubricantID, $lubricantType, $lubricantCharge, $lubStatus);
        if ($stmt->execute()) {
            header("Location: ../lubricants-list.php");
            exit;
        } else {
            echo "Error inserting record: " . $stmt->error;
        }

        // Close statement and database connection
        $stmt->close();
        $mysqli->close();
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
