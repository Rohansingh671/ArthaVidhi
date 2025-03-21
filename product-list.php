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

		<?php $page = 'product-list';
		include './includes/sidebar.php'; ?>

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>JobCard List</h4>
							<h6>Manage your JobCards</h6>
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
						<a href="add-product.php" class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i>Add New JobCard</a>
					</div>
					<div class="page-btn import">
						<a href="#" class="btn btn-added color" data-bs-toggle="modal" data-bs-target="#view-notes"><i data-feather="download" class="me-2"></i>Import JobCard</a>
					</div>
				</div>

				<!-- /product list -->
				<div class="card table-list-card">
					<div class="card-body">
						<div class="table-top">
							<div class="search-set">
								<div class="search-input">
									<a href="javascript:void(0);" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
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
									<option>14 09 23</option>
									<option>11 09 23</option>
								</select>
							</div>
						</div>
						<!-- /Filter -->
						<div hidden class="card mb-0" id="filter_inputs">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-lg-12 col-sm-12">
										<div class="row">
											<div class="col-lg-2 col-sm-6 col-12">
												<div class="input-blocks">
													<i data-feather="box" class="info-img"></i>
													<select class="select">
														<option>Choose Product</option>
														<option>
															Lenovo 3rd Generation</option>
														<option>Nike Jordan</option>
													</select>
												</div>
											</div>
											<div class="col-lg-2 col-sm-6 col-12">
												<div class="input-blocks">
													<i data-feather="stop-circle" class="info-img"></i>
													<select class="select">
														<option>Choose Categroy</option>
														<option>Laptop</option>
														<option>Shoe</option>
													</select>
												</div>
											</div>

											<div class="col-lg-2 col-sm-6 col-12">
												<div class="input-blocks">
													<i data-feather="git-merge" class="info-img"></i>
													<select class="select">
														<option>Choose Sub Category</option>
														<option>Computers</option>
														<option>Fruits</option>
													</select>
												</div>
											</div>

											<div class="col-lg-2 col-sm-6 col-12">
												<div class="input-blocks">
													<i data-feather="stop-circle" class="info-img"></i>
													<select class="select">
														<option>All Brand</option>
														<option>Lenovo</option>
														<option>Nike</option>
													</select>
												</div>
											</div>

											<div class="col-lg-2 col-sm-6 col-12">
												<div class="input-blocks">
													<i class="fas fa-money-bill info-img"></i>
													<select class="select">
														<option>Price</option>
														<option>$12500.00</option>
														<option>$12500.00</option>
													</select>
												</div>
											</div>
											<div class="col-lg-2 col-sm-6 col-12">
												<div class="input-blocks">
													<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Filter -->
						<div class="table-responsive product-list">
							<table class="table datanew">
								<thead>
									<tr>
										<th>Job No.</th>
										<th>Customer Name</th>
										<th>Contact</th>
										<th>Job Date</th>
										<th>Reg. No.</th>
										<th>vehicleBrand</th>
										<th>vehicleModel</th>
										<th>vehicleColour</th>
										<th>Millage</th>
										<th>Engine No.</th>
										<th>Vin. No.</th>
										<th>Payment Status</th>
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php

									require_once 'php/jobCardDataFromDatabase.php';
									foreach ($jobCards as $jobCard) {
									?>
										<tr>
											<td><a href="#" class="link-primary"><?php echo $jobCard['jobNumber']; ?></a></td>
											<td><?php echo $jobCard['customerName']; ?></td>
											<td><?php echo $jobCard['contactNumber']; ?></td>
											<td><?php echo $jobCard['jobDate']; ?></td>
											<td><?php echo $jobCard['registerNumber']; ?></td>
											<td><?php echo $jobCard['vehicleBrand']; ?></td>
											<td><?php echo $jobCard['vehicleModel']; ?></td>
											<td><?php echo $jobCard['vehicleColour']; ?></td>
											<td><?php echo $jobCard['millage']; ?></td>
											<td><?php echo $jobCard['engineNumber']; ?></td>
											<td><?php echo $jobCard['vinNumber']; ?></td>
											<td><?php echo $jobCard['paymentStatus']; ?></td>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 edit-icon p-2 print-pdf" href="jobCard-details.php?jobNumber=<?php echo $jobCard['jobNumber']; ?>">
														<i data-feather="printer" class="feather-eye"></i>
													</a>

													<a class="me-2 p-2" href="edit-jobCard.php?jobNumber=<?php echo $jobCard['jobNumber']; ?>">
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

	<!-- Add Payroll -->
	<div class="offcanvas offcanvas-end em-payrol-add" tabindex="-1" id="offcanvasRight-add">
		<div class="offcanvas-body p-0">
			<div class="page-wrapper-new">
				<div class="content">
					<div class="page-header justify-content-between">
						<div class="page-title">
							<h4>Create New Product</h4>
						</div>
						<div class="page-btn">
							<a href="javascript:void(0);" class="btn btn-added " data-bs-dismiss="offcanvas"><i data-feather="arrow-left" class="me-2"></i>Back to Product List</a>
						</div>
					</div>
					<!-- /add -->
					<div class="card mb-0">
						<div class="card-body add-product pb-0 ps-0 pe-0">
							<div class="accordion-card-one accordion" id="accordionExample">
								<div class="accordion-item">
									<div class="accordion-header" id="headingOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
											<div class="addproduct-icon">
												<h5><i data-feather="info" class="add-info"></i><span>Product Information</span></h5>
												<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
											</div>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="row">
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Store</label>
														<select class="select">
															<option>Choose</option>
															<option>Computers</option>
														</select>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Warehouse</label>
														<select class="select">
															<option>Choose</option>
															<option>Computers</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Product Name</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Slug</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="form-group add-product list">
														<label>SKU</label>
														<input type="text" class="form-control list" placeholder="Enter SKU">
														<button type="submit" class="btn btn-primaryadd">
															Generate Code
														</button>
													</div>
												</div>
											</div>
											<div class="addservice-info">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<div class="add-newplus">
																<label class="form-label">Category</label>
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-category"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
																		New</span></a>
															</div>
															<select class="select">
																<option>Choose</option>
																<option>Computers</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<label class="form-label">Choose Category</label>
															<select class="select">
																<option>Choose</option>
																<option>Computers</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<label class="form-label">Sub Category</label>
															<select class="select">
																<option>Choose</option>
																<option>Computers</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="add-product-new">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<div class="add-newplus">
																<label class="form-label">Brand</label>
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-brand"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
																		new</span></a>
															</div>
															<select class="select">
																<option>Choose</option>
																<option>Nike</option>
																<option>Bolt</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">

															<div class="add-newplus">
																<label class="form-label">Unit</label>
																<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-unit"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
																		New</span></a>
															</div>
															<select class="select">
																<option>Choose</option>
																<option>Kg</option>
																<option>Pc</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3 add-product">
															<label class="form-label">Selling Type</label>
															<select class="select">
																<option>Choose</option>
																<option>Computers</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Barcode Symbology</label>
														<select class="select">
															<option>Choose</option>
															<option>Code34</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-sm-6 col-12">
													<div class="form-group add-product list">
														<label>Item Code</label>
														<input type="text" class="form-control list" placeholder="Please Enter Item Code">
														<button type="submit" class="btn btn-primaryadd">
															Generate Code
														</button>
													</div>
												</div>
											</div>
											<div class="row">
												<!-- Editor -->
												<div class="col-lg-12">
													<div class="form-group summer-description-box transfer mb-3">
														<label>Description</label>
														<div id="summernote3">
														</div>
														<p>Maximum 60 Characters</p>
													</div>
												</div>
												<!-- /Editor -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample2">
								<div class="accordion-item">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
											<div class="text-editor add-list">
												<div class="addproduct-icon list icon">
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Pricing & Stocks</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<div class="form-group add-products">
												<label class="d-block">Product Type</label>
												<div class="single-pill-product">
													<ul class="nav nav-pills" id="pills-tab1" role="tablist">
														<li class="nav-item" role="presentation">
															<span class="custom_radio me-4 mb-0 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
																<input type="radio" class="form-control" name="payment">
																<span class="checkmark"></span> Single Product</span>
														</li>
														<li class="nav-item" role="presentation">
															<span class="custom_radio me-2 mb-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
																<input type="radio" class="form-control" name="sign">
																<span class="checkmark"></span> Variable Product</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="tab-content" id="pills-tabContent">
												<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
													<div class="row">
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Quantity</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Price</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Tax Type</label>
																<select class="select">
																	<option>Choose</option>
																	<option>Type</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Discount Type</label>
																<select class="select">
																	<option>Choose</option>
																	<option>Type</option>
																</select>
															</div>
														</div>
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Discount Value</label>
																<input type="text" placeholder="Choose">
															</div>
														</div>
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Quantity Alert</label>
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<div class="accordion-card-one accordion" id="accordionExample3">
														<div class="accordion-item">
															<div class="accordion-header" id="headingThree">
																<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree">
																	<div class="addproduct-icon list">
																		<h5><i data-feather="image" class="add-info"></i><span>Images</span></h5>
																		<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
																	</div>
																</div>
															</div>
															<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
																<div class="accordion-body">
																	<div class="text-editor add-list add">
																		<div class="col-lg-12">
																			<div class="add-choosen">
																				<div class="input-blocks">
																					<div class="image-upload">
																						<input type="file">
																						<div class="image-uploads">
																							<i data-feather="plus-circle" class="plus-down-add"></i>
																							<h4>Add Images</h4>
																						</div>
																					</div>
																				</div>
																				<div class="phone-img">
																					<img src="images/phone-add-2.png" alt="image">
																					<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
																				</div>

																				<div class="phone-img">
																					<img src="images/phone-add-1.png" alt="image">
																					<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
													<div class="row select-color-add">
														<div class="col-lg-6 col-sm-6 col-12">
															<div class="form-group add-product">
																<label>Variant Attribute</label>
																<div class="row">
																	<div class="col-lg-10 col-sm-10 col-10">
																		<select class="form-control variant-select select-option" id="colorSelect">
																			<option>Choose</option>
																			<option>Color</option>
																			<option value="red">Red</option>
																			<option value="black">Black</option>
																		</select>
																	</div>
																	<div class="col-lg-2 col-sm-2 col-2 ps-0">
																		<div class="add-icon tab">
																			<a class="btn btn-filter" data-bs-toggle="modal" data-bs-target="#add-units"><i class="feather feather-plus-circle"></i></a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="selected-hide-color" id="input-show">
																<div class="row align-items-center">
																	<div class="col-sm-10">
																		<div class="input-blocks">
																			<input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput" name="specialist" value="red, black">
																		</div>
																	</div>
																	<div class="col-sm-2">
																		<div class="form-group ">
																			<a href="javascript:void(0);" class="remove-color"><i class="far fa-trash-alt"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="modal-body-table variant-table" id="variant-table">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<th>Variantion</th>
																		<th>Variant Value</th>
																		<th>SKU</th>
																		<th>Quantity</th>
																		<th>Price</th>
																		<th class="no-sort">Action</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="color">
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="red">
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="1234">
																			</div>
																		</td>
																		<td>
																			<div class="product-quantity">
																				<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																				<input type="text" class="quntity-input" value="2">
																				<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="50000">
																			</div>
																		</td>
																		<td class="action-table-data">
																			<div class="edit-delete-action">
																				<div class="input-block add-lists">
																					<label class="checkboxs">
																						<input type="checkbox" checked="">
																						<span class="checkmarks"></span>
																					</label>
																				</div>
																				<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-variation">
																					<i data-feather="plus" class="feather-edit"></i>
																				</a>
																				<a class="confirm-text p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-variation">
																					<i data-feather="trash-2" class="feather-trash-2"></i>
																				</a>
																			</div>

																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="color">
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="black">
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="2345">
																			</div>
																		</td>
																		<td>
																			<div class="product-quantity">
																				<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																				<input type="text" class="quntity-input" value="3">
																				<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																			</div>
																		</td>
																		<td>
																			<div class="add-product">
																				<input type="text" class="form-control" value="50000">
																			</div>
																		</td>
																		<td class="action-table-data">
																			<div class="edit-delete-action">
																				<div class="input-block add-lists">
																					<label class="checkboxs">
																						<input type="checkbox" checked="">
																						<span class="checkmarks"></span>
																					</label>
																				</div>
																				<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
																					<i data-feather="plus" class="feather-edit"></i>
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
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample4">
								<div class="accordion-item">
									<div class="accordion-header" id="headingFour">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour">
											<div class="text-editor add-list">
												<div class="addproduct-icon list">
													<h5><i data-feather="list" class="add-info"></i><span>Custom Fields</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
										<div class="accordion-body">
											<div class="text-editor add-list add">
												<div class="custom-filed">
													<div class="input-block add-lists">
														<label class="checkboxs">
															<input type="checkbox">
															<span class="checkmarks"></span>Warranties
														</label>
														<label class="checkboxs">
															<input type="checkbox">
															<span class="checkmarks"></span>Manufacturer
														</label>
														<label class="checkboxs">
															<input type="checkbox">
															<span class="checkmarks"></span>Expiry
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="form-group add-product">
															<label>Discount Type</label>
															<select class="select">
																<option>Choose</option>
																<option>Type</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="form-group add-product">
															<label>Quantity Alert</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks">
															<label>Manufactured Date</label>

															<div class="input-groupicon calender-input">
																<i data-feather="calendar" class="info-img"></i>
																<input type="text" class="datetimepicker" placeholder="Choose Date">
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks">
															<label>Expiry On</label>

															<div class="input-groupicon calender-input">
																<i data-feather="calendar" class="info-img"></i>
																<input type="text" class="datetimepicker" placeholder="Choose Date">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-addproduct mb-4">
								<a href="product-list.php" class="btn btn-cancel">Reset</a>
								<a href="javascript:void(0);" class="btn btn-submit me-2">Save Product</a>
							</div>
						</div>
					</div>
					<!-- /add -->
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Payroll -->

	<!-- Add Adjustment -->
	<div class="modal fade" id="add-units">
		<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation Attribute</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Attribute Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Add Value</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<ul class="nav user-menu">
										<li class="nav-item nav-searchinputs">
											<div class="top-nav-search">
												<form action="#" class="dropdown">
													<div class="searchinputs list dropdown-toggle" id="dropdownMenuClickable2" data-bs-toggle="dropdown" data-bs-auto-close="false">
														<input type="text" placeholder="Search">
														<i data-feather="search" class="feather-16 icon"></i>
														<div class="search-addon d-none">
															<span><i data-feather="x-circle" class="feather-14"></i></span>
														</div>
													</div>
													<div class="dropdown-menu search-dropdown idea" aria-labelledby="dropdownMenuClickable">
														<div class="search-info">
															<p>Black </p>
															<p>Red</p>
															<p>Green</p>
															<p>S</p>
															<p>M</p>
														</div>
													</div>
													<!-- <a class="btn"  id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a> -->
												</form>
											</div>
										</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<div class="modal-footer-btn popup">
										<a href="javascript:void(0);" class="btn btn-cancel me-2">Cancel</a>
										<a href="javascript:void(0);" class="btn btn-submit">Create Adjustment</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Adjustment -->

	<!-- Add Category -->
	<div class="modal fade" id="add-units-category">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Category</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="units.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category -->

	<!-- Add Brand -->
	<div class="modal fade" id="add-units-brand">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Brand</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Brand</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="units.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Brand -->

	<!-- Add Unit -->
	<div class="modal fade" id="add-unit">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Unit</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Unit</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="units.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Unit -->

	<!-- Add Variatent -->
	<div class="modal fade" id="add-variation">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="modal-title-head people-cust-avatar">
								<h6>Variant Thumbnail</h6>
							</div>
							<div class="new-employee-field">
								<div class="profile-pic-upload">
									<div class="profile-pic">
										<span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
									</div>
									<div class="mb-3">
										<div class="image-upload mb-0">
											<input type="file">
											<div class="image-uploads">
												<h4>Change Image</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Barcode Symbology</label>
										<select class="select">
											<option>Choose</option>
											<option>Code34</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<div class="form-group add-product list">
											<label>Item Code</label>
											<input type="text" class="form-control list" value="455454478844">
											<button type="submit" class="btn btn-primaryadd">
												Generate Code
											</button>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group image-upload-down">
										<div class="image-upload download">
											<input type="file">
											<div class="image-uploads">
												<img src="images/download-img.png" alt="img">
												<h4>Drag and drop a <span>file to upload</span></h4>
											</div>
										</div>
									</div>
									<div class="accordion-body">
										<div class="text-editor add-list add">
											<div class="col-lg-12">
												<div class="add-choosen mb-3">
													<div class="phone-img ms-0">
														<img src="images/phone-add-2.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>

													<div class="phone-img">
														<img src="images/phone-add-1.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity Alert</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax Type</label>
										<select class="select">
											<option>Choose</option>
											<option>Direct</option>
											<option>Indirect</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax </label>
										<select class="select">
											<option>Choose</option>
											<option>Income Tax</option>
											<option>Service Tax</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div class="mb-3">
										<label class="form-label">Discount Type </label>
										<select class="select">
											<option>Choose</option>
											<option>Percentage</option>
											<option>Early Payment</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div>
										<label class="form-label">Discount Value</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>


							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="warehouse.php" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Variatent -->

	<!-- Import Product -->
	<div class="modal fade" id="view-notes">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Import Product</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">�</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="product-list.php">
								<div class="row">
									<div class="col-lg-4 col-sm-6 col-12">
										<div class="input-blocks">
											<label>Product</label>
											<select class="select">
												<option>Choose</option>
												<option>Bold V3.2</option>
												<option>Nike Jordan</option>
												<option>Iphone 14 Pro</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-12">
										<div class="input-blocks">
											<label>Category</label>
											<select class="select">
												<option>Choose</option>
												<option>Laptop</option>
												<option>Electronics</option>
												<option>Shoe</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-12">
										<div class="input-blocks">
											<label>Satus</label>
											<select class="select">
												<option>Choose</option>
												<option>Lenovo</option>
												<option>Bolt</option>
												<option>Nike</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6 col-12">
										<div class="row">
											<div>
												<div class="modal-footer-btn download-file">
													<a href="javascript:void(0)" class="btn btn-submit">Download Sample File</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-blocks image-upload-down">
											<label> Upload CSV File</label>
											<div class="image-upload download">
												<input type="file">
												<div class="image-uploads">
													<img src="images/download-img.png" alt="img">
													<h4>Drag and drop a <span>file to upload</span></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6 col-12">
										<div class="mb-3">
											<label class="form-label">Created by</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3 input-blocks">
										<label class="form-label">Description</label>
										<textarea class="form-control"></textarea>
										<p class="mt-1">Maximum 60 Characters</p>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Import Product -->
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
	<script src="js/jquery-3.7.1.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="js/feather.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="js/jquery.slimscroll.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Datatable JS -->
	<script src="js/jquery.dataTables.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>
	<script src="js/dataTables.bootstrap5.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="js/bootstrap.bundle.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Summernote JS -->
	<script src="js/summernote-bs4.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="js/select2.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Datetimepicker JS -->
	<script src="js/moment.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>
	<script src="js/bootstrap-datetimepicker.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="js/bootstrap-tagsinput.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Sweetalert 2 -->
	<script src="js/sweetalert2.all.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>
	<script src="js/sweetalerts.min.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!-- Custom JS -->


	<script src="js/script.js" type="ca2910de634c75fe4e91cff7-text/javascript"></script>

	<!--<script src="assets/js/theme-settings.js"></script>-->

	<script src="js/rocket-loader.min.js" data-cf-settings="ca2910de634c75fe4e91cff7-|49" defer=""></script>
</body>

</html>