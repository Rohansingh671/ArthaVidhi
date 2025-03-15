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

		<?php $page = 'invoice-report';
		include './includes/sidebar.php'; ?>

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Invoice Report </h4>
							<h6>Manage Your Invoice Report</h6>
						</div>
					</div>
					<ul class="table-top-head">
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="images/pdf.svg" alt="img"></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="images/excel.svg" alt="img"></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
						</li>
					</ul>
				</div>


				<!-- Invoices -->
				<div class="card">
					<div class="card-body">
						<div class="row justify-content-between align-items-center border-bottom mb-3">
							<div class="col-md-6">
								<div class="mb-0">
									<svg width="180" height="60" viewBox="0 0 300 80" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
											<!-- Shopping Bag Icon -->
											<rect x="10" y="10" width="50" height="50" rx="10" fill="#FFA64D" />
											<path d="M25 15a10 10 0 0 1 20 0" stroke="#0D1B40" stroke-width="3" fill="none" />
											<circle cx="35" cy="35" r="14" fill="#0D1B40" />

											<!-- Dollar Symbol Inside Circle -->
											<text x="31" y="40" font-family="Arial, sans-serif" font-size="16" fill="white" font-weight="bold">$</text>

											<!-- Text "ArthaVidhi" -->
											<text x="70" y="50" font-family="Poppins, sans-serif" font-size="40" fill="#0D1B40" font-weight="bold">ArthaVidhi</text>

											<!-- "SOFT" Text -->
											<text x="230" y="10" font-family="Poppins, sans-serif" font-size="22" fill="#FFA64D" font-weight="900">SOFT</text>
										</g>
									</svg>
								</div>
								<p>3099 Kennedy Court Framingham, MA 01702</p>
							</div>
							<div class="col-md-6">
								<div class=" text-end mb-3">
									<h5 class="text-gray mb-1">Invoice No <span class="text-primary">#INV0001</span></h5>
									<p class="mb-1 fw-medium">Created Date : <span class="text-dark">Sep 24, 2024</span> </p>
									<p class="fw-medium">Due Date : <span class="text-dark">Sep 30, 2024</span> </p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="input-blocks add-product list">
									<label class="form-label">Job Number</label>
									<input type="text" class="form-control" name="jobNumber">
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Job Date</label>
									<input type="text" name="jobDate" class="form-control">
								</div>
							</div>
							<div class="col-lg-2 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Registration Number</label>
									<input type="text" name="registerNumber" class="form-control">
								</div>
							</div>
							<div class="col-lg-2 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Year</label>
									<input type="text" name="vinNumber" class="form-control">
								</div>
							</div>
							<div class="col-lg-2 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Date/ Time In:</label>
									<input type="text" name="dateTimeIn" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Millage</label>
									<input type="text" name="millage" class="form-control">
								</div>
							</div>
							<div class=" col-lg-3 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Vehicle Brand</label>
									<input type="text" name="vehicleBrand" class="form-control">
								</div>
							</div>
							<div class="col-lg-2 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Vehicle Model</label>
									<input type="text" name="vehicleModel" class="form-control">
								</div>
							</div>
							<div class="col-lg-2 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Vehicle Colour</label>
									<input type="text" name="vehicleColour" class="form-control">
								</div>
							</div>
							<div class="col-lg-2 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Date/ Time Out:</label>
									<input type="text" name="dateTimeOut" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Engine No.</label>
									<input type="text" name="engineNumber" class="form-control">
								</div>
							</div>
							<div class=" col-lg-4 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">VIN No.</label>
									<input type="text" name="vinNumber" class="form-control">
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Fuel/ Battery</label>
									<input type="text" name="vinNumber" class="form-control">
								</div>
							</div>
							<div class=" col-lg-4 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Customer Name</label>
									<input type="text" name="customerName" class="form-control">
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Contact Number</label>
									<input type="text" name="contactNumber" class="form-control">
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Address</label>
									<input type="text" name="customerAddress" class="form-control">
								</div>
							</div>
							<div class=" col-lg-12 col-sm-6 col-12">
								<div class="mb-3 add-product">
									<label class="form-label">Purpose Visit</label>
									<textarea class="form-control"></textarea>
								</div>
							</div>
							<!-- Editor -->
							<div class="col-lg-6">
								<div class="input-blocks summer-description-box transfer mb-3">
									<label>Reported Defects/Demanded Repairs</label>
									<textarea class="form-control h-100" name="reportedDefects" rows="5"></textarea>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="input-blocks summer-description-box transfer mb-3">
									<label>Completed Actions</label>
									<textarea class="form-control h-100" name="completedAction" rows="5"></textarea>
								</div>
							</div>
							<!-- /Editor -->
						</div>
						<div class="container">
							<div class="row">
								<!-- Vehicle Body Inspection -->
								<div class="col-lg-6 col-md-12">
									<div class="mb-3">
										<label class="fw-medium mb-2 d-block">Vehicle Body Inspection</label>
										<div class="add-product d-flex justify-content-center align-items-center"
											style="height: 200px; border: 1px solid #cbcbcb; border-radius: 8px; background-color: #f9f9f9;">
											<img src="./images/images.jpg" alt="Container 1 Image" class="img-fluid"
												style="max-height: 90%; max-width: 90%; object-fit: contain;">
										</div>
									</div>

									<!-- Technician and Supervisor Details -->
									<div class="mb-3">
										<div style="border: 1px solid #cbcbcb; border-radius: 8px; padding: 15px; background-color: #f9f9f9;">
											<div class="row">
												<div class="col-md-4 col-12 mb-1">
													<label class="fw-medium">Technician Name:</label>
													<input type="text" class="form-control" placeholder="Enter Technician Name">
												</div>
												<div class="col-md-4 col-6 mb-1">
													<label class="fw-medium">Signature:</label>
													<input type="text" class="form-control" placeholder="Signature">
												</div>
												<div class="col-md-4 col-6 mb-1">
													<label class="fw-medium">Date:</label>
													<input type="text" class="form-control">
												</div>
											</div>

											<p class="text-muted mt-3">
												Repair order is <strong>closed</strong> after operation performed on customer request and after full satisfaction of customer vehicle is handed over.
											</p>

											<div class="row mt-2">
												<div class="col-md-4 col-12 mb-2">
													<label class="fw-medium">Supervisor:</label>
													<input type="text" class="form-control" placeholder="Enter Supervisor Name">
												</div>
												<div class="col-md-4 col-6 mb-2">
													<label class="fw-medium">Signature:</label>
													<input type="text" class="form-control" placeholder="Signature">
												</div>
												<div class="col-md-4 col-6 mb-2">
													<label class="fw-medium">Date:</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Privacy Information -->
								<div class="col-lg-6 col-md-12">
									<div class="mb-3">
										<label class="fw-medium mb-2 d-block">Privacy Information</label>
										<div class="privacy-container"
											style="border: 1px solid #cbcbcb; border-radius: 8px; padding: 20px; background-color: #f9f9f9; min-height: 350px;">
											<p class="text-muted">
												All jobs are explained to me and I have authorized the above work to be carried out with necessary materials
												and additional work if required also at my cost. I authorized the vehicle to be stored, tested, and driven at my risk.
												All personal possessions of value have been removed, and I shall not hold Crossways Autovilla responsible for loss of items in the vehicle.
											</p>

											<div class="mb-2">
												<label class="fw-medium">Contact Person:</label>
												<input type="text" class="form-control" placeholder="Enter contact person">
											</div>

											<div class="mb-2">
												<label class="fw-medium">Contact Number:</label>
												<input type="text" class="form-control" placeholder="Enter contact number">
											</div>

											<div class="mb-2">
												<label class="fw-medium">Signature:</label>
												<input type="text" class="form-control" placeholder="Signature">
											</div>
										</div>
									</div>

									<!-- Prepared By, Signature, and Date Fields -->
									<div class="row mt-3">
										<div class="col-md-4 col-12 mb-2">
											<label class="fw-medium">Prepared By:</label>
											<input type="text" class="form-control" placeholder="Enter Name">
										</div>
										<div class="col-md-4 col-6 mb-2">
											<label class="fw-medium">Signature:</label>
											<input type="text" class="form-control" placeholder="Signature">
										</div>
										<div class="col-md-4 col-6 mb-2">
											<label class="fw-medium">Date:</label>
											<input type="date" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div>
					<p class="fw-medium">Invoice For : <span class="text-dark fw-medium">Design & development of Website</span></p>
					<div class="table-responsive mb-3">
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>Job Description</th>
									<th class="text-end">Qty</th>
									<th class="text-end">Cost</th>
									<th class="text-end">Discount</th>
									<th class="text-end">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<h6>UX Strategy</h6>
									</td>
									<td class="text-gray-9 fw-medium text-end">1</td>
									<td class="text-gray-9 fw-medium text-end">$500</td>
									<td class="text-gray-9 fw-medium text-end">$100</td>
									<td class="text-gray-9 fw-medium text-end">$500</td>
								</tr>
								<tr>
									<td>
										<h6>Design System</h6>
									</td>
									<td class="text-gray-9 fw-medium text-end">1</td>
									<td class="text-gray-9 fw-medium text-end">$5000</td>
									<td class="text-gray-9 fw-medium text-end">$100</td>
									<td class="text-gray-9 fw-medium text-end">$5000</td>
								</tr>
								<tr>
									<td>
										<h6>Brand Guidellines</h6>
									</td>
									<td class="text-gray-9 fw-medium text-end">1</td>
									<td class="text-gray-9 fw-medium text-end">$5000</td>
									<td class="text-gray-9 fw-medium text-end">$100</td>
									<td class="text-gray-9 fw-medium text-end">$5000</td>
								</tr>
								<tr>
									<td>
										<h6>Social Media Template</h6>
									</td>
									<td class="text-gray-9 fw-medium text-end">1</td>
									<td class="text-gray-9 fw-medium text-end">$5000</td>
									<td class="text-gray-9 fw-medium text-end">$100</td>
									<td class="text-gray-9 fw-medium text-end">$5000</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row border-bottom mb-3">
					<div class="col-md-5 ms-auto mb-3">
						<div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
							<p class="mb-0">Sub Total</p>
							<p class="text-dark fw-medium mb-2">$5500</p>
						</div>
						<div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
							<p class="mb-0">Discount (0%)</p>
							<p class="text-dark fw-medium mb-2">$400</p>
						</div>
						<div class="d-flex justify-content-between align-items-center mb-2 pe-3">
							<p class="mb-0">VAT (5%)</p>
							<p class="text-dark fw-medium mb-2">$54</p>
						</div>
						<div class="d-flex justify-content-between align-items-center mb-2 pe-3">
							<h5>Total Amount</h5>
							<h5>$5775</h5>
						</div>
						<p class="fs-12">
							Amount in Words : Dollar Five thousand Seven Seventy Five
						</p>
					</div>
				</div>
				<div class="row align-items-center border-bottom mb-3">
					<div class="col-md-7">
						<div>
							<div class="mb-3">
								<h6 class="mb-1">Terms and Conditions</h6>
								<p>Please pay within 15 days from the date of invoice, overdue interest @ 14% will be charged on delayed payments.</p>
							</div>
							<div class="mb-3">
								<h6 class="mb-1">Notes</h6>
								<p>Please quote invoice number when remitting funds.</p>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="text-end">
							<img src="images/sign.svg" class="img-fluid" alt="sign">
						</div>
						<div class="text-end mb-3">
							<h6 class="fs-14 fw-medium pe-3">Ted M. Davis</h6>
							<p>Assistant Manager</p>
						</div>
					</div>
				</div>
				<div class="text-center">
					<div class="mb-0">
						<svg width="180" height="65" viewBox="0 0 300 80" xmlns="http://www.w3.org/2000/svg">
							<g fill="none" fill-rule="evenodd">
								<!-- Shopping Bag Icon -->
								<rect x="10" y="10" width="50" height="50" rx="10" fill="#FFA64D" />
								<path d="M25 15a10 10 0 0 1 20 0" stroke="#0D1B40" stroke-width="3" fill="none" />
								<circle cx="35" cy="35" r="14" fill="#0D1B40" />

								<!-- Dollar Symbol Inside Circle -->
								<text x="31" y="40" font-family="Arial, sans-serif" font-size="16" fill="white" font-weight="bold">$</text>

								<!-- Text "ArthaVidhi" -->
								<text x="70" y="50" font-family="Poppins, sans-serif" font-size="40" fill="#0D1B40" font-weight="bold">ArthaVidhi</text>

								<!-- "SOFT" Text -->
								<text x="230" y="10" font-family="Poppins, sans-serif" font-size="22" fill="#FFA64D" font-weight="900">SOFT</text>
							</g>
						</svg>
					</div>
					<p class="text-dark mb-1">Payment Made Via bank transfer / Cheque in the name of Thomas Lawler</p>
					<div class="d-flex justify-content-center align-items-center">
						<p class="fs-12 mb-0 me-3">Bank Name : <span class="text-dark">HDFC Bank</span></p>
						<p class="fs-12 mb-0 me-3">Account Number : <span class="text-dark">45366287987</span></p>
						<p class="fs-12">IFSC : <span class="text-dark">HDFC0018159</span></p>
					</div>
				</div>
			</div>
		</div>
		<!-- /Invoices -->
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
	<script src="js/jquery-3.7.1.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="js/feather.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="js/jquery.slimscroll.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Datatable JS -->
	<script src="js/jquery.dataTables.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>
	<script src="js/dataTables.bootstrap5.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Datetimepicker JS -->
	<script src="js/moment.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>
	<script src="js/bootstrap-datetimepicker.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Daterangepikcer JS -->
	<script src="js/moment.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>
	<script src="js/daterangepicker.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="js/bootstrap.bundle.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Summernote JS -->
	<script src="js/summernote-bs4.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="js/select2.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Sweetalert 2 -->
	<script src="js/sweetalert2.all.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>
	<script src="js/sweetalerts.min.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>

	<!-- Custom JS -->
	<script src="js/script.js" type="d4e35c9ac780cf7a658c1972-text/javascript"></script>


	<script src="js/rocket-loader.min.js" data-cf-settings="d4e35c9ac780cf7a658c1972-|49" defer=""></script>
</body>

</html>