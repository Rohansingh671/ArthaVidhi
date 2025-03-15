<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli && isset($_GET['query'])) {
    $query = $_GET['query'] . "%";

    // Use prepared statement to fetch matching labour code details
    $stmt = $mysqli->prepare("SELECT `labourID`, `labourCode`, `labourCharge` FROM `labourCode` WHERE `labourCode` LIKE ? AND `status` = 'Active' LIMIT 10");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($labourID, $labourCode, $labourCharge);

    $labours = [];
    while ($stmt->fetch()) {
        $labours[] = [
            'labourID' => $labourID,
            'labourCode' => $labourCode,
            'labourCharge' => $labourCharge
        ];
    }

    $stmt->close();
    db_close($mysqli);

    echo json_encode($labours);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
