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
			
			<?php $page = 'payslip'; include './includes/sidebar.php'; ?>
			
			<div class="page-wrapper">
				<div class="content mb-3">
					<div class="pay-slip-box" id="pay-slip">
						<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
							<div class="modal-content">
								<div class="page-wrapper-new p-0">
									<div class="contents">
										<div class="modal-header border-0 custom-modal-header">
											<div class="page-header mb-0 w-100">
												<div class="add-item payslip-list d-flex justify-content-between">
													<div class="page-title">
														<h4>Payslip</h4>
													</div>
													<div class="page-btn d-flex align-items-center mt-3 mt-md-0">
														<div class="d-block d-sm-flex align-items-center">
															<a href="#" class="btn btn-added me-2"><i data-feather="mail" class="me-2"></i> Send Email</a>
															<a href="#" class="btn btn-added downloader mt-3 mb-3 m-sm-0"><i data-feather="download" class="me-2"></i> Download</a>
															<a href="#" class="btn btn-added printer ms-2"><i data-feather="printer" class="me-2"></i> Print Barcode</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-body custom-modal-body">
											<div class="card mb-0">
												<div class="card-body border-0">
													<div class="payslip-month d-flex">
														<div class="slip-logo">
															<img src="images/logo-small.png" alt="Logo">
														</div>
														<div class="month-of-slip">
															<h4>Payslip for the Month of Sep 2023</h4>
														</div>
													</div>
			
													<div class="emp-details d-flex">
														<div class="emp-name-id">
															<h6>Emp Name : <span>Herald james</span></h6>
															<h6>Emp Id : <span>POS1234</span></h6>
														</div>
														<div class="emp-location-info">
															<h6>Location : <span>USA</span></h6>
															<h6>Pay Period : <span>Sep 2023</span></h6>
														</div>
													</div>
													
													<div class="row">
														<div class="table-responsive">
															<table class="w-100">
																<thead>
																	<tr class="paysilp-table-border">
																		<th colspan="2">Earnings</th>
																		<th colspan="2">Deduction</th>
																		</tr></thead><thead>
																			<tr class="paysilp-table-border">
																				<th>Pay Type</th>
																				<th>Amount</th>
																				<th>Pay Type</th>
																				<th>Amount</th>
																			</tr>
																		</thead>
																	
																
																<tbody class="paysilp-table-borders">
																	<tr>
																		<td>Basic Salary</td>
																		<td>$32,000</td>
																		<td>PF</td>
																		<td>0.00</td>
																	</tr>
																	<tr>
																		<td>HRA Allowance</td>
																		<td>0.00</td>
																		<td>Professional  Tax</td>
																		<td>0.00</td>
																	</tr>
																	<tr>
																		<td>Conveyance</td>
																		<td>0.00</td>
																		<td>TDS</td>
																		<td>0.00</td>
																	</tr>
																	<tr>
																		<td>Medical Allowance</td>
																		<td>0.00</td>
																		<td>Loans & Others</td>
																		<td>0.00</td>
																	</tr>
																	<tr>
																		<td>Bonus</td>
																		<td>0.00</td>
																		<td>Bonus</td>
																		<td>0.00</td>
																	</tr>
																	<tr class="payslip-border-bottom">
																		<th>Total Earnings</th>
																		<td>$32,000</td>
																		<th>Total Earnings</th>
																		<td>0.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="emp-details d-flex justify-content-start">
															<div class="emp-name-id pay-slip-salery">
																<h6>Net Salary</h6>
																<span>Inwords</span>
															</div>
															<div class="emp-location-info pay-slip-salery">
																<h6>$32,000</h6>
																<span>Thirty Two Thousand Only</span>
															</div>
														</div>
														<div class="product-name-slip text-center">
															<h4>DreamsPOS</h4>
															<p>81, Randall Drive,Hornchurch <br>
																RM126TA.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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
        <script src="js/jquery-3.7.1.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>

        <!-- Feather Icon JS -->
		<script src="js/feather.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>

		<!-- Datatable JS -->
		<script src="js/jquery.dataTables.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>
		<script src="js/dataTables.bootstrap5.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="js/bootstrap.bundle.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="js/select2.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>

		<!-- Sweetalert 2 -->
		<script src="js/sweetalert2.all.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>
		<script src="js/sweetalerts.min.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>

		<!-- Custom JS -->
<script src="js/script.js" type="d9e0606f108cd0b1f9bb9722-text/javascript"></script>

	
    <script src="js/rocket-loader.min.js" data-cf-settings="d9e0606f108cd0b1f9bb9722-|49" defer=""></script>
</body></html>