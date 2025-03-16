<!DOCTYPE html>
<html lang="en">
<?php include './includes/head.php'; ?>

<body>

	<div id="global-loader">
		<div class="whirly-loader"> </div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include './includes/navbar.php'; ?>

		<?php $page = 'add-product';
		include './includes/sidebar.php'; ?>
		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>New Job Card</h4>
							<h6>Create new JobCard</h6>
						</div>
					</div>
					<ul class="table-top-head">
						<li>
							<div class="page-btn">
								<a href="product-list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to JobCards</a>
							</div>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
						</li>
					</ul>

				</div>
				<form action="php/insert_lubricants.php" method="post">
					<div class="card">
						<div class="card-body add-product pb-0">
							<div class="accordion-card-one accordion" id="accordionExample2">
								<div class="accordion-item">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
											<div class="text-editor add-list">
												<div class="addproduct-icon list icon">
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Lubricant Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<div class="input-blocks add-products">
												<!-- First Row -->
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Second Row (Initially Hidden) -->
												<div class="row" id="secondRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType1" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan1" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice1" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis1" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet1" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton2" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Third Row (Initially Hidden) -->
												<div class="row" id="thirdRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType3" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan3" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice3" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis3" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet3" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton3" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Fourth Row (Initially Hidden) -->
												<div class="row" id="fourthRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType4" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan4" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice4" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis4" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet4" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton4" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Fifth Row (Initially Hidden) -->
												<div class="row" id="fifthRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType5" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan5" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice5" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis5" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet5" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton5" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Sixth Row (Initially Hidden) -->
												<div class="row" id="sixthRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType6" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan6" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice6" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis6" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet6" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton6" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Seventh Row (Initially Hidden) -->
												<div class="row" id="seventhRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType7" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan7" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice7" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis7" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet7" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton7" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Eighth Row (Initially Hidden) -->
												<div class="row" id="eighthRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType8" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan8" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice8" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis8" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet8" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton8" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Nineth Row (Initially Hidden) -->
												<div class="row" id="ninethRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType9" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan9" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice9" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis9" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet9" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButton9" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Tenth Row (Initially Hidden) -->
												<div class="row" id="tenthRow" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Lubricant Type</label>
															<input type="text" name="lubType10" class="lubricantSearch form-control" placeholder="Search Lubricant">
															<div class="lubricantSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="lubQuan10" class="lubricantQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="lubPrice10" class="lubricantTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="lubDis10" class="lubricantDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="lubNet10" class="lubricantNetAmount form-control" value="0">
														</div>
													</div>
												</div>
												<!-- lubricant script -->
												<?php include './includes/lubricantScript.php' ?>
												<!-- /lubricant script -->

												<div id="lubricantContainer">
													<!-- Original Row -->
													<div class="row lubricantRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Lubricant Type</label>
																<input type="text" name="customLubType" class="form-control" placeholder="Enter Custom Lubricant Type">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Lubricant Amount</label>
																<input type="number" name="customLubPrice" class="form-control customLubricantAmount" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" name="customLubDis" class="form-control customLubricantDiscount" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customLubricantNetAmount" name="customLubNet" value="0" disabled>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Toggle Button (Outside the row to avoid cloning) -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
													<button id="toggleCustomButton" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="lubricantBillAmount" value="0" disabled>
														<input type="hidden" id="totalCustomLubricant" value="0">
														<input type="hidden" id="totalLubricantAjax" value="0">
													</div>
												</div>
												<script>
													function updateFinalLubricantBillTotal() {
														let totalCustomLubricant = parseFloat(document.getElementById("totalCustomLubricant").value) || 0;
														let totalLubricantAjax = parseFloat(document.getElementById("totalLubricantAjax").value) || 0;

														let finalLubricantBillAmount = totalCustomLubricant + totalLubricantAjax;

														document.querySelector("[name='lubricantBillAmount']").value = finalLubricantBillAmount.toFixed(2);
													}
												</script>

												<!-- Custom Lubricant Details Script -->
												<?php include './includes/customLubricantDetailsScript.php' ?>
												<!-- /Custom Lubricant Details Script -->

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
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Labour Code Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<div class="input-blocks add-products">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- row second -->
												<div class="row" id="secondRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode1" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan1" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice1" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis1" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet1" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour2" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row second -->
												<!-- row third -->
												<div class="row" id="thirdRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode3" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan3" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice3" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis3" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet3" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour3" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row third -->
												<!-- row fourth -->
												<div class="row" id="fourthRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode4" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan4" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice4" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis4" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet4" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour4" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row fourth -->
												<!-- row fifth -->
												<div class="row" id="fifthRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode5" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan5" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice5" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis5" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet5" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour5" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row fifth -->
												<!-- row sixth -->
												<div class="row" id="sixthRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode6" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan6" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice6" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis6" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet6" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour6" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row sixth -->
												<!-- row seventh -->
												<div class="row" id="seventhRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode7" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan7" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice7" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis7" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet7" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour7" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row seventh -->
												<!-- row eighth -->
												<div class="row" id="eighthRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode8" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan8" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice8" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis8" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet8" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour8" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row eighth -->
												<!-- row nineth -->
												<div class="row" id="ninethRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode9" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan9" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice9" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis9" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet9" class="labourNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button type="button" id="toggleRowButtonLabour9" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row nineth -->
												<!-- row tenth -->
												<div class="row" id="tenthRow2" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Labour Code</label>
															<input type="text" name="labourCode10" class="labourCodeSearch form-control" placeholder="Search Labour Code">
															<div class="labourSearchResults search-results"></div>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="labourQuan10" class="labourQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="labourPrice10" class="labourTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="labourDis10" class="labourDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="labourNet10" class="labourNetAmount form-control" value="0">
														</div>
													</div>
												</div>
												<!-- /row tenth -->
												<!-- labour script -->
												<?php include './includes/labourScript.php' ?>
												<!-- /labour script -->
												<div id="labourContainer">
													<!-- Original Row -->
													<div class="row labourRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Labour Code</label>
																<input type="text" name="customLabourCode[]" class="form-control" placeholder="Custom Labour Code">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Labour Amount</label>
																<input type="number" name="customLabourPrice[]" class="form-control customLabourAmount" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" name="customLabourDis[]" class="form-control customLabourDiscount" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customLabourNetAmount" name="customLabourNet[]" value="0" disabled>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteLabourRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Add Row Button -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
													<button id="addLabourRow" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="labourBillAmount" value="0" disabled>
														<input type="hidden" id="totalCustomLabour" value="0">
														<input type="hidden" id="totalLabourAjax" value="0">
													</div>
												</div>

												<script>
													function updateFinalLabourBillTotal() {
														let totalCustomLabour = parseFloat(document.getElementById("totalCustomLabour").value) || 0;
														let totalLabourAjax = parseFloat(document.getElementById("totalLabourAjax").value) || 0;

														let finalLabourBillAmount = totalCustomLabour + totalLabourAjax;

														document.querySelector("[name='labourBillAmount']").value = finalLabourBillAmount.toFixed(2);
													}
												</script>
												<!-- Custom labour Script -->
												<?php include './includes/customLabourScript.php' ?>
												<!-- /Custom Labour Script -->
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
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Dent/ Paint Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<div class="input-blocks add-products">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row second -->
												<div class="row" id="secondRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType1" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan1" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice1" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis1" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet1" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent2" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row third -->
												<div class="row" id="thirdRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType3" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan3" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice3" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis3" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet3" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent3" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row fourth -->
												<div class="row" id="fourthRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType4" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan4" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice4" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis4" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet4" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent4" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row fifth -->
												<div class="row" id="fifthRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType5" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan5" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice5" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis5" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet5" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent5" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row sixth -->
												<div class="row" id="sixthRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType6" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan6" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice6" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis6" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet6" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent6" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row seventh -->
												<div class="row" id="seventhRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType7" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan7" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice7" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis7" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet7" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent7" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row eighth -->
												<div class="row" id="eighthRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType8" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan8" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice8" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis8" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet8" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent8" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row nineth -->
												<div class="row" id="ninethRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType9" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan9" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice9" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis9" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet9" class="dentNetAmount form-control" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonDent9" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i> <!-- FontAwesome icon -->
														</button>
													</div>
												</div>
												<!-- row tenth -->
												<div class="row" id="tenthRow3" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Dent/ Paint Type</label>
															<input type="text" name="dentType10" class="dentTypeSearch form-control" placeholder="Search Dent/Paint">
															<div class="dentSearchResults search-results"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="dentQuan10" class="dentQuantity form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="dentPrice10" class="dentTotal form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="dentDis10" class="dentDiscount form-control" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="dentNet10" class="dentNetAmount form-control" value="0">
														</div>
													</div>
												</div>
												<!-- dent script -->
												<?php include './includes/dentScript.php' ?>
												<!-- /dent Script -->
												<div id="dentPaintContainer">
													<!-- Original Row -->
													<div class="row dentPaintRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Dent/ Paint Name</label>
																<input type="text" class="form-control" name="customDentType[]" placeholder="Custom Dent/ Paint Name">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Dent/ Paint Amount</label>
																<input type="number" class="form-control customDentPaintAmount" name="customDentPrice[]" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" class="form-control customDentPaintDiscount" name="customDentDis[]" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customDentPaintNetAmount" name="customDentNet[]" value="0" disabled>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteDentPaintRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Add Row Button -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
													<button id="addDentPaintRow" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="dentBillAmount" value="0" disabled>
														<input type="hidden" id="totalCustomDent" value="0">
														<input type="hidden" id="totalDentAjax" value="0">
													</div>
												</div>

												<script>
													function updateFinalDentBillTotal() {
														let totalCustomDent = parseFloat(document.getElementById("totalCustomDent").value) || 0;
														let totalDentAjax = parseFloat(document.getElementById("totalDentAjax").value) || 0;

														let finalDentBillAmount = totalCustomDent + totalDentAjax;

														document.querySelector("[name='dentBillAmount']").value = finalDentBillAmount.toFixed(2);
													}
												</script>


												<!-- Custom Dent/ Paint Script -->
												<?php include './includes/customDentPaintScript.php' ?>
												<!-- /Custom Dent/ Paint Script -->
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
													<h5><i data-feather="life-buoy" class="add-info"></i><span>Spare Parts Details</span></h5>
													<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<div class="input-blocks add-products">
												<!-- First Row -->
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- Second Row (Initially Hidden) -->
												<div class="row" id="secondRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType1" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan1" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice1" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis1" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet1" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare2" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row second -->
												<!-- Third Row (Initially Hidden) -->
												<div class="row" id="thirdRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType3" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan3" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice3" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis3" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet3" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare3" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row third -->
												<!-- fourth Row (Initially Hidden) -->
												<div class="row" id="fourthRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType4" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan4" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice4" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis4" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet4" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare4" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row fourth -->
												<!-- Fifth Row (Initially Hidden) -->
												<div class="row" id="fifthRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType5" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan5" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice5" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis5" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet5" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare5" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row fifth -->
												<!-- Sixth Row (Initially Hidden) -->
												<div class="row" id="sixthRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType6" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan6" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice6" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis6" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet6" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare6" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row sixth -->
												<!-- Seventh Row (Initially Hidden) -->
												<div class="row" id="seventhRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType7" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan7" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice7" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis7" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet7" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare7" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row seventh -->
												<!-- Eighth Row (Initially Hidden) -->
												<div class="row" id="eighthRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType8" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan8" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice8" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis8" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet8" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare8" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row eighth -->
												<!-- Nineth Row (Initially Hidden) -->
												<div class="row" id="ninethRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType9" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan9" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice9" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis9" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet9" class="form-control spareNetAmount" value="0">
														</div>
													</div>
													<!-- Toggle Button -->
													<div class="mb-3 col-lg-1 col-sm-6 col-12 d-flex align-items-end">
														<button id="toggleRowButtonSpare9" type="button" class="btn btn-primary btn-sm">
															<i class="fas fa-plus"></i>
														</button>
													</div>
												</div>
												<!-- /row nineth -->
												<!-- tenth Row (Initially Hidden) -->
												<div class="row" id="tenthRow4" style="display: none;">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Spare Parts Type</label>
															<input type="text" name="spareType10" class="form-control sparePartsSearch" placeholder="Search Parts">
															<div class="search-results spareSearchResults"></div> <!-- For search suggestions -->
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Quantity</label>
															<input type="number" name="spareQuan10" class="form-control spareQuantity" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Total Price</label>
															<input type="number" name="sparePrice10" class="form-control spareTotal" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Discount (in %)</label>
															<input type="number" name="spareDis10" class="form-control spareDiscount" value="0">
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks add-product">
															<label>Net Amount</label>
															<input type="number" name="spareNet10" class="form-control spareNetAmount" value="0">
														</div>
													</div>
												</div>
												<!-- /row tenth -->
												<style>
													.search-results {
														position: absolute;
														background: white;
														border: 1px solid #ccc;
														width: 100%;
														max-height: 200px;
														overflow-y: auto;
														display: none;
														z-index: 1000;
													}

													.search-results div {
														padding: 10px;
														cursor: pointer;
													}

													.search-results div:hover {
														background: #f0f0f0;
													}
												</style>
												<!-- spare script -->
												<?php include './includes/spareScript.php' ?>
												<!-- /spare script -->
												<div id="sparePartsContainer">
													<!-- Original Row -->
													<div class="row sparePartsRow">
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Spare Parts</label>
																<input type="text" class="form-control" name="customSpareType[]" placeholder="Custom Spare Parts">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Custom Spare Parts Amount</label>
																<input type="number" class="form-control customSparePartsAmount" name="customSparePrice[]" value="0" min="0">
															</div>
														</div>
														<div class="col-lg-3 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Discount (in %)</label>
																<input type="number" class="form-control customSparePartsDiscount" name="customSpareDis[]" value="0" min="0" max="100">
															</div>
														</div>
														<div class="col-lg-2 col-sm-6 col-12">
															<div class="input-blocks add-product">
																<label>Net Amount</label>
																<input type="text" class="form-control customSparePartsNetAmount" name="customSpareNet[]" value="0" disabled>
															</div>
														</div>
														<!-- Delete Button -->
														<div class="mt-4 col-lg-1 col-sm-6 col-12">
															<button type="button" class="btn btn-danger btn-sm deleteSparePartsRow">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</div>
												</div>

												<!-- Add Row Button -->
												<div class="mb-3 col-lg-1 col-sm-6 col-12">
													<button id="addSparePartsRow" type="button" class="btn btn-primary btn-sm">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-lg-5 col-sm-6 col-12">
													<div class="input-blocks add-product">
														<label>Total Net</label>
														<input type="number" class="form-control" name="billAmount" value="0" disabled>
														<input type="hidden" id="totalCustomSpare" value="0">
														<input type="hidden" id="totalSpareAjax" value="0">
													</div>
												</div>
												<script>
													function updateFinalBillTotal() {
														let totalSpareAjax = parseFloat(document.getElementById("totalSpareAjax").value) || 0;
														let totalCustomSpare = parseFloat(document.getElementById("totalCustomSpare").value) || 0;

														let finalBillAmount = totalSpareAjax + totalCustomSpare;

														document.querySelector("[name='billAmount']").value = finalBillAmount.toFixed(2);
													}
												</script>

												<!-- Custom Spare Parts script -->
												<?php include './includes/customSparePartsScript.php' ?>
												<!-- /Custom Spare Parts script -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-card-one accordion" id="accordionExample">
								<div class="accordion-item">
									<div class="accordion-header" id="headingOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
											<div class="addproduct-icon">
												<h5><i data-feather="credit-card" class="add-info"></i>
													<span>Billing Apartment</span>
												</h5>
												<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
											</div>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="row">
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Bill Amount</label>
														<input type="number" name="TotalBillAmount" class="form-control" value="0" disabled>

													</div>
												</div>
												<script>
													function updateFinalLubricantBillTotal() {
														let totalCustomLubricant = parseFloat(document.getElementById("totalCustomLubricant").value) || 0;
														let totalLubricantAjax = parseFloat(document.getElementById("totalLubricantAjax").value) || 0;

														let finalLubricantBillAmount = totalCustomLubricant + totalLubricantAjax;

														document.querySelector("[name='lubricantBillAmount']").value = finalLubricantBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateFinalLabourBillTotal() {
														let totalCustomLabour = parseFloat(document.getElementById("totalCustomLabour").value) || 0;
														let totalLabourAjax = parseFloat(document.getElementById("totalLabourAjax").value) || 0;

														let finalLabourBillAmount = totalCustomLabour + totalLabourAjax;

														document.querySelector("[name='labourBillAmount']").value = finalLabourBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateFinalDentBillTotal() {
														let totalCustomDent = parseFloat(document.getElementById("totalCustomDent").value) || 0;
														let totalDentAjax = parseFloat(document.getElementById("totalDentAjax").value) || 0;

														let finalDentBillAmount = totalCustomDent + totalDentAjax;

														document.querySelector("[name='dentBillAmount']").value = finalDentBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateFinalBillTotal() {
														let totalSpareAjax = parseFloat(document.getElementById("totalSpareAjax").value) || 0;
														let totalCustomSpare = parseFloat(document.getElementById("totalCustomSpare").value) || 0;

														let finalBillAmount = totalSpareAjax + totalCustomSpare;

														document.querySelector("[name='billAmount']").value = finalBillAmount.toFixed(2);
														updateTotalBillAmount(); // Update the grand total
													}

													function updateTotalBillAmount() {
														let finalLubricantBillAmount = parseFloat(document.querySelector("[name='lubricantBillAmount']").value) || 0;
														let finalLabourBillAmount = parseFloat(document.querySelector("[name='labourBillAmount']").value) || 0;
														let finalDentBillAmount = parseFloat(document.querySelector("[name='dentBillAmount']").value) || 0;
														let finalSpareBillAmount = parseFloat(document.querySelector("[name='billAmount']").value) || 0;

														let totalBillAmount = finalLubricantBillAmount + finalLabourBillAmount + finalDentBillAmount + finalSpareBillAmount;

														document.querySelector("[name='TotalBillAmount']").value = totalBillAmount.toFixed(2);
													}
												</script>

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">VAT Amount (13%)</label>
														<input type="number" name="vatAmount" class="form-control" value="0" disabled>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Discount (in Rs)</label>
														<input type="number" name="discountAmount" class="form-control" value="0">
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Net Total</label>
														<input type="number" name="netTotal" class="form-control" value="0" disabled>
													</div>
												</div>
												<div class="col-lg-9 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Remarks</label>
														<textarea name="billRemarks" class="form-control"></textarea>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Bill No.</label>
														<input type="text" name="billNumber" class="form-control" placeholder="Bill No.">
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

							<style>
								.search-results {
									position: absolute;
									background: white;
									border: 1px solid #ccc;
									width: 100%;
									max-height: 200px;
									overflow-y: auto;
									display: none;
									z-index: 1000;
								}

								.search-results div {
									padding: 10px;
									cursor: pointer;
								}

								.search-results div:hover {
									background: #f0f0f0;
								}
							</style>
							<div class="col-lg-12">
								<div class="btn-addproduct mb-4">
									<button type="button" class="btn btn-cancel me-2">Cancel</button>
									<button type="submit" class="btn btn-submit">Save Product</button>
								</div>
							</div>
						</div>
					</div>
				</form>
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
	<script src="js/jquery-3.7.1.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="js/feather.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="js/jquery.slimscroll.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Datatable JS -->
	<script src="js/jquery.dataTables.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>
	<script src="js/dataTables.bootstrap5.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="js/bootstrap.bundle.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="js/select2.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Datetimepicker JS -->
	<script src="js/moment.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>
	<script src="js/bootstrap-datetimepicker.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="js/bootstrap-tagsinput.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Sweetalert 2 -->
	<script src="js/sweetalert2.all.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>
	<script src="js/sweetalerts.min.js" type="37d26908286f2aa006113b6d-text/javascript"></script>

	<!-- Custom JS -->

	<script src="js/script.js" type="37d26908286f2aa006113b6d-text/javascript"></script>


	<script src="js/rocket-loader.min.js" data-cf-settings="37d26908286f2aa006113b6d-|49" defer=""></script>

	<style>
		.fuel-battery-indicator {
			display: flex;
			align-items: center;
			gap: 10px;
		}

		.fuel-battery-indicator input {
			width: 100%;
		}
	</style>


	<!-- Lubricant Details -->
	<?php include './includes/duplicateAjax.php'; ?>
	<!-- /Lubricant Details -->

	<!-- labour Details -->
	<?php include './includes/labourDetailsAjax.php'; ?>
	<!-- /labour Details -->

	<!-- Dent/Paint Details -->
	<?php include './includes/dentPaintAjax.php'; ?>
	<!-- /Dent/Paint Details -->

	<!-- Spare Parts -->
	<?php include './includes/spareAjax.php'; ?>
	<!-- /Spare Parts -->


</body>


</body>

</html>