<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Required fields validation
    if (
        !empty($_POST['jobNumber']) && !empty($_POST['jobDate']) && !empty($_POST['registerNumber']) &&
        !empty($_POST['year']) && !empty($_POST['millage']) && !empty($_POST['vehicleBrand']) &&
        !empty($_POST['vehicleModel']) && !empty($_POST['vehicleColour']) && !empty($_POST['engineNumber']) &&
        !empty($_POST['vinNumber']) &&
        !empty($_POST['customerName']) && !empty($_POST['contactNumber']) && !empty($_POST['contactPerson']) &&
        !empty($_POST['personContactNumber']) && isset($_POST['fuelBattery']) && isset($_POST['powerValue'])  && isset($_POST['dateTimeIn']) && isset($_POST['dateTimeOut'])
    ) {
        $purposeAll = '';
        if (isset($_POST['purpose']) && is_array($_POST['purpose'])) {
            $purposes = $_POST['purpose'];
            $purposeAll = implode(", ", $purposes);
        } else {
            echo "No group selected.";
            exit;
        }



        // Assigning values to variables
        $job_number = $_POST['jobNumber'];
        $job_date = $_POST['jobDate'];
        $register_number = $_POST['registerNumber'];
        $year = $_POST['year'];
        $millage = $_POST['millage'];
        $customer_name = $_POST['customerName'];
        $contact_person = $_POST['contactPerson'];
        $vehicle_brand = $_POST['vehicleBrand'];
        $vehicle_model = $_POST['vehicleModel'];
        $vehicle_colour = $_POST['vehicleColour'];
        $engine_number = $_POST['engineNumber'];
        $vin_number = $_POST['vinNumber'];
        $contact_number = $_POST['contactNumber'];
        $person_contact_number = $_POST['personContactNumber'];
        $fuelBatteryType = $_POST['fuelBattery']; // This will be either 'fuel' or 'battery'
        $powerValue = $_POST['powerValue']; // This will be the value from the hidden input
        $purpose = $_POST['purpose'];
        $dateTimeIn = $_POST['dateTimeIn'];
        $dateTimeOut = $_POST['dateTimeOut'];

        // Validate the inputs (e.g., ensure 'fuelBattery' is either 'fuel' or 'battery')
        if ($fuelBatteryType !== 'fuel' && $fuelBatteryType !== 'battery') {
            echo "Invalid fuel/battery type.";
            exit;
        }


        // Optional fields
        $customer_address = !empty($_POST['customerAddress']) ? $_POST['customerAddress'] : null;
        $reported_defects = !empty($_POST['reportedDefects']) ? $_POST['reportedDefects'] : null;
        $completed_action = !empty($_POST['completedAction']) ? $_POST['completedAction'] : null;
        $technician_name = !empty($_POST['technicianName']) ? $_POST['technicianName'] : 'None';
        $supervisor = !empty($_POST['supervisor']) ? $_POST['supervisor'] : 'None';

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo json_encode(["status" => "error", "message" => "Database connection failed: " . $mysqli->connect_error]);
            exit;
        }

        // Prepared SQL statement for inserting job descriptions
        $stmt = $mysqli->prepare("INSERT INTO `jobCard`
        (`jobNumber`, `jobDate`, `registerNumber`, `year`, `millage`, `vehicleBrand`, `dateTimeIn`, `dateTimeOut`, `vehicleModel`, `vehicleColour`, `engineNumber`, `vinNumber`, `purpose`, `fuelBatteryType`, `powerValue`,
        `customerName`, `customerAddress`, `contactNumber`, `contactPerson`, `personContactNumber`, `reportedDefects`, `completedAction`, `technicianName`, `supervisor`, `imageOfCar`,
        ) 
    VALUES 
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");




        if ($stmt === false) {
            echo json_encode(["status" => "error", "message" => "SQL preparation error: " . $mysqli->error]);
            exit;
        }

        // Handle image uploads with validation for JPG and PNG formats
        function uploadImage($file, $folder, $maxFileSize)
        {
            // Check file size
            if ($file['size'] > $maxFileSize) {
                echo "File is too large. Maximum file size is " . ($maxFileSize / (1024 * 1024)) . " MB.";
                return null;
            }

            // Validate MIME type using finfo_file
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $fileType = finfo_file($finfo, $file["tmp_name"]);
            finfo_close($finfo);

            // Get file extension
            $fileExtension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

            // Allowed formats: JPG, PNG
            $allowedTypes = ['image/jpeg' => 'jpg', 'image/png' => 'png'];

            if (!isset($allowedTypes[$fileType]) || $allowedTypes[$fileType] !== $fileExtension) {
                echo "Only JPG and PNG images are allowed.";
                return null;
            }

            // Generate unique file name
            $fileName = uniqid() . '_' . basename($file["name"]);
            $target_file = $folder . '/' . $fileName;

            // Move uploaded file
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                return substr($target_file, 3); // Remove first 3 chars (../) for DB storage
            }

            return null;
        }

        // Image folder and size settings
        $image_folder = '../carDocuments/carImages';
        if (!file_exists($image_folder)) {
            mkdir($image_folder, 0755, true);
        }
        $maxFileSize = 4 * 1024 * 1024; // 4MB limit

        // Validate and upload images
        $imageOfCar = !empty($_FILES["imageOfCar"]["name"]) ? uploadImage($_FILES["imageOfCar"], $image_folder, $maxFileSize) : null;



        if ($stmt->bind_param(
            "sssissssssssssissssssssss",
            $job_number,
            $job_date,
            $register_number,
            $year,
            $millage,
            $vehicle_brand,
            $dateTimeIn,
            $dateTimeOut,
            $vehicle_model,
            $vehicle_colour,
            $engine_number,
            $vin_number,
            $purposeAll,
            $fuelBatteryType,
            $powerValue,
            $customer_name,
            $customer_address,
            $contact_number,
            $contact_person,
            $person_contact_number,
            $reported_defects,
            $completed_action,
            $technician_name,
            $supervisor,
            $imageOfCar,
        )) {
            // Execute the statement
            if (!$stmt->execute()) {
                echo json_encode(["status" => "error", "message" => "SQL execution failed: " . $stmt->error]);
                exit;
            } else {
                // Successful execution, redirect to product-list.php
                header("Location: ../product-list.php");
                exit;
            }
        }
    }
}

// Closing the statement and connection
$stmt->close();
$mysqli->close();
