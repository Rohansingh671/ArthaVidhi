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

		<?php $page = 'vehicleInspection';
		include './includes/sidebar.php'; ?>

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Vehicle Inspection</h4>
							<h6>40% vehicle inspection carried over</h6>
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
				<div class="row">
					<!-- /product list -->
					<div class="col-lg-6 col-md-6">
						<div class="card table-list-card">
							<div class="card-body">
								<div class="table-top">
									<div class="search-set">
										<div class="search-input">
											<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
										</div>
									</div>
									<div class="search-path">
										<a class="btn btn-filter" id="filter_search">
											<i data-feather="filter" class="filter-icon"></i>
											<span><img src="images/closes.svg" alt="img"></span>
										</a>
									</div>
									<div class="form-sort">
										<i data-feather="sliders" class="info-img"></i>
										<select class="select">
											<option>Sort by Date</option>
											<option>Newest</option>
											<option>Oldest</option>
										</select>
									</div>
								</div>
								<div class="table-responsive">
									<form id="inspectionForm">
										<table class="table datanew">
											<thead>
												<tr>
													<th>Components</th>
													<th>Status</th>
													<th>Remarks</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Exterior Body Damages</td>
													<td>
														<button type="button" class="btn btn-sm btn-primary status-btn" data-status="Okay">Okay</button>
														<button type="button" class="btn btn-sm btn-secondary status-btn" data-status="Not Okay">Not Okay</button>
														<input type="hidden" name="status[]" value="">
													</td>
													<td><input type="text" name="remarks[]" class="form-control remarks" disabled></td>
													<input type="hidden" name="components[]" value="Exterior Body Damages">
												</tr>
												<tr>
													<td>Engine Oil & Filter</td>
													<td>
														<button type="button" class="btn btn-sm btn-primary status-btn" data-status="Okay">Okay</button>
														<button type="button" class="btn btn-sm btn-secondary status-btn" data-status="Not Okay">Not Okay</button>
														<input type="hidden" name="status[]" value="">
													</td>
													<td><input type="text" name="remarks[]" class="form-control remarks" disabled></td>
													<input type="hidden" name="components[]" value="Engine Oil & Filter">
												</tr>
												<tr>
													<td>Engine Air Filter</td>
													<td>
														<button type="button" class="btn btn-sm btn-primary status-btn" data-status="Okay">Okay</button>
														<button type="button" class="btn btn-sm btn-secondary status-btn" data-status="Not Okay">Not Okay</button>
														<input type="hidden" name="status[]" value="">
													</td>
													<td><input type="text" name="remarks[]" class="form-control remarks" disabled></td>
													<input type="hidden" name="components[]" value="Engine Air Filter">
												</tr>
												<tr>
													<td>Engine Coolant</td>
													<td>
														<button type="button" class="btn btn-sm btn-primary status-btn" data-status="Okay">Okay</button>
														<button type="button" class="btn btn-sm btn-secondary status-btn" data-status="Not Okay">Not Okay</button>
														<input type="hidden" name="status[]" value="">
													</td>
													<td><input type="text" name="remarks[]" class="form-control remarks" disabled></td>
													<input type="hidden" name="components[]" value="Engine Coolant">
												</tr>
											</tbody>
										</table>
										<button type="submit" class="btn btn-success mt-3">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<script>
						document.addEventListener("DOMContentLoaded", function() {
							document.querySelectorAll(".status-btn").forEach(button => {
								button.addEventListener("click", function() {
									let parentTd = this.closest("td");
									let hiddenInput = parentTd.querySelector("input[type=hidden]");
									let remarksInput = parentTd.nextElementSibling.querySelector("input");

									hiddenInput.value = this.getAttribute("data-status");

									if (this.getAttribute("data-status") === "Not Okay") {
										remarksInput.removeAttribute("disabled");
									} else {
										remarksInput.value = "";
										remarksInput.setAttribute("disabled", "true");
									}
								});
							});

							/*document.getElementById("inspectionForm").addEventListener("submit", function(event) {
								event.preventDefault();

								let formData = new FormData(this);
								let components = formData.getAll("components[]");
								let statuses = formData.getAll("status[]");
								let remarks = formData.getAll("remarks[]");

								let jsonData = [];
								for (let i = 0; i < statuses.length; i++) {
									if (statuses[i] === "") {
										alert("Please select a status for all components.");
										return;
									}

									jsonData.push({
										component: components[i],
										status: statuses[i],
										remark: statuses[i] === "Not Okay" ? remarks[i] : ""
									});
								}

								console.log("Sending Data:", JSON.stringify(jsonData)); // Debugging

								fetch("save_inspection.php", {
										method: "POST",
										body: JSON.stringify(jsonData),
										headers: {
											"Content-Type": "application/json"
										}
									})
									.then(response => response.text())
									.then(data => {
										console.log("Server Response:", data);
										alert("Data Saved Successfully");
										location.reload();
									})
									.catch(error => console.error("Error:", error));
							});*/
						});
					</script>
					<!-- /product list -->
					<!-- /product list -->
					<div class="col-lg-6 col-md-6">
						<div class="card table-list-card">
							<div class="card-body">
								<div class="table-top">
									<div class="search-set">
										<div class="search-input">
											<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
										</div>
									</div>
									<div class="search-path">
										<a class="btn btn-filter" id="filter_search">
											<i data-feather="filter" class="filter-icon"></i>
											<span><img src="images/closes.svg" alt="img"></span>
										</a>
									</div>
									<div class="form-sort">
										<i data-feather="sliders" class="info-img"></i>
										<select class="select">
											<option>Sort by Date</option>
											<option>Newest</option>
											<option>Oldest</option>
										</select>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table  datanew">
										<thead>
											<tr>
												<th>Components</th>
												<th>Status</th>
												<th>Remarks</th>
											</tr>
										</thead>
										<tbody>
											<tr>

												<td>Wiper</td>
												<td class="action-table-data">
													<div class="edit-delete-action">
														<button class="btn btn-sm btn-primary me-2">Okay</button>
														<button class="btn btn-sm btn-secondary">Not Okay</button>
													</div>
												</td>
												<td><input type="text" class="form-control"></td>
											</tr>
											<tr>

												<td>Brake Reservoir</td>
												<td class="action-table-data">
													<div class="edit-delete-action">
														<button class="btn btn-sm btn-primary me-2">Okay</button>
														<button class="btn btn-sm btn-secondary">Not Okay</button>
													</div>

												</td>
												<td><input type="text" class="form-control"></td>
											</tr>
											<tr>

												<td>Clutch Reservoir</td>
												<td class="action-table-data">
													<div class="edit-delete-action">
														<button class="btn btn-sm btn-primary me-2">Okay</button>
														<button class="btn btn-sm btn-secondary">Not Okay</button>
													</div>

												</td>
												<td><input type="text" class="form-control"></td>
											</tr>
											<tr>

												<td>Differential/ Transfer Case</td>
												<td class="action-table-data">
													<div class="edit-delete-action">
														<button class="btn btn-sm btn-primary me-2">Okay</button>
														<button class="btn btn-sm btn-secondary">Not Okay</button>
													</div>

												</td>
												<td><input type="text" class="form-control"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /product list -->
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add Unit -->
	<div class="modal fade" id="add-units">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Create Unit</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="units.php">
								<div class="mb-3">
									<label class="form-label">Name</label>
									<input type="text" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Short Name</label>
									<input type="text" class="form-control">
								</div>
								<div class="mb-0">
									<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
										<span class="status-label">Status</span>
										<input type="checkbox" id="user2" class="check" checked="">
										<label for="user2" class="checktoggle"></label>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Create Unit</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Unit -->

	<!-- Edit Unit -->
	<div class="modal fade" id="edit-units">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Edit Unit</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="units.php">
								<div class="mb-3">
									<label class="form-label">Name</label>
									<input type="text" class="form-control" value="Piece">
								</div>
								<div class="mb-3">
									<label class="form-label">Short Name</label>
									<input type="text" class="form-control" value="PC">
								</div>
								<div class="mb-0">
									<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
										<span class="status-label">Status</span>
										<input type="checkbox" id="user3" class="check" checked="">
										<label for="user3" class="checktoggle"></label>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="customizer-links" id="setdata">
		<ul class="sticky-sidebar">
			<li class="sidebar-icons">
				<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Theme">
					<i data-feather="settings" class="feather-five"></i>
				</a>
			</li>
		</ul>
	</div>

	<!-- /Edit Unit -->

	<!-- jQuery -->
	<script src="js/jquery-3.7.1.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="js/feather.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="js/jquery.slimscroll.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>

	<!-- Datatable JS -->
	<script src="js/jquery.dataTables.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>
	<script src="js/dataTables.bootstrap5.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="js/bootstrap.bundle.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>


	<!-- Datetimepicker JS -->
	<script src="js/moment.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>
	<script src="js/bootstrap-datetimepicker.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="js/select2.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>

	<!-- Sweetalert 2 -->
	<script src="js/sweetalert2.all.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>
	<script src="js/sweetalerts.min.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>

	<!-- Custom JS -->
	<script src="js/script.js" type="37ac3c7106ff2c237aaba4a5-text/javascript"></script>


	<script src="js/rocket-loader.min.js" data-cf-settings="37ac3c7106ff2c237aaba4a5-|49" defer=""></script>
</body>

</html>