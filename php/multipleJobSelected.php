<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

// Debugging: Check if POST data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Check received data
    var_dump($_POST);

    if (isset($_POST['job']) && is_array($_POST['job'])) {
        $jobs = $_POST['job'];

        // Sanitize job descriptions if necessary (this step can be skipped if data is safe)
        $jobs = array_map(function($job) {
            return htmlspecialchars($job, ENT_QUOTES, 'UTF-8'); // Sanitize each job
        }, $jobs);

        // Convert array to a comma-separated string
        $jobAll = implode(", ", $jobs);
    } else {
        echo "No job selected.";
        exit;
    }

    // Prepare and insert into the database
    $stmt = $mysqli->prepare("INSERT INTO multipleJobSelected (selectedJobs) VALUES (?)");

    if ($stmt === false) {
        echo "Error preparing statement: " . $mysqli->error;
        exit;
    }

    $stmt->bind_param("s", $jobAll); // Bind the jobAll string to the prepared statement
    if ($stmt->execute()) {
        echo "Jobs saved successfully!";
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
