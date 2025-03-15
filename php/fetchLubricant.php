<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

if ($mysqli && isset($_GET['query'])) {
    $query = $_GET['query'] . "%";

    // Use prepared statement to fetch matching lubricant details
    $stmt = $mysqli->prepare("SELECT `lubricantID`, `lubricantType`, `lubricantCharge` FROM `lubricantDetails` WHERE `lubricantType` LIKE ? AND `status` = 'Active' LIMIT 10");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($lubricantID, $lubricantType, $lubricantCharge);

    $lubricants = [];
    while ($stmt->fetch()) {
        $lubricants[] = [
            'lubricantID' => $lubricantID,
            'lubricantType' => $lubricantType,
            'lubricantCharge' => $lubricantCharge
        ];
    }

    $stmt->close();
    db_close($mysqli);

    echo json_encode($lubricants);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
