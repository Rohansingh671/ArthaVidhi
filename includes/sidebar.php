<!-- Sidebar -->
<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Main</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="subdrop <?php if($page == 'adminDash' || $page == 'salesDash') {echo 'active';} ?>"><i data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="adminDash.php" class="<?php if($page == 'adminDash') {echo 'active';} ?>">Admin Dashboard</a></li>
										<li><a href="sales-dashboard.php" class="<?php if($page == 'salesDash') {echo 'active';} ?>">Sales Dashboard</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Inventory</h6>
							<ul>
								<li class="<?php if($page == 'product-list') {echo 'active';} ?>"><a href="product-list.php"><i data-feather="box"></i><span>Job-cards</span></a></li>
								<li class="<?php if($page == 'add-product') {echo 'active';} ?>"><a href="add-product.php"><i data-feather="plus-square"></i><span>JobCards Entry</span></a></li>
								<li hidden class="<?php if($page == 'expired-products') {echo 'active';} ?>"><a href="expired-products.php"><i data-feather="codesandbox"></i><span>Expired Products</span></a></li>
								<li hidden class="<?php if($page == 'low-stocks') {echo 'active';} ?>"><a href="low-stocks.php"><i data-feather="trending-down"></i><span>Low Stocks</span></a></li>
								<li class="<?php if($page == 'category-list') {echo 'active';} ?>"><a href="category-list.php"><i data-feather="codepen"></i><span>Category</span></a></li>
								<li class="<?php if($page == 'sub-categories') {echo 'active';} ?>"><a href="sub-categories.php"><i data-feather="speaker"></i><span>Sub Category</span></a></li>
								<li class="<?php if($page == 'brand-list') {echo 'active';} ?>"><a href="brand-list.php"><i data-feather="tag"></i><span>Create Jobs</span></a></li>
								<li class="<?php if($page == 'units') {echo 'active';} ?>"><a href="units.php"><i data-feather="speaker"></i><span>Units</span></a></li>
								<li hidden class="<?php if($page == 'varriant-attributes') {echo 'active';} ?>"><a href="varriant-attributes.php"><i data-feather="layers"></i><span>Variant Attributes</span></a></li>
								<li hidden class="<?php if($page == 'warranty') {echo 'active';} ?>"><a href="warranty.php"><i data-feather="bookmark"></i><span>Warranties</span></a></li>
								<li hidden class="<?php if($page == 'barcode') {echo 'active';} ?>"><a href="barcode.php"><i data-feather="align-justify"></i><span>Print Barcode</span></a></li>
								<li hidden class="<?php if($page == 'qrcode') {echo 'active';} ?>"><a href="qrcode.php"><i data-feather="maximize"></i><span>Print QR Code</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Stock</h6>
							<ul>
								<li class="<?php if($page == 'manage-stocks') {echo 'active';} ?>"><a href="manage-stocks.php"><i data-feather="package"></i><span>Manage Stock</span></a></li>
								<li class="<?php if($page == 'stock-adjustment') {echo 'active';} ?>"><a href="stock-adjustment.php"><i data-feather="clipboard"></i><span>Stock Adjustment</span></a></li>
								<li class="<?php if($page == 'stock-transfer') {echo 'active';} ?>"><a href="stock-transfer.php"><i data-feather="truck"></i><span>Stock Transfer</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Sales</h6>
							<ul>
								<li class="<?php if($page == 'sales-list') {echo 'active';} ?>"><a href="sales-list.php"><i data-feather="shopping-cart"></i><span>Sales</span></a></li>
								<li hidden class="<?php if($page == 'invoice-report') {echo 'active';} ?>"><a href="invoice-report.php"><i data-feather="file-text"></i><span>Invoices</span></a></li>
								<li class="<?php if($page == 'sales-returns') {echo 'active';} ?>"><a href="sales-returns.php"><i data-feather="copy"></i><span>Sales Return</span></a></li>
								<li class="<?php if($page == 'quotation-list.php') {echo 'active';} ?>"><a href="quotation-list.php"><i data-feather="save"></i><span>Quotation</span></a></li>
								<li hidden class="<?php if($page == 'pos') {echo 'active';} ?>"><a href="pos.php"><i data-feather="hard-drive"></i><span>POS</span></a></li>

							</ul>
						</li>
						<li hidden class="submenu-open">
							<h6 class="submenu-hdr">Promo</h6>
							<ul>
								<li><a href="coupons.php"><i data-feather="shopping-cart"></i><span>Coupons</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Purchases</h6>
							<ul>
								<li class="<?php if($page == 'purchase-list') {echo 'active';} ?>"><a href="purchase-list.php"><i data-feather="shopping-bag"></i><span>Purchases</span></a></li>
								<li class="<?php if($page == 'purchase-order-report') {echo 'active';} ?>"><a href="purchase-order-report.php"><i data-feather="file-minus"></i><span>Purchase Order</span></a></li>
								<li class="<?php if($page == 'purchase-returns') {echo 'active';} ?>"><a href="purchase-returns.php"><i data-feather="refresh-cw"></i><span>Purchase Return</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Finance & Accounts</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="subdrop <?php if($page == 'expense-list' || $page == 'expense-category') {echo 'active';} ?>"><i data-feather="file-text"></i><span>Expenses</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-list.php" class="<?php if($page == 'expense-list') {echo 'active';} ?>">Expenses</a></li>
										<li><a href="expense-category.php" class="<?php if($page == 'expense-category') {echo 'active';} ?>">Expense Category</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Peoples</h6>
							<ul>
								<li class="<?php if($page == 'customers') {echo 'active';} ?>"><a href="customers.php"><i data-feather="user"></i><span>Customers</span></a></li>
								<li class="<?php if($page == 'suppliers') {echo 'active';} ?>"><a href="suppliers.php"><i data-feather="users"></i><span>Suppliers</span></a></li>
								<li class="<?php if($page == 'store-list') {echo 'active';} ?>"><a href="store-list.php"><i data-feather="home"></i><span>Stores</span></a></li>
								<li class="<?php if($page == 'warehouse') {echo 'active';} ?>"><a href="warehouse.php"><i data-feather="archive"></i><span>Warehouses</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">HRM</h6>
							<ul>
								<li class="<?php if($page == 'employees-grid') {echo 'active';} ?>"><a href="employees-grid.php"><i data-feather="user"></i><span>Employees</span></a></li>
								<li class="<?php if($page == 'department-grid') {echo 'active';} ?>"><a href="department-grid.php"><i data-feather="users"></i><span>Departments</span></a></li>
								<li class="<?php if($page == 'designation') {echo 'active';} ?>"><a href="designation.php"><i data-feather="git-merge"></i><span>Designation</span></a></li>
								<li class="<?php if($page == 'shift') {echo 'active';} ?>"><a href="shift.php"><i data-feather="shuffle"></i><span>Shifts</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);" class="subdrop <?php if($page == 'payroll-list' || $page == 'payslip' ) {echo 'active';} ?>"><i data-feather="dollar-sign"></i><span>Payroll</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="payroll-list.php" class="<?php if($page == 'payroll-list') {echo 'active';} ?>">Employee Salary</a></li>
										<li><a href="payslip.php" class="<?php if($page == 'payslip') {echo 'active';} ?>">Payslip</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Reports</h6>
							<ul>
								<li class="<?php if($page == 'sales-report') {echo 'active';} ?>"><a href="sales-report.php"><i data-feather="bar-chart-2"></i><span>Sales Report</span></a></li>
								<li class="<?php if($page == 'purchase-report') {echo 'active';} ?>"><a href="purchase-report.php"><i data-feather="pie-chart"></i><span>Purchase report</span></a></li>
								<li class="<?php if($page == 'inventory-report') {echo 'active';} ?>"><a href="inventory-report.php"><i data-feather="inbox"></i><span>Inventory Report</span></a></li>
								<li class="<?php if($page == 'invoice-report') {echo 'active';} ?>"><a href="invoice-report.php"><i data-feather="file"></i><span>Invoice Report</span></a></li>
								<li class="<?php if($page == 'supplier-report') {echo 'active';} ?>"><a href="supplier-report.php"><i data-feather="user-check"></i><span>Supplier Report</span></a></li>
								<li class="<?php if($page == 'customer-report') {echo 'active';} ?>"><a href="customer-report.php"><i data-feather="user"></i><span>Customer Report</span></a></li>
								<li class="<?php if($page == 'expense-report') {echo 'active';} ?>"><a href="expense-report.php"><i data-feather="file"></i><span>Expense Report</span></a></li>
								<li class="<?php if($page == 'income-report') {echo 'active';} ?>"><a href="income-report.php"><i data-feather="bar-chart"></i><span>Income Report</span></a></li>
								<li class="<?php if($page == 'tax-reports') {echo 'active';} ?>"><a href="tax-reports.php"><i data-feather="database"></i><span>Tax Report</span></a></li>
								<li class="<?php if($page == 'profit-and-loss') {echo 'active';} ?>"><a href="profit-and-loss.php"><i data-feather="pie-chart"></i><span>Profit & Loss</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Sidebar -->
		<div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
					<aside id="aside" class="ui-aside">
						<ul class="tab nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-selected="true">
									<img src="images/menu-icon.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link active" href="#messages" id="messages-tab" data-bs-toggle="tab" data-bs-target="#product" role="tab" aria-selected="false">
									<img src="images/product.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sales" role="tab" aria-selected="false">
									<img src="images/sales1.svg" alt="">
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab" data-bs-target="#purchase" role="tab" aria-selected="true">
									<img src="images/purchase1.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab" data-bs-target="#user" role="tab" aria-selected="true">
									<img src="images/users1.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set2" id="set-tab2" data-bs-toggle="tab" data-bs-target="#employee" role="tab" aria-selected="true">
									<img src="images/calendars.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set3" id="set-tab3" data-bs-toggle="tab" data-bs-target="#report" role="tab" aria-selected="true">
									<img src="images/printer.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set4" id="set-tab4" data-bs-toggle="tab" data-bs-target="#document" role="tab" aria-selected="true">
									<i data-feather="file-minus"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set5" id="set-tab6" data-bs-toggle="tab" data-bs-target="#permission" role="tab" aria-selected="true">
									<i data-feather="file-text"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set6" id="set-tab5" data-bs-toggle="tab" data-bs-target="#settings" role="tab" aria-selected="true">
									<i data-feather="settings"></i>
								</a>
							</li>
						</ul>
					</aside>
					<div class="tab-content tab-content-four pt-2">
						<ul class="tab-pane" id="home" aria-labelledby="home-tab">
							<li class="submenu">
								<a href="javascript:void(0);"><span>Dashboard</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="index.php">Admin Dashboard</a></li>
									<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
								</ul>
							</li>
						</ul>
						<ul class="tab-pane active" id="product" aria-labelledby="messages-tab">
							<li><a href="product-list.php"><span>Products</span></a></li>
							<li><a href="add-product.php" class="active"><span>Create Product</span></a></li>
							<li><a href="expired-products.php"><span>Expired Products</span></a></li>
							<li><a href="low-stocks.php"><span>Low Stocks</span></a></li>
							<li><a href="category-list.php"><span>Category</span></a></li>
							<li><a href="sub-categories.php"><span>Sub Category</span></a></li>
							<li><a href="brand-list.php"><span>Brands</span></a></li>
							<li><a href="units.php"><span>Units</span></a></li>
							<li><a href="varriant-attributes.php"><span>Variant Attributes</span></a></li>
							<li><a href="warranty.php"><span>Warranties</span></a></li>
							<li><a href="barcode.php"><span>Print Barcode</span></a></li>
							<li><a href="qrcode.php"><span>Print QR Code</span></a></li>
						</ul>
						<ul class="tab-pane" id="sales" aria-labelledby="profile-tab">
							<li><a href="sales-list.php"><span>Sales</span></a></li>
							<li><a href="invoice-report.php"><span>Invoices</span></a></li>
							<li><a href="sales-returns.php"><span>Sales Return</span></a></li>
							<li><a href="quotation-list.php"><span>Quotation</span></a></li>
							<li><a href="pos.php"><span>POS</span></a></li>
							<li><a href="coupons.php"><span>Coupons</span></a></li>
						</ul>
						<ul class="tab-pane" id="purchase" aria-labelledby="report-tab">
							<li><a href="purchase-list.php"><span>Purchases</span></a></li>
							<li><a href="purchase-order-report.php"><span>Purchase Order</span></a></li>
							<li><a href="purchase-returns.php"><span>Purchase Return</span></a></li>
							<li><a href="manage-stocks.php"><span>Manage Stock</span></a></li>
							<li><a href="stock-adjustment.php"><span>Stock Adjustment</span></a></li>
							<li><a href="stock-transfer.php"><span>Stock Transfer</span></a></li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="expense-list.php">Expenses</a></li>
									<li><a href="expense-category.php">Expense Category</a></li>
								</ul>
							</li>

						</ul>
						<ul class="tab-pane" id="user" aria-labelledby="set-tab">

							<li><a href="customers.php"><span>Customers</span></a></li>
							<li><a href="suppliers.php"><span>Suppliers</span></a></li>
							<li><a href="store-list.php"><span>Stores</span></a></li>
							<li><a href="warehouse.php"><span>Warehouses</span></a></li>

						</ul>
						<ul class="tab-pane" id="employee" aria-labelledby="set-tab2">
							<li><a href="employees-grid.php"><span>Employees</span></a></li>
							<li><a href="department-grid.php"><span>Departments</span></a></li>
							<li><a href="designation.php"><span>Designation</span></a></li>
							<li><a href="shift.php"><span>Shifts</span></a></li>
							<li class="submenu">
								<a href="payroll-list.php"><span>Payroll</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="payroll-list.php">Employee Salary</a></li>
									<li><a href="payslip.php">Payslip</a></li>
								</ul>
							</li>
						</ul>
						<ul class="tab-pane" id="report" aria-labelledby="set-tab3">
							<li><a href="sales-report.php"><span>Sales Report</span></a></li>
							<li><a href="purchase-report.php"><span>Purchase report</span></a></li>
							<li><a href="inventory-report.php"><span>Inventory Report</span></a></li>
							<li><a href="invoice-report.php"><span>Invoice Report</span></a></li>
							<li><a href="supplier-report.php"><span>Supplier Report</span></a></li>
							<li><a href="customer-report.php"><span>Customer Report</span></a></li>
							<li><a href="expense-report.php"><span>Expense Report</span></a></li>
							<li><a href="income-report.php"><span>Income Report</span></a></li>
							<li><a href="tax-reports.php"><span>Tax Report</span></a></li>
							<li><a href="profit-and-loss.php"><span>Profit & Loss</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Sidebar -->
		<div class="sidebar horizontal-sidebar">
			<div id="sidebar-menu-3" class="sidebar-menu">
				<ul class="nav">
					<li class="submenu">
						<a href="index.php"><i data-feather="grid"></i><span> Main Menu</span> <span class="menu-arrow"></span></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Dashboard</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="index.php">Admin Dashboard</a></li>
									<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);" class="active subdrop"><img src="images/product.svg" alt="img"><span> Inventory </span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a href="product-list.php"><span>Products</span></a></li>
							<li><a href="add-product.php" class="active"><span>Create Product</span></a></li>
							<li><a href="expired-products.php"><span>Expired Products</span></a></li>
							<li><a href="low-stocks.php"><span>Low Stocks</span></a></li>
							<li><a href="category-list.php"><span>Category</span></a></li>
							<li><a href="sub-categories.php"><span>Sub Category</span></a></li>
							<li><a href="brand-list.php"><span>Brands</span></a></li>
							<li><a href="units.php"><span>Units</span></a></li>
							<li><a href="varriant-attributes.php"><span>Variant Attributes</span></a></li>
							<li><a href="warranty.php"><span>Warranties</span></a></li>
							<li><a href="barcode.php"><span>Print Barcode</span></a></li>
							<li><a href="qrcode.php"><span>Print QR Code</span></a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><img src="images/purchase1.svg" alt="img"><span>Sales & Purchase</span> <span class="menu-arrow"></span></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="sales-list.php"><span>Sales</span></a></li>
									<li><a href="invoice-report.php"><span>Invoices</span></a></li>
									<li><a href="sales-returns.php"><span>Sales Return</span></a></li>
									<li><a href="quotation-list.php"><span>Quotation</span></a></li>
									<li><a href="pos.php"><span>POS</span></a></li>
									<li><a href="coupons.php"><span>Coupons</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Purchase</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="purchase-list.php"><span>Purchases</span></a></li>
									<li><a href="purchase-order-report.php"><span>Purchase Order</span></a></li>
									<li><a href="purchase-returns.php"><span>Purchase Return</span></a></li>
									<li><a href="manage-stocks.php"><span>Manage Stock</span></a></li>
									<li><a href="stock-adjustment.php"><span>Stock Adjustment</span></a></li>
									<li><a href="stock-transfer.php"><span>Stock Transfer</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="expense-list.php">Expenses</a></li>
									<li><a href="expense-category.php">Expense Category</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><img src="images/users1.svg" alt="img"><span>User Management</span> <span class="menu-arrow"></span></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>People</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="customers.php"><span>Customers</span></a></li>
									<li><a href="suppliers.php"><span>Suppliers</span></a></li>
									<li><a href="store-list.php"><span>Stores</span></a></li>
									<li><a href="warehouse.php"><span>Warehouses</span></a></li>
								</ul>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><img src="images/printer.svg" alt="img"><span>Reports</span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a href="sales-report.php"><span>Sales Report</span></a></li>
							<li><a href="purchase-report.php"><span>Purchase report</span></a></li>
							<li><a href="inventory-report.php"><span>Inventory Report</span></a></li>
							<li><a href="invoice-report.php"><span>Invoice Report</span></a></li>
							<li><a href="supplier-report.php"><span>Supplier Report</span></a></li>
							<li><a href="customer-report.php"><span>Customer Report</span></a></li>
							<li><a href="expense-report.php"><span>Expense Report</span></a></li>
							<li><a href="income-report.php"><span>Income Report</span></a></li>
							<li><a href="tax-reports.php"><span>Tax Report</span></a></li>
							<li><a href="profit-and-loss.php"><span>Profit & Loss</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- /Sidebar -->
