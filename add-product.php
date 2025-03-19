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
														<input type="text" class="form-control" name="jobNumber" value="JOBN<?php echo $total_job_number ?>" readonly>
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
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Registration Number</label>
														<input type="text" name="registerNumber" class="form-control" placeholder="Enter Vehicle Reg. No.">
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Year</label>
														<select class="select" name="year">
															<option>Choose</option>
															<option>2081</option>
															<option>2082</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Date/ Time In:</label>
														<input type="text" name="dateTimeIn" class="form-control" placeholder="Entrance Date and Time">
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
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Vehicle Model</label>
														<input type="text" name="vehicleModel" class="form-control" placeholder="Enter Vehicle Model">
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Vehicle Colour</label>
														<input type="text" name="vehicleColour" class="form-control" placeholder="Enter Vehicle Colour">
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Date/ Time Out:</label>
														<input type="text" name="dateTimeOut" class="form-control" placeholder="Departure Date and Time">
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
														<select class="select" name="purpose[]" multiple>
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
							<!--/here -->
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
												<!-- Lubricant All Rows -->
												<?php include './includes/lubricantAllRows.php' ?>
												<!-- /Lubricant All Rows -->

												<div id="lubricantContainer">
													<!-- Original Row -->
													<div class="row lubricantRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Lubricant Type</label>
																<input type="text" name="customLubType[]" class="form-control" placeholder="Enter Custom Lubricant Type">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Lubricant Amount</label>
																<input type="number" name="customLubPrice[]" class="form-control customLubricantAmount" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" name="customLubDis[]" class="form-control customLubricantDiscount" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customLubricantNetAmount" name="customLubNet[]" value="0" readonly>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Toggle Button (Outside the row to avoid cloning) -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
													<button id="toggleCustomButton" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="lubricantBillAmount" value="0" readonly>
														<input type="hidden" id="totalCustomLubricant" value="0">
														<input type="hidden" id="totalLubricantAjax" value="0">
													</div>
												</div>
												<script>
													function updateFinalLubricantBillTotal() {
														let totalCustomLubricant = parseFloat(document.getElementById("totalCustomLubricant").value) || 0;
														let totalLubricantAjax = parseFloat(document.getElementById("totalLubricantAjax").value) || 0;

														let finalLubricantBillAmount = totalCustomLubricant + totalLubricantAjax;

														document.querySelector("[name='lubricantBillAmount']").value = finalLubricantBillAmount.toFixed(2);
													}
												</script>

												<!-- Custom Lubricant Details Script -->
												<?php include './includes/customLubricantDetailsScript.php' ?>
												<!-- /Custom Lubricant Details Script -->

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

												<!-- labourAllRows script -->
												<?php include './includes/labourAllRows.php' ?>
												<!-- /labourAllRows script -->
												<div id="labourContainer">
													<!-- Original Row -->
													<div class="row labourRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Labour Code</label>
																<input type="text" name="customLabourCode[]" class="form-control" placeholder="Custom Labour Code">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Labour Amount</label>
																<input type="number" name="customLabourPrice[]" class="form-control customLabourAmount" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" name="customLabourDis[]" class="form-control customLabourDiscount" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customLabourNetAmount" name="customLabourNet[]" value="0" readonly>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteLabourRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Add Row Button -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
													<button id="addLabourRow" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="labourBillAmount" value="0" readonly>
														<input type="hidden" id="totalCustomLabour" value="0">
														<input type="hidden" id="totalLabourAjax" value="0">
													</div>
												</div>

												<script>
													function updateFinalLabourBillTotal() {
														let totalCustomLabour = parseFloat(document.getElementById("totalCustomLabour").value) || 0;
														let totalLabourAjax = parseFloat(document.getElementById("totalLabourAjax").value) || 0;

														let finalLabourBillAmount = totalCustomLabour + totalLabourAjax;

														document.querySelector("[name='labourBillAmount']").value = finalLabourBillAmount.toFixed(2);
													}
												</script>
												<!-- Custom labour Script -->
												<?php include './includes/customLabourScript.php' ?>
												<!-- /Custom Labour Script -->
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

												<!-- dent script -->
												<?php include './includes/dentAllRows.php' ?>
												<!-- /dent Script -->
												<div id="dentPaintContainer">
													<!-- Original Row -->
													<div class="row dentPaintRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Dent/ Paint Name</label>
																<input type="text" class="form-control" name="customDentType[]" placeholder="Custom Dent/ Paint Name">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Dent/ Paint Amount</label>
																<input type="number" class="form-control customDentPaintAmount" name="customDentPrice[]" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" class="form-control customDentPaintDiscount" name="customDentDis[]" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customDentPaintNetAmount" name="customDentNet[]" value="0" readonly>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteDentPaintRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Add Row Button -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
													<button id="addDentPaintRow" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="dentBillAmount" value="0" readonly>
														<input type="hidden" id="totalCustomDent" value="0">
														<input type="hidden" id="totalDentAjax" value="0">
													</div>
												</div>

												<script>
													function updateFinalDentBillTotal() {
														let totalCustomDent = parseFloat(document.getElementById("totalCustomDent").value) || 0;
														let totalDentAjax = parseFloat(document.getElementById("totalDentAjax").value) || 0;

														let finalDentBillAmount = totalCustomDent + totalDentAjax;

														document.querySelector("[name='dentBillAmount']").value = finalDentBillAmount.toFixed(2);
													}
												</script>


												<!-- Custom Dent/ Paint Script -->
												<?php include './includes/customDentPaintScript.php' ?>
												<!-- /Custom Dent/ Paint Script -->
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

												<style>
													.search-results {
														position: absolute;
														background: white;
														border: 1px solid #ccc;
														width: 100%;
														max-height: 200px;
														overflow-y: auto;
														display: none;
														z-index: 1000;
													}

													.search-results div {
														padding: 10px;
														cursor: pointer;
													}

													.search-results div:hover {
														background: #f0f0f0;
													}
												</style>
												<!-- spare script -->
												<?php include './includes/spareAllRows.php' ?>
												<!-- /spare script -->
												<div id="sparePartsContainer">
													<!-- Original Row -->
													<div class="row sparePartsRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Spare Parts</label>
																<input type="text" class="form-control" name="customSpareType[]" placeholder="Custom Spare Parts">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Spare Parts Amount</label>
																<input type="number" class="form-control customSparePartsAmount" name="customSparePrice[]" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" class="form-control customSparePartsDiscount" name="customSpareDis[]" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customSparePartsNetAmount" name="customSpareNet[]" value="0" readonly>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteSparePartsRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Add Row Button -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12">
													<button id="addSparePartsRow" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="billAmount" value="0" readonly>
														<input type="hidden" id="totalCustomSpare" value="0">
														<input type="hidden" id="totalSpareAjax" value="0">
													</div>
												</div>
												<script>
													function updateFinalBillTotal() {
														let totalSpareAjax = parseFloat(document.getElementById("totalSpareAjax").value) || 0;
														let totalCustomSpare = parseFloat(document.getElementById("totalCustomSpare").value) || 0;

														let finalBillAmount = totalSpareAjax + totalCustomSpare;

														document.querySelector("[name='billAmount']").value = finalBillAmount.toFixed(2);
													}
												</script>

												<!-- Custom Spare Parts script -->
												<?php include './includes/customSparePartsScript.php' ?>
												<!-- /Custom Spare Parts script -->
											</div>
										</div>
									</div>
								</div>
							</div>
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
														<input type="number" name="TotalBillAmount" class="form-control" value="0" readonly>

													</div>
												</div>
												<script>
													function updateFinalLubricantBillTotal() {
														let totalCustomLubricant = parseFloat(document.getElementById("totalCustomLubricant").value) || 0;
														let totalLubricantAjax = parseFloat(document.getElementById("totalLubricantAjax").value) || 0;

														let finalLubricantBillAmount = totalCustomLubricant + totalLubricantAjax;

														document.querySelector("[name='lubricantBillAmount']").value = finalLubricantBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateFinalLabourBillTotal() {
														let totalCustomLabour = parseFloat(document.getElementById("totalCustomLabour").value) || 0;
														let totalLabourAjax = parseFloat(document.getElementById("totalLabourAjax").value) || 0;

														let finalLabourBillAmount = totalCustomLabour + totalLabourAjax;

														document.querySelector("[name='labourBillAmount']").value = finalLabourBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateFinalDentBillTotal() {
														let totalCustomDent = parseFloat(document.getElementById("totalCustomDent").value) || 0;
														let totalDentAjax = parseFloat(document.getElementById("totalDentAjax").value) || 0;

														let finalDentBillAmount = totalCustomDent + totalDentAjax;

														document.querySelector("[name='dentBillAmount']").value = finalDentBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateFinalBillTotal() {
														let totalSpareAjax = parseFloat(document.getElementById("totalSpareAjax").value) || 0;
														let totalCustomSpare = parseFloat(document.getElementById("totalCustomSpare").value) || 0;

														let finalBillAmount = totalSpareAjax + totalCustomSpare;

														document.querySelector("[name='billAmount']").value = finalBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateTotalBillAmount() {
														let finalLubricantBillAmount = parseFloat(document.querySelector("[name='lubricantBillAmount']").value) || 0;
														let finalLabourBillAmount = parseFloat(document.querySelector("[name='labourBillAmount']").value) || 0;
														let finalDentBillAmount = parseFloat(document.querySelector("[name='dentBillAmount']").value) || 0;
														let finalSpareBillAmount = parseFloat(document.querySelector("[name='billAmount']").value) || 0;

														let totalBillAmount = finalLubricantBillAmount + finalLabourBillAmount + finalDentBillAmount + finalSpareBillAmount;

														document.querySelector("[name='TotalBillAmount']").value = totalBillAmount.toFixed(2);
													}
												</script>
												<script>
													document.addEventListener("DOMContentLoaded", function() {
														function updateTotalBillAmount() {
															let finalLubricantBillAmount = parseFloat(document.querySelector("[name='lubricantBillAmount']").value) || 0;
															let finalLabourBillAmount = parseFloat(document.querySelector("[name='labourBillAmount']").value) || 0;
															let finalDentBillAmount = parseFloat(document.querySelector("[name='dentBillAmount']").value) || 0;
															let finalSpareBillAmount = parseFloat(document.querySelector("[name='billAmount']").value) || 0;

															let totalBillAmount = finalLubricantBillAmount + finalLabourBillAmount + finalDentBillAmount + finalSpareBillAmount;
															document.querySelector("[name='TotalBillAmount']").value = totalBillAmount.toFixed(2);

															// VAT Calculation (13%)
															let vatAmount = totalBillAmount * 0.13;
															document.querySelector("[name='vatAmount']").value = vatAmount.toFixed(2);

															// Update Net Total
															updateNetTotal();
														}

														function updateNetTotal() {
															let totalBillAmount = parseFloat(document.querySelector("[name='TotalBillAmount']").value) || 0;
															let vatAmount = parseFloat(document.querySelector("[name='vatAmount']").value) || 0;
															let discountAmount = parseFloat(document.querySelector("[name='discountAmount']").value) || 0;

															// Net Total Calculation
															let netTotal = totalBillAmount + vatAmount - discountAmount;
															document.querySelector("[name='netTotal']").value = netTotal.toFixed(2);

															// Update Remaining Amount if Total Paid is entered
															updateRemainingAmount();
														}

														function updateRemainingAmount() {
															let netTotal = parseFloat(document.querySelector("[name='netTotal']").value) || 0;
															let totalPaid = parseFloat(document.querySelector("[name='totalPaid']").value) || 0;

															// Remaining Amount Calculation
															let remainingAmount = netTotal - totalPaid;
															document.querySelector("[name='remainingAmount']").value = remainingAmount.toFixed(2);
														}

														// Event listeners for real-time updates
														document.querySelectorAll("[name='lubricantBillAmount'], [name='labourBillAmount'], [name='dentBillAmount'], [name='billAmount'], [name='discountAmount']")
															.forEach(input => input.addEventListener("input", updateTotalBillAmount));

														document.querySelector("[name='totalPaid']").addEventListener("input", updateRemainingAmount);
													});
												</script>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">VAT Amount (13%)</label>
														<input type="number" name="vatAmount" class="form-control" value="0" readonly>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Discount (in Rs)</label>
														<input type="number" name="discountAmount" class="form-control" value="0">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Net Total</label>
														<input type="number" name="netTotal" class="form-control" value="0" readonly>
													</div>
												</div>
												<div class="col-lg-9 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Remarks</label>
														<textarea name="billRemarks" class="form-control"></textarea>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Bill No.</label>
														<input type="text" class="form-control" name="billNumber" value="BNO<?php echo $total_job_number ?>" readonly>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Total Paid</label>
														<input type="number" name="totalPaid" class="form-control" value="0">
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Remaining Amount</label>
														<input type="number" name="remainingAmount" class="form-control" value="0" readonly>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Status</label>
														<select class="select" name="paymentStatus">
															<option value="">Select</option>
															<option value="Pending">Pending</option>
															<option value="Paid">Paid</option>
														</select>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<style>
								.search-results {
									position: absolute;
									background: white;
									border: 1px solid #ccc;
									width: 100%;
									max-height: 200px;
									overflow-y: auto;
									display: none;
									z-index: 1000;
								}

								.search-results div {
									padding: 10px;
									cursor: pointer;
								}

								.search-results div:hover {
									background: #f0f0f0;
								}
							</style>
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
												<div class="container-fluid">
													<div class="row justify-content-center">
														<div class="col-md-8">
															<div class="mb-3 car-body-container">
																<h5 class="mb-3">Vehicle Body Report (Mark P-Paint, D-Dent, S-Scratch)</h5>
																<h6 class="mb-3"><span class="text-primary">[Note: </span> It can't be edited further.</h6>

																<!-- Image Upload -->
																<div class="mb-3">
																	<input type="file" id="imageInput" accept="image/*" class="form-control">
																</div>

																<!-- Canvas for Drawing -->
																<div class="car-body-diagram">
																	<canvas id="carCanvas" class="w-100"></canvas>
																</div>

																<!-- Buttons for Marking -->
																<div class="marker-options mt-3">
																	<button type="button" class="marker-btn" onclick="setMarker('P', 'green')">P - Paint</button>
																	<button type="button" class="marker-btn" onclick="setMarker('D', 'blue')">D - Dent</button>
																	<button type="button" class="marker-btn" onclick="setMarker('S', 'red')">S - Scratch</button>
																	<button type="button" class="marker-btn clear-markers" onclick="clearCanvas()">Clear Marks</button>
																	<button type="button" class="marker-btn" onclick="saveImage()">Save Marked Image</button>
																	<button type="button" class="marker-btn" onclick="undoMark()">Undo</button>
																</div>

																<!-- Upload Button to send image to database -->
																<div class="upload-section mt-4">
																	<label for="uploadImage" class="form-label">Upload Saved Image to Database</label>
																	<input type="file" class="form-control" name="imageOfCar" multiple>
																</div>
															</div>
														</div>
													</div>
												</div>

												<script>
													const canvas = document.getElementById('carCanvas');
													const ctx = canvas.getContext('2d');
													let img = new Image();
													let markerType = 'S'; // Default marker type
													let markerColor = 'red';
													let drawnMarks = []; // Store the drawn marks

													// Load image when file is selected
													document.getElementById('imageInput').addEventListener('change', function(event) {
														const file = event.target.files[0];
														if (file) {
															const reader = new FileReader();
															reader.onload = function(e) {
																img.onload = function() {
																	canvas.width = img.width;
																	canvas.height = img.height;
																	ctx.drawImage(img, 0, 0);
																}
																img.src = e.target.result;
															}
															reader.readAsDataURL(file);
														}
													});

													// Set marker type and color
													function setMarker(type, color) {
														markerType = type; // 'S', 'D', or 'P'
														markerColor = color;
													}

													// Draw marker on click
													canvas.addEventListener('click', function(event) {
														const rect = canvas.getBoundingClientRect();
														const x = event.clientX - rect.left;
														const y = event.clientY - rect.top;

														// Draw the mark on the canvas
														ctx.fillStyle = markerColor;
														ctx.font = '20px Arial';
														ctx.fillText(markerType, x, y);

														// Save the mark to the drawnMarks array
														drawnMarks.push({
															type: markerType,
															color: markerColor,
															x: x,
															y: y
														});
													});

													// Clear the canvas (except the image)
													function clearCanvas() {
														ctx.drawImage(img, 0, 0);
														drawnMarks = []; // Clear the drawn marks array
													}

													// Save the marked image
													function saveImage() {
														const link = document.createElement('a');
														link.download = 'marked_car_image.png';
														link.href = canvas.toDataURL();
														link.click();
													}

													// Undo the last mark
													function undoMark() {
														drawnMarks.pop(); // Remove the last mark from the array
														redrawCanvas(); // Redraw the canvas without the last mark
													}

													// Redraw the canvas from the marks array
													function redrawCanvas() {
														ctx.drawImage(img, 0, 0); // Redraw the image
														// Redraw all the marks except the last one
														drawnMarks.forEach(mark => {
															ctx.fillStyle = mark.color;
															ctx.font = '20px Arial';
															ctx.fillText(mark.type, mark.x, mark.y);
														});
													}
												</script>

												<style>
													.car-body-container {
														text-align: center;
													}

													.car-body-diagram {
														position: relative;
														display: inline-block;
													}

													canvas {
														border: 2px solid #f0f0f0;
														cursor: crosshair;
													}

													.marker-options {
														margin-top: 10px;
													}

													.marker-btn {
														margin: 5px;
														padding: 10px 20px;
														cursor: pointer;
														border: none;
														background-color: #007bff;
														color: white;
														border-radius: 5px;
														transition: background-color 0.3s ease;
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

													.container-fluid {
														padding-left: 0;
														padding-right: 0;
													}

													.row {
														display: flex;
														justify-content: center;
													}

													.col-md-8 {
														padding: 20px;
													}

													.upload-section {
														margin-top: 20px;
													}

													.upload-section input {
														display: inline-block;
														margin-bottom: 10px;
													}

													@media (max-width: 767px) {
														.marker-btn {
															padding: 8px 16px;
														}
													}
												</style>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="accordion-card-one accordion" id="accordionExample">
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