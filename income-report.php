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
			
			<?php $page = 'income-report'; include './includes/sidebar.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header justify-content-between">
						<div class="page-title">
							<h4>Income Report</h4>
							<h6>Manage your Income</h6>
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
										<a href="" class="me-3 layout-box"><i data-feather="layout" class="feather-search"></i></a>
									</div>
									
								</div>
								<div class="form-sort">
									<i data-feather="sliders" class="info-img"></i>
									<select class="select">
										<option>Sort by Date</option>
										<option>10 09 23</option>
										<option>17 09 23</option>
									</select>
								</div>
							</div>
							<!-- /Filter -->
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="zap" class="info-img"></i>
												<select class="select">
													<option>Choose Category</option>
													<option>Printing</option>
													<option>Travel</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="user" class="info-img"></i>
												<select class="select">
													<option>Created by</option>
													<option>Susan Lopez</option>
													<option>Russell Belle</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="credit-card" class="info-img"></i>
												<select class="select">
													<option>Payment Method</option>
													<option>Paypal</option>
													<option>Stripe</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<div class="position-relative daterange-wraper">
													<input type="text" class="form-control" name="datetimes" placeholder="From Date - To Date">
													<i data-feather="calendar" class="feather-14 info-img"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6 col-12 ms-auto">
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
											<th>Date</th>
											<th>Income Category</th>
											<th>User</th>
											<th>Payment Method</th>
											<th>Amount</th>
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
											<td>01 Jan 2024</td>
											<td>Printing</td>
											<td class="userimgname">
												<a href="javascript:void(0);" class="product-img">
													<img src="images/user-01.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">Mitchum Daniel</a>
											</td>
											<td class="payment-info">
												<a href="javascript:void(0);"> <img src="images/pay.svg" alt="Pay"> </a>
											</td>
											<td>$21,144</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>14 Jan 2024</td>
											<td>Utilities</td>
											<td class="userimgname">
												<a href="javascript:void(0);" class="product-img">
													<img src="images/user-02.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">Susan Lopez</a>
											</td>
											<td class="payment-info">
												<a href="javascript:void(0);"> <img src="images/stripe.svg" alt="Pay"> </a>
											</td>
											<td>$17,477</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>25 Jan 2024</td>
											<td>Travel</td>
											<td class="userimgname">
												<a href="javascript:void(0);" class="product-img">
													<img src="images/user-03.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">Robert Grossman</a>
											</td>
											<td class="payment-info">
												<a href="javascript:void(0);"> <img src="images/razorpay.svg" alt="Pay"> </a>
											</td>
											<td>$22,744</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>01 May 2024</td>
											<td>Purchase</td>
											<td class="userimgname">
												<a href="javascript:void(0);" class="product-img">
													<img src="images/user-04.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">Russell Belle</a>
											</td>
											<td class="payment-info">
												<a href="javascript:void(0);"> <img src="images/stripe.svg" alt="Pay"> </a>
											</td>
											<td>$20,474</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>14 Oct 2024</td>
											<td>Printing</td>
											<td class="userimgname">
												<a href="javascript:void(0);" class="product-img">
													<img src="images/user-05.jpg" alt="product">
												</a>
												<a href="javascript:void(0);">Edward K. Muniz</a>
											</td>
											<td class="payment-info">
												<a href="javascript:void(0);"> <img src="images/pay.svg" alt="Pay"> </a>
											</td>
											<td>$14,174</td>
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
		<div class="customizer-links" id="setdata">
			<ul class="sticky-sidebar">
				<li class="sidebar-icons">
					<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Theme">
						<i data-feather="settings" class="feather-five"></i>
					</a>
				</li>
			</ul>
		</div>

		<!-- /Main Wrapper -->
		 
		<!-- jQuery -->
        <script src="js/jquery-3.7.1.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

        <!-- Feather Icon JS -->
		<script src="js/feather.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

		<!-- Datatable JS -->
		<script src="js/jquery.dataTables.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>
		<script src="js/dataTables.bootstrap5.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="js/bootstrap.bundle.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

		<!-- Datetimepicker JS -->
		<script src="js/moment.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>
		<script src="js/bootstrap-datetimepicker.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

		<!-- Daterangepikcer JS -->
		<script src="js/moment.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>
		<script src="js/daterangepicker.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="js/select2.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

		<!-- Sweetalert 2 -->
		<script src="js/sweetalert2.all.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>
		<script src="js/sweetalerts.min.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

		<!-- Custom JS -->
<script src="js/script.js" type="0d226cf3255b0326e04c751f-text/javascript"></script>

	
    <script src="js/rocket-loader.min.js" data-cf-settings="0d226cf3255b0326e04c751f-|49" defer=""></script>
</body></html>