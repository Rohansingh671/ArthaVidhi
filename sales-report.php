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
			
			<?php $page = 'sales-report'; include './includes/sidebar.php'; ?>
			
			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Sales Report</h4>
								<h6>Manage Your Sales Report</h6>
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
										<div class="col-lg-3">
											<div class="input-blocks">
												<i data-feather="zap" class="info-img"></i>
												<select class="select">
													<option>Choose Category</option>
													<option>Accessories</option>
													<option>Shoe</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6 col-12">
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
											<th>SKU</th>
											<th>Category</th>
											<th>Brand</th>
											<th>Sold Qty</th>
											<th>Sold Amount</th>
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
											<td>PT001</td>
											<td>Computers</td>
											<td>N/D</td>
											<td>20</td>
											<td>$1000</td>
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
											<td>PT002</td>
											<td>Accessories</td>
											<td>N/D</td>
											<td>15</td>
											<td>$1200</td>
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
											<td>PT003</td>
											<td>Shoe</td>
											<td>N/D</td>
											<td>18</td>
											<td>$2000</td>
											<td>170</td>
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
											<td>PT004</td>
											<td>Accessories</td>
											<td>N/D</td>
											<td>25</td>
											<td>$300</td>
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
														<img src="images/stock-img-04.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Amazon Echo Dot</a>
											</td>
											<td>PT005</td>
											<td>Accessories</td>
											<td>N/D</td>
											<td>10</td>
											<td>$500</td>
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
														<img src="images/stock-img-05.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Lobar Handy</a>
											</td>
											<td>PT006</td>
											<td>Furnitures</td>
											<td>N/D</td>
											<td>28</td>
											<td>$200</td>
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
														<img src="images/expire-product-01.png" alt="product">
													</a>
												</div>
												<a href="javascript:void(0);">Red Premium Handy</a>
											</td>
											<td>PT007</td>
											<td>Accessories</td>
											<td>N/D</td>
											<td>30</td>
											<td>$120</td>
											<td>230</td>
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
											<td>PT008</td>
											<td>Phone</td>
											<td>N/D</td>
											<td>35</td>
											<td>$2300</td>
											<td>370</td>
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
											<td>PT009</td>
											<td>Furnitures</td>
											<td>N/D</td>
											<td>12</td>
											<td>$400</td>
											<td>260</td>
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
											<td>PT010</td>
											<td>Bags</td>
											<td>N/D</td>
											<td>38</td>
											<td>$230</td>
											<td>340</td>
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
        <script src="js/jquery-3.7.1.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

        <!-- Feather Icon JS -->
		<script src="js/feather.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

		<!-- Datatable JS -->
		<script src="js/jquery.dataTables.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>
		<script src="js/dataTables.bootstrap5.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

		<!-- Datetimepicker JS -->
		<script src="js/moment.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>
		<script src="js/bootstrap-datetimepicker.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="js/bootstrap.bundle.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

		<!-- Summernote JS -->
	    <script src="js/summernote-bs4.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="js/select2.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

		<!-- Sweetalert 2 -->
		<script src="js/sweetalert2.all.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>
		<script src="js/sweetalerts.min.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

		<!-- Custom JS -->
<script src="js/script.js" type="f4520432e6645fff15eb6db3-text/javascript"></script>

	
    <script src="js/rocket-loader.min.js" data-cf-settings="f4520432e6645fff15eb6db3-|49" defer=""></script>
</body></html>