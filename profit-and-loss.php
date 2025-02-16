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
			
			<?php $page = 'profit-and-loss'; include './includes/sidebar.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Profit & Loss</h4>
								<h6>Manage your Profit & Loss</h6>
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
					
					<div class="card table-list-card border-0 mb-0">
						<div class="card-body mb-3">
							<div class="table-top mb-0 profit-table-top">
								<div class="search-path profit-head ">
									<div class="input-blocks mb-0">
										<i data-feather="calendar" class="info-img"></i>
										<div class="input-groupicon">
											<input type="text" class="datetimepicker" placeholder="This Financial Year">
										</div>
									</div>
								</div>
								<div class="position-relative daterange-wraper input-blocks mb-0">
									<input type="text" name="datetimes" placeholder="From Month -  To Month " class="form-control">
									<i data-feather="calendar" class="feather-14 info-img"></i>
								</div>
								<div class="date-btn">
									<a href="javascript:void(0);" class="btn btn-secondary d-flex align-items-center"><i data-feather="database" class="feather-14 info-img me-2"></i>Display Date</a>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table profit-table">
							<thead class="profit-table-bg">
								<tr>
									<th class="no-sort">
									</th>
									<th>Jan 2023</th>
									<th>Feb 2023</th>
									<th>Mar 2023</th>
									<th>Apr 2023</th>
									<th>May 2023</th>
									<th>Jun 2023</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-heading">
									<td>Income</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>Sales</td>
									<td>$4,02,124.00</td>
									<td>$3,05,178.00</td>
									<td>$5,61,639.00</td>
									<td>$2,46,123.00</td>
									<td>$2,16,836.00</td>
									<td>$3,40,472.00</td>
								</tr>
								<tr>
									<td>Service</td>
									<td>$2,12,464.00</td>
									<td>$1,04,627.00</td>
									<td>$3,47,273.00</td>
									<td>$3,51,749.00</td>
									<td>$2,62,743.00</td>
									<td>$2,71,837.00</td>
								</tr>
								<tr>
									<td>Purchase Return</td>
									<td>$3,06,386.00</td>
									<td>$2,61,738.00</td>
									<td>$2,82,463.00</td>
									<td>$2,45,280.00</td>
									<td>$2,16,383.00</td>
									<td>$2,73,843.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>Gross Profit</td>
									<td>$1,45,547.00</td>
									<td>$2,62,813.00</td>
									<td>$2,74,832.00</td>
									<td>$2,52,725.00</td>
									<td>$2,57,248.00</td>
									<td>$2,94,270.00</td>
								</tr>
								<tr class="table-heading">
									<td>Expenses</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>Sales</td>
									<td>$4,02,124.00</td>
									<td>$3,05,178.00</td>
									<td>$5,61,639.00</td>
									<td>$2,46,123.00</td>
									<td>$2,16,836.00</td>
									<td>$3,40,472.00</td>
								</tr>
								<tr>
									<td>Purrchase</td>
									<td>$1,45,547.00</td>
									<td>$2,62,813.00</td>
									<td>$2,74,832.00</td>
									<td>$2,52,725.00</td>
									<td>$2,57,248.00</td>
									<td>$2,94,270.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>Sales Return</td>
									<td>$4,02,124.00</td>
									<td>$3,05,178.00</td>
									<td>$5,61,639.00</td>
									<td>$2,46,123.00</td>
									<td>$2,16,836.00</td>
									<td>$3,40,472.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>Total Expense</td>
									<td>$2,58,136.00</td>
									<td>$1,38,471.00</td>
									<td>$2,61,682.00</td>
									<td>$2,16,747.00</td>
									<td>$2,79,328.00</td>
									<td>$2,94,840.00</td>
								</tr>
								<tr class="profit-table-bg">
									<td>Net Profit</td>
									<td>$2,69,276.00</td>
									<td>$2,75,638.00</td>
									<td>$2,51,629.00</td>
									<td>$1,36,836.00</td>
									<td>$2,05,634.00</td>
									<td>$1,32,951.00</td>
								</tr>
							</tbody>
						</table>
					</div>
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
        <script src="js/jquery-3.7.1.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

        <!-- Feather Icon JS -->
		<script src="js/feather.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

		<!-- Datatable JS -->
		<!-- <script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap5.min.js"></script> -->

		<!-- Datetimepicker JS -->
		<script src="js/moment.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>
		<script src="js/bootstrap-datetimepicker.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="js/bootstrap.bundle.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

		<!-- Summernote JS -->
	    <script src="js/summernote-bs4.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

		<!-- Daterangepikcer JS -->
		<script src="js/moment.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>
		<script src="js/daterangepicker.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="js/select2.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

		<!-- Sweetalert 2 -->
		<script src="js/sweetalert2.all.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>
		<script src="js/sweetalerts.min.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

		<!-- Custom JS -->
<script src="js/script.js" type="4e24c84a127d27e58ee63145-text/javascript"></script>

	
    <script src="js/rocket-loader.min.js" data-cf-settings="4e24c84a127d27e58ee63145-|49" defer=""></script>
</body></html>