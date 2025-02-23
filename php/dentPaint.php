<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['dentID']) && !empty($_POST['dentType']) && !empty($_POST['dentCharge']) && isset($_POST['dentStatus'])) {

        // Assign variables after basic sanitization
        $dentID = htmlspecialchars(trim($_POST['dentID']));
        $dentType = htmlspecialchars(trim($_POST['dentType']));
        $dentCharge = htmlspecialchars(trim($_POST['dentCharge']));
        $dentStatus = !empty($_POST['dentStatus']) ? htmlspecialchars(trim($_POST['dentStatus'])) : 'Inactive';

        // Validate dentType (only letters, numbers, spaces allowed)
        if (!preg_match("/^[\p{Devanagari}a-zA-Z0-9\s\(\)]+$/u", $dentType)) {
            echo "Dent/Paint Type can only contain letters (including Nepali), numbers, and spaces.";
            exit;
        }

        // Validate dentCharge (only numbers allowed)
        if (!preg_match("/^\d+(\.\d{1,2})?$/", $dentCharge)) {
            echo "Dent/Paint Charge must be a valid numeric value.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO `dentPaintDetails` (`dentID`, `dentPaintType`, `dentPaintCharge`, `status`) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("ssss", $dentID, $dentType, $dentCharge, $dentStatus);
        if ($stmt->execute()) {
            header("Location: ../dentPaint-list.php");
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
