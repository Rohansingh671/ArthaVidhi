<?php
require 'databaseConnection.php'; // Ensure the database connection is established

// Call db_connect() to get the database connection
$conn = db_connect(); // Now we have the connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_GET['billNumber'])) {
        echo "billNumber is missing.";
        exit;
    } else {
        $billNumber = $_GET['billNumber']; // Get billNumber from the URL parameter
    }

    // Retrieve values from POST request
    $TotalBillAmount = $_POST['TotalBillAmount'];
    $vatAmount = $_POST['vatAmount'];
    $discountAmount = $_POST['discountAmount'];
    $netTotal = $_POST['netTotal'];
    $billRemarks = $_POST['billRemarks'];
    $paymentBefore = floatval($_POST['paymentBefore']);
    $nowPaying = floatval($_POST['nowPaying']);
    $remainingAmount = floatval($_POST['remainingAmount']);
    $paymentStatus = $_POST['paymentStatus'];

    // Calculate total paid amount
    $totalPaid = $paymentBefore + $nowPaying;
    $newRemainingAmount = $remainingAmount - $nowPaying;

    // Prepare the update statement
    $sql = "UPDATE jobCard 
            SET TotalBillAmount = ?, 
                vatAmount = ?, 
                discountAmount = ?, 
                netTotal = ?, 
                billRemarks = ?, 
                totalPaid = ?, 
                remainingAmount = ?, 
                paymentStatus = ? 
            WHERE billNumber = ?";

    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ddddssdsi", $TotalBillAmount, $vatAmount, $discountAmount, $netTotal, $billRemarks, $totalPaid, $newRemainingAmount, $paymentStatus, $billNumber);

        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    mysqli_close($conn); // Close the database connection
}
?>
