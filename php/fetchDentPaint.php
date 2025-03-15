<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli && isset($_GET['query'])) {
    $query = $_GET['query'] . "%";

    // Use prepared statement to fetch matching dent/paint details
    $stmt = $mysqli->prepare("SELECT `dentID`, `dentPaintType`, `dentPaintCharge` FROM `dentPaintDetails` WHERE `dentPaintType` LIKE ? AND `status` = 'Active' LIMIT 10");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($dentID, $dentType, $dentCharge);

    $dentPaints = [];
    while ($stmt->fetch()) {
        $dentPaints[] = [
            'dentID' => $dentID,
            'dentType' => $dentType,
            'dentCharge' => $dentCharge
        ];
    }

    $stmt->close();
    db_close($mysqli);

    echo json_encode($dentPaints);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
