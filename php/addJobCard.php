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
        !empty($_POST['personContactNumber']) 
    ) {


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

        // Optional fields
        $customer_address = !empty($_POST['customerAddress']) ? $_POST['customerAddress'] : null;
        $reported_defects = !empty($_POST['reportedDefects']) ? $_POST['reportedDefects'] : null;
        $completed_action = !empty($_POST['completedAction']) ? $_POST['completedAction'] : null;
        $technician_name = !empty($_POST['technicianName']) ? $_POST['technicianName'] : null;
        $supervisor = !empty($_POST['supervisor']) ? $_POST['supervisor'] : null;

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo json_encode(["status" => "error", "message" => "Database connection failed: " . $mysqli->connect_error]);
            exit;
        }

        // Prepared SQL statement for inserting job descriptions
        $stmt = $mysqli->prepare("INSERT INTO `jobCard`
        (`jobNumber`, `jobDate`, `registerNumber`, `year`, `millage`, `vehicleBrand`, `vehicleModel`, `vehicleColour`, `engineNumber`, `vinNumber`, 
        `customerName`, `customerAddress`, `contactNumber`, `contactPerson`, `personContactNumber`, `reportedDefects`, `completedAction`, `technicianName`, `supervisor`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            echo json_encode(["status" => "error", "message" => "SQL preparation error: " . $mysqli->error]);
            exit;
        }

                if ($stmt->bind_param(
                    "sssssssssssssssssss",
                    $job_number,
                    $job_date,
                    $register_number,
                    $year,
                    $millage,
                    $vehicle_brand,
                    $vehicle_model,
                    $vehicle_colour,
                    $engine_number,
                    $vin_number,
                    $customer_name,
                    $customer_address,
                    $contact_number,
                    $contact_person,
                    $person_contact_number,
                    $reported_defects,
                    $completed_action,
                    $technician_name,
                    $supervisor
                )) {
                    if (!$stmt->execute()) {
                        echo json_encode(["status" => "error", "message" => "SQL execution failed: " . $stmt->error]);
                        exit;
                    }
                } else {
                    echo json_encode(["status" => "error", "message" => "Error binding parameters: " . $stmt->error]);
                    exit;
                }
            }
        }

        // Closing the statement and connection
        $stmt->close();
        $mysqli->close();

