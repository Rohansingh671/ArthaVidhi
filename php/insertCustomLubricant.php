<?php
require_once 'databaseConnection.php';

$mysqli = db_connect(); // Get the database connection

if (!$mysqli) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobID = $_POST["jobNumber"]; // Fetch job number from the form

    // Common function to insert data into customLubricant table
    function insertData($mysqli, $jobID, $category, $types, $prices, $discounts, $netAmounts) {
        $stmt = $mysqli->prepare("INSERT INTO customs (jobNumber, category, type_code, price, discount, net_amount) VALUES (?, ?, ?, ?, ?, ?)");
        
        if ($stmt) {
            foreach ($types as $index => $type) {
                if (!empty(trim($type))) {
                    $price = isset($prices[$index]) ? floatval($prices[$index]) : 0;
                    $discount = isset($discounts[$index]) ? floatval($discounts[$index]) : 0;
                    $netAmount = isset($netAmounts[$index]) ? floatval($netAmounts[$index]) : 0;

                    $stmt->bind_param("ssssdd", $jobID, $category, $type, $price, $discount, $netAmount);
                    $stmt->execute();
                }
            }
            $stmt->close();
        }
    }

    // Insert Custom Lubricant Data
    insertData($mysqli, $submission_id, 'Lubricant', $_POST['customLubType'] ?? [], $_POST['customLubPrice'] ?? [], $_POST['customLubDis'] ?? [], $_POST['customLubNet'] ?? []);

    // Insert Custom Labour Data
    insertData($mysqli, $submission_id, 'Labour', $_POST['customLabourCode'] ?? [], $_POST['customLabourPrice'] ?? [], $_POST['customLabourDis'] ?? [], $_POST['customLabourNet'] ?? []);

    // Insert Custom Dent/Paint Data
    insertData($mysqli, $submission_id, 'Dent/Paint', $_POST['customDentType'] ?? [], $_POST['customDentPrice'] ?? [], $_POST['customDentDis'] ?? [], $_POST['customDentNet'] ?? []);

    // Insert Custom Spare Parts Data
    insertData($mysqli, $submission_id, 'Spare Parts', $_POST['customSpareType'] ?? [], $_POST['customSparePrice'] ?? [], $_POST['customSpareDis'] ?? [], $_POST['customSpareNet'] ?? []);

    echo "All data inserted successfully!";
}

$mysqli->close();
?>
