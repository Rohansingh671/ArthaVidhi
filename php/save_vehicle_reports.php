<?php
// Read the raw POST data from the request
$data = json_decode(file_get_contents("php://input"), true);

// Get the image data (base64 encoded string)
$imageData = $data['image'];

// Remove the base64 encoding prefix (i.e. "data:image/png;base64,")
$imageData = str_replace('data:image/png;base64,', '', $imageData);
$imageData = str_replace(' ', '+', $imageData); // Fix any spaces

// Decode the base64 string to get the raw image data
$image = base64_decode($imageData);

// Define a path where the image will be saved (e.g., inside an 'uploads' folder)
$imagePath = "uploads/vehicle_report_" . time() . ".png";

// Save the decoded image to the file
if (file_put_contents($imagePath, $image)) {
    
    require_once 'php/databaseConnection.php';

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Save the image path into the database
    $stmt = $conn->prepare("INSERT INTO vehicle_reports (image_path) VALUES (?)");
    $stmt->bind_param("s", $imagePath); // Bind the image path to the SQL query

    if ($stmt->execute()) {
        // Return success response
        echo json_encode(["message" => "Image saved successfully!"]);
    } else {
        // Return error response
        echo json_encode(["message" => "Failed to save image to database."]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["message" => "Failed to save the image file."]);
}
?>
