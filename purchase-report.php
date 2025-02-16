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
			
			<?php $page = 'purchase-report'; include './includes/sidebar.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Purchase Report</h4>
								<h6>Manage Your Purchase Report</h6>
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
										<div class="col-lg-3">
											<div class="input-blocks">
												<i data-feather="box" class="info-img"></i>
												<select class="select">
													<option>Choose Product</option>
													<option>Bold V3.2</option>
													<option>Nike Jordan</option>
												</select>
											</div>
										</div>
										<div class="col-lg-9 col-sm-6 col-12">
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
											<th>Product Name</th>
											<th>Purchase Amount</th>
											<th>Purchase Qty</th>
											<th>Instock Qty</th>
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
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/stock-img-01.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Lenovo 3rd Generation</a>
											</td>
											<td>$5000</td>
											<td>500</td>
											<td>100</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/stock-img-06.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Bold V3.2</a>
											</td>
											<td>$1000</td>
											<td>200</td>
											<td>150</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/stock-img-02.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Nike Jordan</a>
											</td>
											<td>$2000</td>
											<td>350</td>
											<td>200</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/stock-img-03.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Apple Series 5 Watch</a>
											</td>
											<td>$500</td>
											<td>120</td>
											<td>50</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/stock-img-04.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Amazon Echo Dot</a>
											</td>
											<td>$100</td>
											<td>400</td>
											<td>320</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/stock-img-05.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Lobar Handy</a>
											</td>
											<td>$1500</td>
											<td>170</td>
											<td>80</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/expire-product-01.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Red Premium Handy</a>
											</td>
											<td>$800</td>
											<td>320</td>
											<td>180</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/expire-product-02.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Iphone 14 Pro</a>
											</td>
											<td>$1200</td>
											<td>270</td>
											<td>120</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/expire-product-03.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Black Slim 200</a>
											</td>
											<td>$600</td>
											<td>180</td>
											<td>70</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="productimgname">
												<div class="view-product me-2">
													<a href="javascript:void(0);">
														<img src="images/expire-product-04.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Woodcraft Sandal</a>
											</td>
											<td>$300</td>
											<td>450</td>
											<td>300</td>
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
        <script src="js/jquery-3.7.1.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

        <!-- Feather Icon JS -->
		<script src="js/feather.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

		<!-- Datatable JS -->
		<script src="js/jquery.dataTables.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>
		<script src="js/dataTables.bootstrap5.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

		<!-- Datetimepicker JS -->
		<script src="js/moment.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>
		<script src="js/bootstrap-datetimepicker.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="js/bootstrap.bundle.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

		<!-- Summernote JS -->
	    <script src="js/summernote-bs4.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="js/select2.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

		<!-- Sweetalert 2 -->
		<script src="js/sweetalert2.all.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>
		<script src="js/sweetalerts.min.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

		<!-- Custom JS -->
		<script src="js/script.js" type="6c23f8a44786029de95b49ab-text/javascript"></script>

	
    <script src="js/rocket-loader.min.js" data-cf-settings="6c23f8a44786029de95b49ab-|49" defer=""></script>
</body></html>