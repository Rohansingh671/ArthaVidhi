<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['labourID']) && !empty($_POST['labourCode']) && !empty($_POST['labourCharge']) && isset($_POST['codeStatus'])) {

        // Assign variables after basic sanitization
        $labourID = htmlspecialchars(trim($_POST['labourID']));
        $labourCode = htmlspecialchars(trim($_POST['labourCode']));
        $labourCharge = htmlspecialchars(trim($_POST['labourCharge']));
        $codeStatus = !empty($_POST['codeStatus']) ? htmlspecialchars(trim($_POST['codeStatus'])) : 'Inactive';

        // Validate labourCode (only letters, numbers, spaces allowed)
        if (!preg_match("/^[\p{Devanagari}a-zA-Z0-9\s\(\)]+$/u", $labourCode)) {
            echo "Labour Code can only contain letters (including Nepali), numbers, and spaces.";
            exit;
        }

        // Validate labourCharge (only numbers allowed)
        if (!preg_match("/^\d+(\.\d{1,2})?$/", $labourCharge)) {
            echo "Labour Charge must be a valid numeric value.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO `labourCode` (`ID`, `labourID`, `labourCode`, `labourCharge`, `status`) VALUES (NULL, ?, ?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("ssss", $labourID, $labourCode, $labourCharge, $codeStatus);
        if ($stmt->execute()) {
            header("Location: ../labour-code-details.php");
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
