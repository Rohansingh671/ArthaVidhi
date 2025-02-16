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
			
			<?php $page = 'shift'; include './includes/sidebar.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Designation</h4>
								<h6>Manage your designation</h6>
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
							<a href="" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-department"><i data-feather="plus-circle" class="me-2"></i>Add New Designation</a>
						</div>
					</div>
					<!-- /product list -->
					<div class="card table-list-card">
						<div class="card-body pb-0">
							<div class="table-top table-top-new">
								
								<div class="search-set mb-0">
									<div class="total-employees">
										<h6><i data-feather="users" class="feather-user"></i>Total Employees <span>21</span></h6>
									</div>
									<div class="search-input">
										<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
									</div>
								</div>
								<div class="search-path d-flex align-items-center search-path-new">
									<div class="d-flex">
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
								
							</div>
							<!-- /Filter -->
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="file-text" class="info-img"></i>
												<select class="select">
													<option>Choose Designation </option>
													<option>UI/UX</option>
													<option>HR</option>
													<option>Admin</option>
													<option>Engineering</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="users" class="info-img"></i>
												<select class="select">
													<option>Choose HOD</option>
													<option>Mitchum Daniel</option>
													<option>Susan Lopez</option>
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
											<th>Designation</th>
											<th>Members</th>
											<th>Created On</th>
											<th>Total Members</th>
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
											<td>Designer</td>
											
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-08.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-13.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-09.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-11.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""><span>+3</span></a>
															</li>
															
														</ul>
													</li>
												</ul>								
											</td>
											<td>07</td>
											<td>
												25 May 2023
											</td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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
											<td>Curator</td>
											
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-05.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-06.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-02.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""><span>+5</span></a>
															</li>
															
														</ul>
													</li>
												</ul>									
											</td>
											<td>08</td>
											<td>
												27 June 2023
											</td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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
											<td>System Administrator</td>
											
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-09.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-08.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-11.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""><span>+2</span></a>
															</li>
															
														</ul>
													</li>
												</ul>								
											</td>
											<td>06</td>
											<td>
												29 June 2023
											</td>
											<td><span class="badges-success">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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
											<td>Administrative Officer</td>
										
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-09.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-01.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""><span>+1</span></a>
															</li>
															
														</ul>
													</li>
												</ul>								
											</td>
											<td>03</td>
											<td>
												15 July 2023
											</td>
											<td><span class="badges-success">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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
											<td>Technician</td>
											
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-05.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-02.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-01.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""><span>+2</span></a>
															</li>
															
														</ul>
													</li>
												</ul>								
											</td>
											<td>05</td>
											<td>
												19 July 2023
											</td>
											<td><span class="badges-success">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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
											<td>Office Support Secretary</td>
											
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-07.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-11.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-09.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""><span>+5</span></a>
															</li>
															
														</ul>
													</li>
												</ul>									
											</td>
											<td>09</td>
											<td>
												04 August 2023
											</td>
											<td><span class="badges-success">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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
											<td>Tech Lead</td>
											
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-12.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-13.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-01.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-04.jpg" alt=""><span>+6</span></a>
															</li>
															
														</ul>
													</li>
												</ul>							
											</td>
											<td>10</td>
											<td>
												13 August 2023
											</td>
											<td><span class="badges-success">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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
											<td>Database administrator</td>
										
											<td>
												<ul class="team-members">
													<li>
														<ul>
															<li>
																<a href=""><img src="images/user-11.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-07.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-02.jpg" alt=""></a>
															</li>
															<li>
																<a href=""><img src="images/user-11.jpg" alt=""><span>+1</span></a>
															</li>
															
														</ul>
													</li>
												</ul>							
											</td>
											<td>04</td>
											<td>
												24 August 2023
											</td>
											<td><span class="badges-success">Active</span></td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
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

		<!-- Add Department -->
		<div class="modal fade" id="add-department">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Designation</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">�</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="designation.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Designation Name</label>
												<input type="text" class="form-control">
											</div>
										</div>		
										<div class="input-blocks m-0">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
												<span class="status-label">Status</span>
												<input type="checkbox" id="user5" class="check" checked="">
												<label for="user5" class="checktoggle">	</label>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Department -->

		<!-- Edit Department -->
		<div class="modal fade" id="edit-department">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Designation </h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">�</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="designation.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Designation  Name</label>
												<input type="text" class="form-control" value="Designer">
											</div>
										</div>		
										<div class="input-blocks m-0">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
												<span class="status-label">Status</span>
												<input type="checkbox" id="user3" class="check" checked="">
												<label for="user3" class="checktoggle">	</label>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Department -->

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
        <script src="js/jquery-3.7.1.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

        <!-- Feather Icon JS -->
		<script src="js/feather.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

		<!-- Datatable JS -->
		<script src="js/jquery.dataTables.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>
		<script src="js/dataTables.bootstrap5.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="js/bootstrap.bundle.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>
		
		<!-- Datetimepicker JS -->
		<script src="js/moment.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>
		<script src="js/bootstrap-datetimepicker.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

		<!-- Summernote JS -->
		<script src="js/summernote-bs4.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="js/select2.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

		<!-- Sweetalert 2 -->
		<script src="js/sweetalert2.all.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>
		<script src="js/sweetalerts.min.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

		<!-- Custom JS -->
				<script src="js/script.js" type="d5b962f6f71baaafb346d9b3-text/javascript"></script>

    <script src="js/rocket-loader.min.js" data-cf-settings="d5b962f6f71baaafb346d9b3-|49" defer=""></script>
</body></html>