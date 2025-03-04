<!DOCTYPE html><html lang="en">
	<?php include 'includes/head.php';?>
    <body>
		
		<div id="global-loader">
			<div class="whirly-loader"> </div>
		</div>
	
		 
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
			<!-- Header -->
			<?php include './includes/navbar.php'; ?>
			<!-- /Header -->
			
			<?php $page = 'store-list'; include './includes/sidebar.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Store List</h4>
								<h6>Manage your Store</h6>
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
							<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-stores"><i data-feather="plus-circle" class="me-2"></i> Add Store</a>
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
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="zap" class="info-img"></i>
												<select class="select">
													<option>Choose Stores</option>
													<option>Thomas</option>
													<option>Rasmussen</option>
													<option>Benjamin</option>
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
											<th class="no-sort">
												<label class="checkboxs">
													<input type="checkbox" id="select-all">
													<span class="checkmarks"></span>
												</label>
											</th>
											<th>Store name </th>
											<th>User name </th>
											<th>Phone</th>
											<th>Email</th>
											<th>Status</th>
											<th class="no-sort">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Thomas </td>
											<td>Thomas21 </td>
											<td>+12163547758 </td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee9a8681838f9dae8b968f839e828bc08d8183">[email�protected]</a></td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-stores">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Rasmussen	</td>
											<td>Cras56</td>
											<td>+1216358690 </td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0c2d1c3ddc5c3c3d5def0d5c8d1ddc0dcd59ed3dfdd">[email�protected]</a></td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-stores">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Fred john </td>
											<td>FredJ25</td>
											<td>+1387694357  </td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87ede8efe9c7e2ffe6eaf7ebe2a9e4e8ea">[email�protected]</a></td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-stores">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>James</td>
											<td>James 524 </td>
											<td>+1416350987 </td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3d9d2ded6c0f3d6cbd2dec3dfd69dd0dcde">[email�protected]</a></td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-stores">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
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

		<!-- Add Store -->
		<div class="modal fade" id="add-stores">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Create Store</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">�</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="store-list.php">
									<div class="mb-3">
										<label class="form-label">Store Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">User Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="input-blocks mb-3">
										<label>Password</label>
										<div class="pass-group">
											<input type="password" class=" pass-input">
											<span class="fas toggle-password fa-eye-slash"></span>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Phone</label>
										<input type="text" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input type="email" class="form-control">
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
										<button type="submit" class="btn btn-submit">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Store -->

		<!-- Edit Store -->
		<div class="modal fade" id="edit-stores">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Store</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">�</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="store-list.php">
									<div class="mb-3">
										<label class="form-label">Store Name</label>
										<input type="text" class="form-control" value="Fred john ">
									</div>
									<div class="mb-3">
										<label class="form-label">User Name</label>
										<input type="text" class="form-control" value="FredJ25">
									</div>
									<div class="input-blocks mb-3">
										<label>Password</label>
										<div class="pass-group">
											<input type="password" class=" pass-input" value="1234">
											<span class="fas toggle-password fa-eye-slash"></span>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Phone</label>
										<input type="text" class="form-control" value="+1216358690">
									</div>
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input type="email" class="form-control" value="john@example.com">
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
		<!-- /Edit Store -->
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
        <script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery-3.7.1.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

        <!-- Feather Icon JS -->
		<script src="js/feather.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

		<!-- Datatable JS -->
		<script src="js/jquery.dataTables.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>
		<script src="js/dataTables.bootstrap5.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="js/bootstrap.bundle.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="js/select2.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

		<!-- Datetimepicker JS -->
		<script src="js/moment.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>
		<script src="js/bootstrap-datetimepicker.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

		<!-- Sweetalert 2 -->
		<script src="js/sweetalert2.all.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>
		<script src="js/sweetalerts.min.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

		<!-- Custom JS -->
<script src="js/script.js" type="9287e6f2028cf368343594ed-text/javascript"></script>

	
    <script src="js/rocket-loader.min.js" data-cf-settings="9287e6f2028cf368343594ed-|49" defer=""></script>
</body></html>