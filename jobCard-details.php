<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php include './includes/navbar.php'; ?>
        <!-- /Header -->

        <?php $page = 'product-list';
        include './includes/sidebar.php'; ?>

        <!-- /product list -->
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>JobCard Details</h4>
                        <h6>Full details of a JobCard</h6>
                    </div>
                </div>
                <!-- /add -->
                <div class="row">
                    <div class="col-lg-8 col-sm-12" id="jobDetails">
                        <div class="card">
                            <div class="card-body">
                                <div class="bar-code-view">
                                    <img src="images/barcode1.png" alt="barcode">
                                    <a class="printimg" id="downloadPDF" href="javascript:window.print()">
                                        <img src="images/printer.svg" alt="print">
                                    </a>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Secure query using prepared statement
                                        $stmt = $mysqli->prepare("SELECT * FROM jobCard WHERE jobNumber = ?");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li class="job-item">';
                                                echo '<h4>Job Number</h4><h6>' . htmlspecialchars($row['jobNumber']) . '</h6>';
                                                echo '<h4>Job Date</h4><h6>' . htmlspecialchars($row['jobDate']) . '</h6>';
                                                echo '<h4>Registration Number</h4><h6>' . htmlspecialchars($row['registerNumber']) . '</h6>';
                                                echo '<h4>Year</h4><h6>' . htmlspecialchars($row['year']) . '</h6>';
                                                echo '<h4>Date/ Time In</h4><h6>' . htmlspecialchars($row['dateTimeIn']) . '</h6>';
                                                echo '<h4>Date/ Time Out</h4><h6>' . htmlspecialchars($row['dateTimeOut']) . '</h6>';
                                                echo '<h4>Mileage</h4><h6>' . htmlspecialchars($row['millage']) . '</h6>';
                                                echo '<h4>Vehicle Brand</h4><h6>' . htmlspecialchars($row['vehicleBrand']) . '</h6>';
                                                echo '<h4>Vehicle Colour</h4><h6>' . htmlspecialchars($row['vehicleColour']) . '</h6>';
                                                echo '<h4>Engine Number</h4><h6>' . htmlspecialchars($row['engineNumber']) . '</h6>';
                                                echo '<h4>VIN Number</h4><h6>' . htmlspecialchars($row['vinNumber']) . '</h6>';
                                                echo '<h4>Purpose of Visit</h4><h6>' . htmlspecialchars($row['purpose']) . '</h6>';
                                                echo '<h4>Fuel/ Battery Type</h4><h6>' . htmlspecialchars($row['fuelBatteryType']) . '</h6>';
                                                echo '<h4>Fuel Battery Level</h4><h6>' . htmlspecialchars($row['powerValue']) . '</h6>';
                                                echo '<h4>Customer Name</h4><h6>' . htmlspecialchars($row['customerName']) . '</h6>';
                                                echo '<h4>Customer Number</h4><h6>' . htmlspecialchars($row['contactNumber']) . '</h6>';
                                                echo '<h4>Address</h4><h6>' . htmlspecialchars($row['customerAddress']) . '</h6>';
                                                echo '<h4>Reported Defects/ Demanded Repairs</h4><h6>' . htmlspecialchars($row['reportedDefects']) . '</h6>';
                                                echo '<h4>Completed Action</h4><h6>' . htmlspecialchars($row['completedAction']) . '</h6>';
                                                echo '<h4>Contact Person</h4><h6>' . htmlspecialchars($row['contactPerson']) . '</h6>';
                                                echo '<h4>Contact Number</h4><h6>' . htmlspecialchars($row['personContactNumber']) . '</h6>';
                                                echo '<h4>Technician Name</h4><h6>' . htmlspecialchars($row['technicianName']) . '</h6>';
                                                echo '<h4>Supervisor</h4><h6>' . htmlspecialchars($row['supervisor']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No job records found.</p></li>";
                                        }

                                        // Close connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Lubricant Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT lubType, lubQuan, lubPrice, lubDis, lubNet FROM lubricants WHERE jobNumber = ?");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Lubricant Type</h4><h6>' . htmlspecialchars($row['lubType']) . '</h6>';
                                                echo '<h4>Lubricant Quantity</h4><h6>' . htmlspecialchars($row['lubQuan']) . '</h6>';
                                                echo '<h4>Lubricant Price</h4><h6>' . htmlspecialchars($row['lubPrice']) . '</h6>';
                                                echo '<h4>Lubricant Discount (in %)</h4><h6>' . htmlspecialchars($row['lubDis']) . '</h6>';
                                                echo '<h4>Lubricant Net</h4><h6>' . htmlspecialchars($row['lubNet']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>



                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Labour Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT labourCode, labourQuan, labourPrice, labourDis, labourNet FROM lubricants WHERE jobNumber = ?");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Labour Code</h4><h6>' . htmlspecialchars($row['labourCode']) . '</h6>';
                                                echo '<h4>Labour Quantity</h4><h6>' . htmlspecialchars($row['labourQuan']) . '</h6>';
                                                echo '<h4>Labour Price</h4><h6>' . htmlspecialchars($row['labourPrice']) . '</h6>';
                                                echo '<h4>Labour Discount (in %)</h4><h6>' . htmlspecialchars($row['labourDis']) . '</h6>';
                                                echo '<h4>Labour Net</h4><h6>' . htmlspecialchars($row['labourNet']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Dent/ Paint Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT dentType, dentQuan, dentPrice, dentDis, dentNet FROM lubricants WHERE jobNumber = ?");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Dent/ Paint Type</h4><h6>' . htmlspecialchars($row['dentType']) . '</h6>';
                                                echo '<h4>Dent/ Paint Quantity</h4><h6>' . htmlspecialchars($row['dentQuan']) . '</h6>';
                                                echo '<h4>Dent/ Paint Price</h4><h6>' . htmlspecialchars($row['dentPrice']) . '</h6>';
                                                echo '<h4>Dent/ Paint Discount (in %)</h4><h6>' . htmlspecialchars($row['dentDis']) . '</h6>';
                                                echo '<h4>Dent/ Paint Net</h4><h6>' . htmlspecialchars($row['dentNet']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Spare Parts Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT spareType, spareQuan, sparePrice, spareDis, spareNet FROM lubricants WHERE jobNumber = ?");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Spare Type</h4><h6>' . htmlspecialchars($row['spareType']) . '</h6>';
                                                echo '<h4>Spare Quantity</h4><h6>' . htmlspecialchars($row['spareQuan']) . '</h6>';
                                                echo '<h4>Spare Price</h4><h6>' . htmlspecialchars($row['sparePrice']) . '</h6>';
                                                echo '<h4>Spare Discount (in %)</h4><h6>' . htmlspecialchars($row['spareDis']) . '</h6>';
                                                echo '<h4>Spare Net</h4><h6>' . htmlspecialchars($row['spareNet']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Custom Lubricant Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT type_code, price, discount, net_amount FROM customs WHERE jobNumber = ? AND category = 'Lubricant'");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Custom Lubricant Type</h4><h6>' . htmlspecialchars($row['type_code']) . '</h6>';
                                                echo '<h4>Custom Lubricant Amount</h4><h6>' . htmlspecialchars($row['price']) . '</h6>';
                                                echo '<h4>Discount (in %)</h4><h6>' . htmlspecialchars($row['discount']) . '</h6>';
                                                echo '<h4>Net Amount</h4><h6>' . htmlspecialchars($row['net_amount']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Custom Labour Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT type_code, price, discount, net_amount FROM customs WHERE jobNumber = ? AND category = 'Labour'");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Custom Labour Code</h4><h6>' . htmlspecialchars($row['type_code']) . '</h6>';
                                                echo '<h4>Custom Labour Amount</h4><h6>' . htmlspecialchars($row['price']) . '</h6>';
                                                echo '<h4>Discount (in %)</h4><h6>' . htmlspecialchars($row['discount']) . '</h6>';
                                                echo '<h4>Net Amount</h4><h6>' . htmlspecialchars($row['net_amount']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Custom Dent/ Paint Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT type_code, price, discount, net_amount FROM customs WHERE jobNumber = ? AND category = 'Dent/Paint'");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Custom Dent/Paint Type</h4><h6>' . htmlspecialchars($row['type_code']) . '</h6>';
                                                echo '<h4>Custom Dent/Paint Amount</h4><h6>' . htmlspecialchars($row['price']) . '</h6>';
                                                echo '<h4>Discount (in %)</h4><h6>' . htmlspecialchars($row['discount']) . '</h6>';
                                                echo '<h4>Net Amount</h4><h6>' . htmlspecialchars($row['net_amount']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Custom Spare Parts Details</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT type_code, price, discount, net_amount FROM customs WHERE jobNumber = ? AND category = 'Spare Parts'");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Custom Spare Type</h4><h6>' . htmlspecialchars($row['type_code']) . '</h6>';
                                                echo '<h4>Custom Spare Amount</h4><h6>' . htmlspecialchars($row['price']) . '</h6>';
                                                echo '<h4>Discount (in %)</h4><h6>' . htmlspecialchars($row['discount']) . '</h6>';
                                                echo '<h4>Net Amount</h4><h6>' . htmlspecialchars($row['net_amount']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4>Billing Appartment</h4>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <?php
                                        require_once 'php/databaseConnection.php';

                                        // Database connection
                                        $mysqli = db_connect();
                                        if (!$mysqli) {
                                            die("Database connection failed: " . $mysqli->connect_error);
                                        }

                                        // Get job number dynamically (fallback to a default value if not provided)
                                        $jobNumber = isset($_GET['jobNumber']) ? $mysqli->real_escape_string($_GET['jobNumber']) : 'JOBN7';

                                        // Prepare a secure query using a prepared statement
                                        $stmt = $mysqli->prepare("SELECT TotalBillAmount, vatAmount, discountAmount, netTotal, billNumber, billRemarks, totalPaid, remainingAmount, paymentStatus FROM jobCard WHERE jobNumber = ?");
                                        $stmt->bind_param("s", $jobNumber);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        // Check if records exist
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li>';
                                                echo '<h4>Bill Number</h4><h6>' . htmlspecialchars($row['billNumber']) . '</h6>';
                                                echo '<h4>Total Bill Amount</h4><h6>' . htmlspecialchars($row['TotalBillAmount']) . '</h6>';
                                                echo '<h4>VAT Amount</h4><h6>' . htmlspecialchars($row['vatAmount']) . '</h6>';
                                                echo '<h4>Discount Amount</h4><h6>' . htmlspecialchars($row['discountAmount']) . '</h6>';
                                                echo '<h4>Net Total</h4><h6>' . htmlspecialchars($row['netTotal']) . '</h6>';
                                                echo '<h4>Bill Remarks</h4><h6>' . htmlspecialchars($row['billRemarks']) . '</h6>';
                                                echo '<h4>Total Paid</h4><h6>' . htmlspecialchars($row['totalPaid']) . '</h6>';
                                                echo '<h4>Remaining Amount</h4><h6>' . htmlspecialchars($row['remainingAmount']) . '</h6>';
                                                echo '<h4>Payment Status</h4><h6>' . htmlspecialchars($row['paymentStatus']) . '</h6>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo "<li><p>No records found.</p></li>";
                                        }

                                        // Close the database connection
                                        $stmt->close();
                                        $mysqli->close();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById('downloadPDF').addEventListener('click', function() {
                            const {
                                jsPDF
                            } = window.jspdf;
                            const doc = new jsPDF();

                            // Capture the content from the div with job details
                            doc.html(document.getElementById('jobDetails'), {
                                callback: function(doc) {
                                    doc.save('jobDetails.pdf'); // Save the generated PDF
                                },
                                margin: 10,
                                x: 10,
                                y: 10
                            });
                        });
                    </script>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <?php

                                require_once 'php/databaseConnection.php';

                                // Get the jobNumber dynamically from the URL (use $_GET for URL parameters)
                                if (isset($_GET['jobNumber'])) {
                                    $job_number = $_GET['jobNumber']; // Retrieve the jobNumber from the URL
                                } else {
                                    echo "<p>Job number not provided!</p>";
                                    exit; // Exit if no jobNumber is provided
                                }

                                // Database connection
                                $mysqli = db_connect();
                                if (!$mysqli) {
                                    echo json_encode(["status" => "error", "message" => "Database connection failed: " . $mysqli->connect_error]);
                                    exit;
                                }

                                // SQL query to fetch imageOfCar and its filename from the jobCard table for the given jobNumber
                                $query = "SELECT imageOfCar FROM jobCard WHERE jobNumber = ?";
                                $stmt = $mysqli->prepare($query);
                                if ($stmt === false) {
                                    echo json_encode(["status" => "error", "message" => "SQL preparation error: " . $mysqli->error]);
                                    exit;
                                }

                                // Bind parameters
                                $stmt->bind_param("s", $job_number);

                                // Execute the statement
                                $stmt->execute();

                                // Bind the result variable
                                $stmt->bind_result($imageOfCar);

                                // Fetch the result
                                if ($stmt->fetch()) {
                                    // Check if imageOfCar exists and display the HTML
                                    if ($imageOfCar) {
                                        // Get the image file name and size
                                        $image_file = basename($imageOfCar);  // Extract the file name from the full path
                                        $image_size = filesize($imageOfCar);  // Get the file size

                                        // Format size in KB
                                        $image_size_kb = round($image_size / 1024, 2) . ' KB';

                                        // Display the HTML structure
                                        echo '
            <div class="slider-product">
                <img src="' . $imageOfCar . '" alt="Car Image">
                <h4>' . $image_file . '</h4>
                <h6>' . $image_size_kb . '</h6>
            </div>';
                                    } else {
                                        echo "<p>No image found for job number " . htmlspecialchars($job_number) . "</p>";
                                    }
                                } else {
                                    echo "<p>No record found for job number " . htmlspecialchars($job_number) . "</p>";
                                }

                                $stmt->close();
                                $mysqli->close();

                                ?>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- /add -->
            </div>
        </div>
        <!-- /product list -->
    </div>
    <!-- /Main Wrapper -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js" type="5587a3acf923afacc789f535-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="js/feather.min.js" type="5587a3acf923afacc789f535-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="js/jquery.slimscroll.min.js" type="5587a3acf923afacc789f535-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="js/bootstrap.bundle.min.js" type="5587a3acf923afacc789f535-text/javascript"></script>

    <!-- Owl JS -->
    <script src="js/owl.carousel.min.js" type="5587a3acf923afacc789f535-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="js/select2.min.js" type="5587a3acf923afacc789f535-text/javascript"></script>

    <!-- Color Picker JS -->
    <script src="js/pickr.es5.min.js" type="5587a3acf923afacc789f535-text/javascript"></script>

    <!-- Custom JS -->
    <script src="js/theme-colorpicker.js" type="5587a3acf923afacc789f535-text/javascript"></script>
    <script src="js/script.js" type="5587a3acf923afacc789f535-text/javascript"></script>


    <script src="js/rocket-loader.min.js" data-cf-settings="5587a3acf923afacc789f535-|49" defer=""></script>


</body>

</html>