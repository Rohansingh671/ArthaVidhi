<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli) {
    // Initialize default values
    $currentPurpose = '';
    $purposes = array(); // Array to store all purposes

    if (isset($_GET['id'])) {
        // Fetch the current purpose details for the specific entry
        $id = $_GET['id'];
        $stmt = $mysqli->prepare("SELECT ID, pupID, purpose, status FROM `createPurpose` WHERE `ID` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($ID, $pupID, $purpose, $pupStatus);
        if ($stmt->fetch()) {
            $currentPurpose = $purpose;
        }
        $stmt->close();
    } else {
        // Fetch all purposes for dropdown options
        $stmt = $mysqli->prepare("SELECT `ID`, `pupID`, `purpose`, `status` FROM `createPurpose`");
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($ID, $pupID, $purpose, $pupStatus);

        // Populate the `$purposes` array
        while ($stmt->fetch()) {
            $purposes[] = array(
                'ID' => $ID,
                'pupID' => $pupID,
                'purpose' => $purpose,
                'status' => $pupStatus
            );
        }
        $stmt->close(); // Close the statement after populating the array
    }
} else {
    echo "Database connection failed: " . $mysqli->connect_error;
    exit;
}

db_close($mysqli);
