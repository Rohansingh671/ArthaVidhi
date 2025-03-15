<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli && isset($_GET['query'])) {
    $query = $_GET['query'] . "%"; // Fetching based on the first letters typed

    // Use prepared statement to fetch matching spare parts
    $stmt = $mysqli->prepare("SELECT `spareID`, `spareType`, `spareCharge` FROM `sparePartsDetails` WHERE `spareType` LIKE ? AND `status` = 'Active' LIMIT 10");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($spareID, $spareType, $spareCharge);

    $spareParts = [];
    while ($stmt->fetch()) {
        $spareParts[] = [
            'spareID' => $spareID,
            'spareType' => $spareType,
            'spareCharge' => $spareCharge
        ];
    }

    $stmt->close();
    db_close($mysqli);

    echo json_encode($spareParts); // Return JSON response
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
