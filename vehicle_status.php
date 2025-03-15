<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['components']) && !empty($_POST['status'])) {

        // Assign variables after basic sanitization
        $components = $_POST['components'];  // Array of component names
        $statuses = $_POST['status'];  // Array of statuses (Okay or Not Okay)
        $remarks = isset($_POST['remarks']) ? $_POST['remarks'] : [];  // Array of remarks (nullable)

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO `vehicle_status` (`component_name`, `status`, `remarks`) VALUES (?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Loop through the components array and insert each one into the database
        foreach ($components as $index => $component_name) {
            $status = $statuses[$index];
            $remark = ($status === 'Not Okay') ? $remarks[$index] : NULL; // Only store remarks if status is "Not Okay"

            // Bind parameters and execute statement
            $stmt->bind_param("sss", $component_name, $status, $remark);
            if (!$stmt->execute()) {
                echo "Error inserting record: " . $stmt->error;
                exit;
            }
        }

        // Redirect to a success page or list page
        header("Location: vehicle_status_list.php");
        exit;

        // Close statement and database connection
        $stmt->close();
        $mysqli->close();
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
?>
