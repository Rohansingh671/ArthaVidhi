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

		<?php $page = 'purpose-list';
		include './includes/sidebar.php'; ?>

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Purpose</h4>
							<h6>Manage your purpose visit</h6>
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
					<div class="page-btn">
						<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-brand"><i data-feather="plus-circle" class="me-2"></i>Add New Purpose</a>
					</div>
				</div>
				<!-- /product list -->
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
						<!-- /Filter -->
						<div hidden="card" id="filter_inputs">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="input-blocks">
											<i data-feather="zap" class="info-img"></i>
											<select class="select">
												<option>Choose Brand</option>
												<option>Lenevo</option>
												<option>Boat</option>
												<option>Nike</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="input-blocks">
											<i data-feather="calendar" class="info-img"></i>
											<div class="input-groupicon">
												<input type="text" class="datetimepicker" placeholder="Choose Date">
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="input-blocks">
											<i data-feather="stop-circle" class="info-img"></i>
											<select class="select">
												<option>Choose Status</option>
												<option>Active</option>
												<option>Inactive</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12 ms-auto">
										<div class="input-blocks">
											<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Filter -->
						<div class="table-responsive">
							<table class="table  datanew">
								<thead>
									<tr>
										<th>Purpose ID</th>
										<th>Purpose Visit</th>
										<th>Status</th>
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php

									require_once 'php/purposeDataFromDatabase.php';
									foreach ($purposes as $purpose) { 
									?>
										<tr>
											<td><a href="#" class="link-primary"><?php echo $purpose['pupID']; ?></a></td>
											<td><?php echo $purpose['purpose']; ?></td>
											<td><?php echo $purpose['status']; ?></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-brand">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>

											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /product list -->
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add Purpose -->
	<div class="modal fade" id="add-brand">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Create Job</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"></span>
							</button>
						</div>
						<div class="modal-body custom-modal-body new-employee-field">
							<form action="php/createPurpose.php" method="post">
								<?php
								require_once 'php/databaseConnection.php';

								$mysqli = db_connect();

								$result = $mysqli->query("SELECT pupID FROM createPurpose ORDER BY ID DESC LIMIT 1");
								$row = $result->fetch_row();

								if ($row == null) {
									$total_pup_id = 1; // Initialize $total_group_id here for the case where no rows are found
								} else {
									$pup_id = substr($row[0], 3); // Adjust substring length to skip "FGID"
									$total_pup_id = $pup_id + 1; // Increment the numeric part of the group ID
								}
								?>
								<div class="mb-3">
									<label class="form-label">Purpose ID</label>
									<input type="text" name="pupID" class="form-control" value="PUP<?php echo $total_pup_id ?>" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">Purpose</label>
									<input type="text" name="purpose" class="form-control">
								</div>
								<div class="mb-0">
									<label class="form-label">Status</label>
									<select class="select" name="pupStatus">
										<option value="">Select</option>
										<option value="Active">Active</option>
										<option value="Inactive">Inactive</option>
									</select>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Save Purpose</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Purpose -->

	<!-- Edit Brand -->
	<div class="modal fade" id="edit-brand">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Edit Brand</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"></span>
							</button>
						</div>
						<div class="modal-body custom-modal-body new-employee-field">
							<form action="brand-list.php">
								<div class="mb-3">
									<label class="form-label">Brand</label>
									<input type="text" class="form-control" value="Boat">
								</div>
								<label class="form-label">Logo</label>
								<div class="profile-pic-upload mb-3">
									<div class="profile-pic brand-pic">
										<span><img src="images/brand-icon-02.png" alt=""></span>
										<a href="javascript:void(0);" class="remove-photo"><i data-feather="x" class="x-square-add"></i></a>
									</div>
									<div class="image-upload mb-0">
										<input type="file">
										<div class="image-uploads">
											<h4>Change Image</h4>
										</div>
									</div>
								</div>
								<div class="mb-0">
									<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
										<span class="status-label">Status</span>
										<input type="checkbox" id="user4" class="check" checked="">
										<label for="user4" class="checktoggle"></label>
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
	<!-- Edit Brand -->
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
	<script src="js/jquery-3.7.1.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="js/feather.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="js/jquery.slimscroll.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Datatable JS -->
	<script src="js/jquery.dataTables.min.js" type="313262e797703a9421c22571-text/javascript"></script>
	<script src="js/dataTables.bootstrap5.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="js/bootstrap.bundle.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="js/select2.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Datetimepicker JS -->
	<script src="js/moment.min.js" type="313262e797703a9421c22571-text/javascript"></script>
	<script src="js/bootstrap-datetimepicker.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Sweetalert 2 -->
	<script src="js/sweetalert2.all.min.js" type="313262e797703a9421c22571-text/javascript"></script>
	<script src="js/sweetalerts.min.js" type="313262e797703a9421c22571-text/javascript"></script>

	<!-- Custom JS -->

	<script src="js/script.js" type="313262e797703a9421c22571-text/javascript"></script>

	<script src="js/rocket-loader.min.js" data-cf-settings="313262e797703a9421c22571-|49" defer=""></script>
</body>

</html>