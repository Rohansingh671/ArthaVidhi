<!DOCTYPE html>
<html lang="en">
<?php include './includes/head.php'; ?>

<body>

    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php include './includes/navbar.php'; ?>

        <?php $page = 'add-product';
        include './includes/sidebar.php'; ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4>Edit Job Card</h4>
                            <h6>Update your billing appartment!</h6>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <div class="page-btn">
                                <a href="product-list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to JobCards</a>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
                        </li>
                    </ul>

                </div>
                <?php
                        require_once 'php/databaseConnection.php';

                        // Check if jobNumber is provided
                        if (isset($_GET['jobNumber'])) {
                            $jobNumber = $_GET['jobNumber'];

                            // Database connection
                            $mysqli = db_connect();
                            if (!$mysqli) {
                                die("Database connection failed: " . $mysqli->connect_error);
                            }

                            // Fetch job card details
                            $stmt = $mysqli->prepare("SELECT * FROM jobCard WHERE jobNumber = ?");
                            $stmt->bind_param("s", $jobNumber);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Check if record exists
                            if ($result->num_rows > 0) {
                                $jobCard = $result->fetch_assoc();
                            } else {
                                die("No record found for job number: " . htmlspecialchars($jobNumber));
                            }
                            $stmt->close();
                            $mysqli->close();
                        } else {
                            die("Job number is required.");
                        }
                        ?>
                <form action="php/updateJobCard.php?billNumber=<?php echo $jobCard['billNumber'] ?>" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body add-product pb-0">
                            <!--/here -->
                            <div class="accordion-card-one accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                                            <div class="addproduct-icon">
                                                <h5><i data-feather="credit-card" class="add-info"></i>
                                                    <span>Billing Apartment</span>
                                                </h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Bill Amount</label>
                                                        <input type="number" name="TotalBillAmount" class="form-control" value="<?php echo $jobCard['TotalBillAmount']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">VAT Amount (13%)</label>
                                                        <input type="number" name="vatAmount" class="form-control" value="<?php echo $jobCard['vatAmount']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Discount (in Rs)</label>
                                                        <input type="number" name="discountAmount" class="form-control" value="<?php echo $jobCard['discountAmount']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Net Total</label>
                                                        <input type="number" name="netTotal" class="form-control" value="<?php echo $jobCard['netTotal']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea name="billRemarks" class="form-control"><?php echo $jobCard['billRemarks']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Bill No.</label>
                                                        <input type="text" class="form-control" name="billNumber" value="<?php echo $jobCard['billNumber']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Total Paid</label>
                                                        <input type="number" name="paymentBefore" class="form-control" value="<?php echo $jobCard['totalPaid']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Remaining Amount</label>
                                                        <input type="number" name="remainingAmount" class="form-control" value="<?php echo $jobCard['remainingAmount']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Now Paying</label>
                                                        <input type="number" name="nowPaying" class="form-control">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="totalPaid" class="form-control">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Status</label>
                                                        <select class="select" name="paymentStatus">
                                                            <option>Select</option>
                                                            <option value="Pending" <?php if ($jobCard['paymentStatus'] == 'Pending') {
                                                                                        echo 'selected';
                                                                                    } ?>>Pending</option>
                                                            <option value="Paid" <?php if ($jobCard['paymentStatus'] == 'Paid') {
                                                                                            echo 'selected';
                                                                                        } ?>>Paid</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        let nowPaying = document.querySelector("input[name='nowPaying']");
                                                        let remainingAmount = document.querySelector("input[name='remainingAmount']");
                                                        let paymentBefore = document.querySelector("input[name='paymentBefore']");
                                                        let totalPaid = document.querySelector("input[name='totalPaid']");

                                                        let initialRemainingAmount = parseFloat(remainingAmount.value) || 0; // Store the original remaining amount

                                                        nowPaying.removeAttribute("readonly"); // Allow input

                                                        nowPaying.addEventListener("input", function() {
                                                            let nowPayingValue = parseFloat(nowPaying.value) || 0;
                                                            let paymentBeforeValue = parseFloat(paymentBefore.value) || 0;

                                                            if (nowPayingValue > initialRemainingAmount) {
                                                                nowPaying.value = initialRemainingAmount; // Restrict to max remaining amount
                                                                nowPayingValue = initialRemainingAmount;
                                                            }

                                                            remainingAmount.value = (initialRemainingAmount - nowPayingValue).toFixed(2); // Correct remaining amount
                                                            totalPaid.value = (paymentBeforeValue + nowPayingValue).toFixed(2); // Update total paid
                                                        });
                                                    });
                                                </script>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-addproduct mb-4">
                                    <button type="button" class="btn btn-cancel me-2">Cancel</button>
                                    <button type="submit" class="btn btn-submit">Save Product</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    <div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="js/feather.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="js/jquery.slimscroll.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="js/jquery.dataTables.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>
    <script src="js/dataTables.bootstrap5.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="js/bootstrap.bundle.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="js/select2.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="js/moment.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>
    <script src="js/bootstrap-datetimepicker.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="js/bootstrap-tagsinput.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Sweetalert 2 -->
    <script src="js/sweetalert2.all.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>
    <script src="js/sweetalerts.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

    <!-- Custom JS -->

    <script src="js/script.js" type="37d26908286f2aa006113b6d-text/javascript"></script>


    <script src="js/rocket-loader.min.js" data-cf-settings="37d26908286f2aa006113b6d-|49" defer=""></script>

    <style>
        .fuel-battery-indicator {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .fuel-battery-indicator input {
            width: 100%;
        }
    </style>

    <!-- Fuel Battery Indicator Ajax -->
    <?php include './includes/fuelBatteryAjax.php'; ?>
    <!-- /Fuel Battery Indicator Ajax -->

    <!-- Spare Parts -->
    <?php include './includes/spareAjax.php'; ?>
    <!-- /Spare Parts -->

    <!-- Dent/Paint Details -->
    <?php include './includes/dentPaintAjax.php'; ?>
    <!-- /Dent/Paint Details -->

    <!-- labour Details -->
    <?php include './includes/labourDetailsAjax.php'; ?>
    <!-- /labour Details -->

    <!-- Lubricant Details -->
    <?php include './includes/lubricantDetailsAjax.php'; ?>
    <!-- /Lubricant Details -->
</body>


</body>

</html>