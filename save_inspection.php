<?php
require_once 'php/databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get JSON input
    $data = file_get_contents("php://input");
    error_log("Received Data: " . $data); // Debugging
    $decodedData = json_decode($data, true);

    if (empty($decodedData)) {
        echo "No data received!";
        exit;
    }

    // Database connection
    $mysqli = db_connect();
    if (!$mysqli) {
        echo "Database connection failed: " . $mysqli->connect_error;
        exit;
    }

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("INSERT INTO inspections (component, status, remarks) VALUES (?, ?, ?)");
    if ($stmt === false) {
        echo "Error preparing statement: " . $mysqli->error;
        exit;
    }

    // Insert records into the database
    foreach ($decodedData as $row) {
        if (!empty($row['component']) && !empty($row['status'])) {
            $component = htmlspecialchars(trim($row['component']));
            $status = htmlspecialchars(trim($row['status']));
            $remark = !empty($row['remark']) ? htmlspecialchars(trim($row['remark'])) : NULL;

            // Bind parameters and execute statement
            $stmt->bind_param("sss", $component, $status, $remark);
            if (!$stmt->execute()) {
                echo "Error inserting record: " . $stmt->error;
                exit;
            }
        }
    }

    // Close statement and database connection
    $stmt->close();
    $mysqli->close();

    echo "Data inserted successfully";
} else {
    echo "Invalid request method.";
}
