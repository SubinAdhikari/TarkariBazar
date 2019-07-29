			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/admin.png" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $_SESSION['admin']['fname']?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;HamroTarkariBazar
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-user"></i> <span>Admin</span></a>
									<ul>
										<li><a href="addAdmin.php">Add Admin</a></li>
										<li><a href="manageAdmin.php">Manage Admin </a></li>
									
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-truck"></i> <span>List of Delivered Order</span></a>
									<ul>
										<li><a href="deliveredlist.php">List</a></li>
										
									
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-user"></i> <span>List of Product</span></a>
									<ul>
										<li><a href="productlist.php">List</a></li>
										
									
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-user-plus"></i> <span>Users</span></a>
									<ul>
										<li><a href="addUser.php" >Add Users </a></li>
										<li><a href="manageUser.php" >Manage Users</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-user"></i> <span>Products</span></a>
									<ul>
										<li><a href="addProduct.php">Add Product</a></li>
										<li><a href="manageProduct.php">Manage Product </a></li>
									
									</ul>
								</li>
								
								
								
								<!-- /main -->




								

								

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->