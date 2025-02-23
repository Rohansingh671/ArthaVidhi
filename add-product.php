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
							<h4>New Job Card</h4>
							<h6>Create new JobCard</h6>
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
				<!-- /add -->
				<form action="php/addJobCard.php" method="post" enctype="multipart/form-data">
					<?php
					require_once 'php/databaseConnection.php';

					$mysqli = db_connect();

					$result = $mysqli->query("SELECT jobNumber FROM jobCard ORDER BY ID DESC LIMIT 1");
					$row = $result->fetch_row();

					if ($row == null) {
						$total_job_number = 1; // Initialize $total_group_id here for the case where no rows are found
					} else {
						$job_number = substr($row[0], 4); // Adjust substring length to skip "FGID"
						$total_job_number = $job_number + 1; // Increment the numeric part of the group ID
					}
					?>
					<div class="card">
						<div class="card-body add-product pb-0">
							<div class="accordion-card-one accordion" id="accordionExample">
								<!-- here -->
								<div class="accordion-item">
									<div class="accordion-header" id="headingOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
											<div class="addproduct-icon">
												<h5><i data-feather="info" class="add-info"></i><span>Vehicle Information</span></h5>
												<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
											</div>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="row">
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="input-blocks add-product list">
														<label class="form-label">Job Number</label>
														<input type="text" class="form-control" id="jbid" name="jobNumber" value="JOBN<?php echo $total_job_number ?>" readonly>
														<button type="submit" class="btn btn-primaryadd">
															Generate Code
														</button>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Job Date</label>
														<input type="date" name="jobDate" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Registration Number</label>
														<input type="text" name="registerNumber" class="form-control" placeholder="Enter Vehicle Reg. No.">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Year</label>
														<select class="select" name="year">
															<option>Choose</option>
															<option>2081</option>
															<option>2082</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Millage</label>
														<input type="text" name="millage" class="form-control"" placeholder=" Enter Vehicle Millage in km/hr">
													</div>
												</div>
												<div class=" col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Vehicle Brand</label>
														<input type="text" name="vehicleBrand" class="form-control" placeholder="Enter Vehicle Brand">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Vehicle Model</label>
														<input type="text" name="vehicleModel" class="form-control" placeholder="Enter Vehicle Model">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Vehicle Colour</label>
														<input type="text" name="vehicleColour" class="form-control" placeholder="Enter Vehicle Colour">
													</div>
												</div>
											</div>
											<div class="row">

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Engine No.</label>
														<input type="text" name="engineNumber" class="form-control"" placeholder=" Enter Vehicle Engine No.">
													</div>
												</div>
												<div class=" col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">VIN No.</label>
														<input type="text" name="vinNumber" class="form-control" placeholder="Enter Vehicle VIN No.">
													</div>
												</div>
												<div class=" col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Purpose Visit</label>
														<?php require_once 'php/purposeDataFromDatabase.php'; ?>
														<select class="select" name="purpose[]">
															<option value="">Select Purpose Visit</option>
															<?php
															foreach ($purposes as $purpose) {
																echo "<option value='" . htmlspecialchars($purpose['purpose']) . "'>" . htmlspecialchars($purpose['purpose']) . "</option>";
															}
															?>
														</select>
													</div>
												</div>
												<!-- Fuel/Battery Selection -->
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Select Type</label>
														<div class="d-flex gap-3">
															<input type="radio" name="fuelBattery" id="fuelOption" value="fuel" checked>
															<label for="fuelOption">Fuel</label>
															<input type="radio" name="fuelBattery" id="batteryOption" value="battery">
															<label for="batteryOption">Battery</label>
														</div>
													</div>
												</div>
												<div class=" col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Customer Name</label>
														<input type="text" name="customerName" class="form-control" placeholder="Enter Customer Name">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Contact Number</label>
														<input type="text" name="contactNumber" class="form-control" placeholder="Enter Customer Contact">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Address</label>
														<input type="text" name="customerAddress" class="form-control" placeholder="Enter Customer Address">
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Fuel/Battery Level</label>
														<div class="fuel-battery-indicator">
															<span>E</span>
															<input type="range" class="form-range" min="0" max="60" step="1" value="30" id="fuelBatteryLevel" oninput="updateHiddenValue()">
															<span>F</span>
															<span id="fuelBatteryValue">30L</span>
														</div>
													</div>
												</div>
												<!-- Hidden input to store the selected value for submission -->
												<input type="hidden" name="powerValue" id="powerValue" value="30">
											</div>
											<!-- Editor -->
											<div class="row">
												<div class="col-lg-6">
													<div class="input-blocks summer-description-box transfer mb-3">
														<label>Reported Defects/Demanded Repairs</label>
														<textarea class="form-control h-100" name="reportedDefects" rows="5"></textarea>
														<p class="mt-1">Maximum 60 Characters</p>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="input-blocks summer-description-box transfer mb-3">
														<label>Completed Actions</label>
														<textarea class="form-control h-100" name="completedAction" rows="5"></textarea>
														<p class="mt-1">Maximum 60 Characters</p>
													</div>
												</div>
											</div>
											<!-- /Editor -->
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample2">
								<div class="accordion-item">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
											<div class="text-editor add-list">
												<div class="addproduct-icon list icon">
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Lubricant Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<div class="input-blocks add-products">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Lubricant Type</label>
															<input type="text" class="form-control" placeholder="Search Lubricant Type">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Quantity</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Total Price</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Lubricant Type</label>
															<input type="text" class="form-control" placeholder="Enter Custom Lubricant Type">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Lubricant Amount</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample2">
								<div class="accordion-item">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
											<div class="text-editor add-list">
												<div class="addproduct-icon list icon">
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Labour Code Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
									<div class="accordion-body">
											<div class="input-blocks add-products">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Labour Code</label>
															<input type="text" class="form-control" placeholder="Search Code">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Quantity</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Total Price</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Labour Code</label>
															<input type="text" class="form-control" placeholder="Custom Labour Code">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Labour Amount</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample2">
								<div class="accordion-item">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
											<div class="text-editor add-list">
												<div class="addproduct-icon list icon">
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Dent/ Paint Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
									<div class="accordion-body">
											<div class="input-blocks add-products">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Dent/ Paint Type</label>
															<input type="text" class="form-control" placeholder="Select Parts">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Quantity</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Total Price</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Dent/ Paint Name</label>
															<input type="text" class="form-control" placeholder="Custom Dent/ Paint Name">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Dent/ Paint Amount</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample2">
								<div class="accordion-item">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
											<div class="text-editor add-list">
												<div class="addproduct-icon list icon">
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Spare Parts Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
									<div class="accordion-body">
											<div class="input-blocks add-products">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Spare Parts Type</label>
															<input type="text" class="form-control" placeholder="Select Parts">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Quantity</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Total Price</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
														<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Spare Parts</label>
															<input type="text" class="form-control" placeholder="Custom Spare Parts">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Custom Spare Parts Amount</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="text" class="form-control" value="0">
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="text" class="form-control" value="0" disabled>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="accordion-card-one accordion" id="accordionExample4">
								<div class="accordion-item">
									<div class="accordion-header" id="headingFour">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour">
											<div class="text-editor add-list">
												<div class="addproduct-icon list">
													<h5><i data-feather="list" class="add-info"></i><span>Custom Fields</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
										<div class="accordion-body">
											<div class="text-editor add-list add">
												<div class="row">
													<div class="mb-3 car-body-container">
														<h5 class="mb-3">Vehicle Body Report (Mark P-Paint, D-Dent, S-Scratch)</h5>
														<h6><span class="text-primary">[Note: </span> It can't be edited further.</h6>

														<div class="car-body-diagram">
															<canvas id="carCanvas"></canvas>
														</div>

														<div class="marker-options">
															<button class="marker-btn" data-type="P">P - Paint</button>
															<button class="marker-btn" data-type="D">D - Dent</button>
															<button class="marker-btn" data-type="S">S - Scratch</button>
															<button class="marker-btn clear-markers">Clear Markers</button>
														</div>

													</div>
												</div>

												<style>
													.car-body-container {
														text-align: center;
													}

													.car-body-diagram {
														position: relative;
														display: inline-block;
													}

													.car-body-diagram img {
														width: 100%;
														max-width: 500px;
													}

													.marker {
														position: absolute;
														cursor: pointer;
														background: red;
														color: white;
														font-size: 12px;
														font-weight: bold;
														padding: 3px;
														border-radius: 50%;
														transform: translate(-50%, -50%);
													}

													.marker-options {
														margin-top: 10px;
													}

													.marker-btn {
														margin: 5px;
														padding: 5px 10px;
														cursor: pointer;
														border: none;
														background-color: #007bff;
														color: white;
														border-radius: 5px;
													}

													.marker-btn:hover {
														background-color: #0056b3;
													}

													.clear-markers {
														background-color: red;
													}

													.clear-markers:hover {
														background-color: darkred;
													}
												</style>

												<script>
													document.addEventListener("DOMContentLoaded", function() {
														const carCanvas = document.getElementById("carCanvas");
														const ctx = carCanvas.getContext("2d");
														const carImage = new Image();
														carImage.src = "./images/car-outlines.avif";

														let selectedMarkerType = "";
														let markersData = [];

														carImage.onload = function() {
															carCanvas.width = carImage.width;
															carCanvas.height = carImage.height;
															ctx.drawImage(carImage, 0, 0);
														};

														document.querySelectorAll(".marker-btn").forEach(button => {
															button.addEventListener("click", function(event) {
																event.preventDefault();
																selectedMarkerType = this.getAttribute("data-type");
															});
														});

														carCanvas.addEventListener("click", function(event) {
															if (!selectedMarkerType) return;

															const rect = carCanvas.getBoundingClientRect();
															const x = event.clientX - rect.left;
															const y = event.clientY - rect.top;

															ctx.fillStyle = "red";
															ctx.font = "bold 14px Arial";
															ctx.fillText(selectedMarkerType, x, y);

															markersData.push({
																type: selectedMarkerType,
																x,
																y
															});
														});

														document.querySelector(".clear-markers").addEventListener("click", function() {
															ctx.clearRect(0, 0, carCanvas.width, carCanvas.height);
															ctx.drawImage(carImage, 0, 0);
															markersData = [];
														});

														document.getElementById("saveDataButton").addEventListener("click", function(event) {
															event.preventDefault();

															// Ensure the image is drawn
															ctx.drawImage(carImage, 0, 0);

															// Capture the canvas image
															const markedImage = carCanvas.toDataURL("image/png");

															if (!markedImage) {
																alert("Error: No image data found.");
																return;
															}

															console.log("Sending Image Data:", markedImage.substring(0, 100));

															fetch("save_vehicle_report.php", {
																	method: "POST",
																	body: JSON.stringify({
																		image: markedImage
																	}),
																	headers: {
																		"Content-Type": "application/json"
																	}
																})
																.then(response => response.json())
																.then(data => {
																	console.log("Response from server:", data);
																	alert(data.message);
																})
																.catch(error => console.error("Error:", error));
														});
													});
												</script>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample">
								<!-- here -->
								<div class="accordion-item">
									<div class="accordion-header" id="headingOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
											<div class="addproduct-icon">
												<h5><i data-feather="info" class="add-info"></i><span>Privacy Information</span></h5>
												<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
											</div>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="row">
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Contact Person</label>
														<input type="text" name="contactPerson" class="form-control" placeholder="Enter Contact Person">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Contact Number</label>
														<input type="text" name="personContactNumber" class="form-control" placeholder="Enter Person's Contact Number">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Technician Name</label>
														<input type="text" name="technicianName" class="form-control" placeholder="Enter Technician Name">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Supervisor</label>
														<input type="text" name="supervisor" class="form-control" placeholder="Enter Supervisor Name">
													</div>
												</div>
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
				<!-- /add -->

			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add Adjustment -->
	<div class="modal fade" id="add-units">
		<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation Attribute</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Attribute Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Add Value</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<ul class="nav user-menu">
										<li class="nav-item nav-searchinputs">
											<div class="top-nav-search">
												<form action="#" class="dropdown">
													<div class="searchinputs list dropdown-toggle" id="dropdownMenuClickable2" data-bs-toggle="dropdown" data-bs-auto-close="false">
														<input type="text" placeholder="Search">
														<i data-feather="search" class="feather-16 icon"></i>
														<div class="search-addon d-none">
															<span><i data-feather="x-circle" class="feather-14"></i></span>
														</div>
													</div>
													<div class="dropdown-menu search-dropdown idea" aria-labelledby="dropdownMenuClickable2">
														<div class="search-info">
															<p>Black </p>
															<p>Red</p>
															<p>Green</p>
															<p>S</p>
															<p>M</p>
														</div>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<div class="modal-footer-btn popup">
										<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
										<a href="javascript:void(0);" class="btn btn-submit" data-bs-dismiss="modal">Create Attribute</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Adjustment -->

	<!-- Add Category -->
	<div class="modal fade" id="add-units-category">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Category</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category -->

	<!-- Add Brand -->
	<div class="modal fade" id="add-units-brand">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Brand</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Brand</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Brand -->

	<!-- Add Unit -->
	<div class="modal fade" id="add-unit">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Unit</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Unit</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Unit -->

	<!-- Add Variatent -->
	<div class="modal fade" id="add-variation">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="modal-title-head people-cust-avatar">
								<h6>Variant Thumbnail</h6>
							</div>
							<div class="new-employee-field">
								<div class="profile-pic-upload">
									<div class="profile-pic">
										<span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
									</div>
									<div class="mb-3">
										<div class="image-upload mb-0">
											<input type="file">
											<div class="image-uploads">
												<h4>Change Image</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Barcode Symbology</label>
										<select class="select">
											<option>Choose</option>
											<option>Code34</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<div class="input-blocks add-product list">
											<label>Item Code</label>
											<input type="text" class="form-control list" value="455454478844">
											<button type="submit" class="btn btn-primaryadd">
												Generate Code
											</button>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks image-upload-down">
										<div class="image-upload download">
											<input type="file">
											<div class="image-uploads">
												<img src="images/download-img.png" alt="img">
												<h4>Drag and drop a <span>file to upload</span></h4>
											</div>
										</div>
									</div>
									<div class="accordion-body">
										<div class="text-editor add-list add">
											<div class="col-lg-12">
												<div class="add-choosen mb-3">
													<div class="phone-img ms-0">
														<img src="images/phone-add-2.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>

													<div class="phone-img">
														<img src="images/phone-add-1.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity Alert</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax Type</label>
										<select class="select">
											<option>Choose</option>
											<option>Direct</option>
											<option>Indirect</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax </label>
										<select class="select">
											<option>Choose</option>
											<option>Income Tax</option>
											<option>Service Tax</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div class="mb-3">
										<label class="form-label">Discount Type </label>
										<select class="select">
											<option>Choose</option>
											<option>Percentage</option>
											<option>Early Payment</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div>
										<label class="form-label">Discount Value</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>


							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Variatent -->
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

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const fuelOption = document.getElementById("fuelOption");
			const batteryOption = document.getElementById("batteryOption");
			const rangeInput = document.getElementById("fuelBatteryLevel");
			const valueDisplay = document.getElementById("fuelBatteryValue");
			const powerValueInput = document.getElementById("powerValue"); // Hidden input for form submission

			function updateDisplay() {
				if (fuelOption.checked) {
					rangeInput.max = 60;
					rangeInput.step = 1;
					if (rangeInput.value > 60) rangeInput.value = 30; // Reset if out of range
					valueDisplay.innerText = rangeInput.value + "L";
				} else {
					rangeInput.max = 100;
					rangeInput.step = 5;
					if (rangeInput.value > 100) rangeInput.value = 50; // Reset if out of range
					valueDisplay.innerText = rangeInput.value + "%";
				}
				powerValueInput.value = rangeInput.value; // Update hidden input
			}

			function updateHiddenValue() {
				powerValueInput.value = rangeInput.value; // Sync range value with hidden input
				valueDisplay.innerText = rangeInput.value + (fuelOption.checked ? "L" : "%");
			}

			fuelOption.addEventListener("change", updateDisplay);
			batteryOption.addEventListener("change", updateDisplay);
			rangeInput.addEventListener("input", updateHiddenValue);

			updateDisplay(); // Initialize on page load
		});
	</script>
</body>


</body>

</html>