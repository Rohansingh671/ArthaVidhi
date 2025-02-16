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
			
			<?php $page = 'invoice-report'; include './includes/sidebar.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Invoice Report	</h4>
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
									<div class="d-flex align-items-center">
										<a class="btn btn-filter" id="filter_search">
											<i data-feather="filter" class="filter-icon"></i>
											<span><img src="images/closes.svg" alt="img"></span>
										</a>
										
									</div>
									
								</div>
								<div class="form-sort">
									<i data-feather="sliders" class="info-img"></i>
									<select class="select">
										<option>Sort by Date</option>
										<option>25 9 23</option>
										<option>12 9 23</option>
									</select>
								</div>
							</div>
							<!-- /Filter -->
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="user" class="info-img"></i>
												<select class="select">
													<option>Choose Name</option>
													<option>Rose</option>
													<option>Kaitlin</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="stop-circle" class="info-img"></i>
												<select class="select">
													<option>Choose Status</option>
													<option>Paid</option>
													<option>Unpaid</option>
													<option>Overdue</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<div class="position-relative daterange-wraper">
													<input type="text" class="form-control" name="datetimes" placeholder="From Date - To Date">
													<i data-feather="calendar" class="feather-14 info-img"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
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
											<th>Invoice No</th>
											<th>Customer</th>
											<th>Due Date</th>
											<th>Amount</th>
											<th>Paid</th>
											<th>Amount Due</th>
											<th>Status</th>
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
											<td>INV001</td>
											<td>Thomas</td>
											<td>19 Jan 2023</td>
											<td>$1000</td>
											<td>$1000</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV002</td>
											<td>Rose</td>
											<td>25 Jan 2023</td>
											<td>$1500</td>
											<td>$0.00</td>
											<td>$1500</td>
											<td><span class="badge badge-linedanger">Unpaid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV003</td>
											<td>Benjamin</td>
											<td>05 Feb 2023</td>
											<td>$1800</td>
											<td>$1800</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV004</td>
											<td>Kaitlin</td>
											<td>15 Feb 2023</td>
											<td>$2000</td>
											<td>$1000</td>
											<td>$1000</td>
											<td><span class="badge badges-warning">Overdue</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV005</td>
											<td>Lilly</td>
											<td>18 Mar 2023</td>
											<td>$800</td>
											<td>$800</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV006</td>
											<td>Freda</td>
											<td>24 Mar 2023</td>
											<td>$750</td>
											<td>$0.00</td>
											<td>$750</td>
											<td><span class="badge badge-linedanger">Unpaid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV007</td>
											<td>Alwin</td>
											<td>12 Apr 2023</td>
											<td>$1300</td>
											<td>$1300</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV008</td>
											<td>Maybelle</td>
											<td>24 Apr 2023</td>
											<td>$1100</td>
											<td>$1100</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV009</td>
											<td>Ellen</td>
											<td>03 May 2023</td>
											<td>$2300</td>
											<td>$2300</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV010</td>
											<td>Grace</td>
											<td>29 May 2023</td>
											<td>$1700</td>
											<td>$1700</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
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
</body></html>