<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['spareID']) && !empty($_POST['spareType']) && !empty($_POST['spareCharge']) && isset($_POST['spareStatus'])) {

        // Assign variables after basic sanitization
        $spareID = htmlspecialchars(trim($_POST['spareID']));
        $spareType = htmlspecialchars(trim($_POST['spareType']));
        $spareCharge = htmlspecialchars(trim($_POST['spareCharge']));
        $spareStatus = !empty($_POST['spareStatus']) ? htmlspecialchars(trim($_POST['spareStatus'])) : 'Inactive';

        // Validate spareType (only letters, numbers, and spaces allowed)
        if (!preg_match("/^[\p{Devanagari}a-zA-Z0-9\s\(\)]+$/u", $spareType)) {
            echo "Spare Parts Type can only contain letters (including Nepali), numbers, and spaces.";
            exit;
        }

        // Validate spareCharge (only numbers allowed)
        if (!preg_match("/^\d+(\.\d{1,2})?$/", $spareCharge)) {
            echo "Spare Parts Charge must be a valid numeric value.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO `sparePartsDetails` (`spareID`, `spareType`, `spareCharge`, `status`) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("ssss", $spareID, $spareType, $spareCharge, $spareStatus);
        if ($stmt->execute()) {
            header("Location: ../spare-parts.php");
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
