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
                <form action="./php/insertCustomLubricant.php" method="post">
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
                                                <div id="lubricantContainer">
                                                    <!-- Original Row -->
                                                    <div class="row lubricantRow">
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Custom Lubricant Type</label>
                                                                <input type="text" name="customLubType[]" class="form-control" placeholder="Enter Custom Lubricant Type">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Custom Lubricant Amount</label>
                                                                <input type="number" name="customLubPrice[]" class="form-control customLubricantAmount" value="0" min="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Discount (in %)</label>
                                                                <input type="number" name="customLubDis[]" class="form-control customLubricantDiscount" value="0" min="0" max="100">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Net Amount</label>
                                                                <input type="text" class="form-control customLubricantNetAmount" name="customLubNet[]" value="0" readonly>
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
																<input type="text" class="form-control customLabourNetAmount" name="customLabourNet[]" value="0">
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
																<input type="text" class="form-control customDentPaintNetAmount" name="customDentNet[]" value="0">
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
																<input type="text" class="form-control customSparePartsNetAmount" name="customSpareNet[]" value="0" readonly>
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

												<!-- Custom Spare Parts script -->
												<?php include './includes/customSparePartsScript.php' ?>
												<!-- /Custom Spare Parts script -->
											</div>
										</div>
									</div>
								</div>
							</div>
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