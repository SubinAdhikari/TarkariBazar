<?php
 include '../../app/call.php';
 session_start();




?>	

<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TarkariBazar</title> 

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

	

</head>

<body>
 
<!-- NAVEBAR HERE -->









<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="home.php"><img src="layouts/logo.png" alt="HameroTarkariBazar" width="50%"></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="assets/images/flags/de.png" alt=""> Deutsch</a></li>
						<li><a class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Українська</a></li>
						<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
						<li><a class="espana"><img src="assets/images/flags/es.png" alt=""> España</a></li>
						<li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
					</ul>
				</li>

				

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/user.png" alt="">
						<span><?php echo $_SESSION['user']['email']; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="myprofile.php"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="myorder.php"><i class="icon-coins"></i> My Order</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="Userlogout.php"><i class="icon-switch2"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>



















 







	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

<!-- SIDEBAR HERE -->












<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/user.png" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $_SESSION['user']['fname']; ?></span>
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
								<li class="active"><a href="home.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								
								<!-- <li>
									<a href="#"><i class="icon-user-plus"></i> <span>Users</span></a>
									<ul>
										<li><a href="#" >Add Users </a></li>
										<li><a href="#" >Manage Users</a></li>
									</ul>
								</li> -->
								
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Shop By Catagory</span></a>
									<ul>
										
										<li>
											<a href="#">फलफुल (FRUITS)</a>
											<ul>
												<li><a href="#">APPLE</a></li>
												<li><a href="#">AVOCADO</a></li>
											</ul>
										</li>
										<li>
											<a href="#">चामल (RICE)</a>
											<ul>
												<li><a href="#">BASMATI RICE</a></li>
												<li><a href="#">RICE 2</a></li>
												<li><a href="#">RICE 3</a></li>
											</ul>
										</li>
										<li><a href="#">1 column</a></li>
										<li><a href="#">2 columns</a></li>
										<li><a href="#">4 columns</a></li>
										
										<li><a href="#">Boxed layout</a></li>
										<li class="#"></li>
										<li><a href="#">Fixed main navbar</a></li>
										
									</ul>
								</li>
								
								<!-- /main -->




								

								

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>





















<?php 
// include 'layouts/sidebar.php'
 ?>

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				
				<!-- /page header -->


				<!-- Content area -->
				
				
   



<!DOCTYPE html>
<html>
<head> 
	<title>Display</title>
</head>
<body> 



<center><h2><b>MY ORDERS</center></h2></b>
				<table border="1" height="100px"  width="1100px"  >
				<thead>
				<tr>
					<th><center>Order Number</center></th>
					<th><center>Product Name</center></th>
					<th><center>Product Quantity</center></th>
					<th><center>Price</center></th>
					<th><center>Order By</center></th>
				</tr>
				</thead>
				<tbody> 
				<?php $orderDatas=selectMyOrderForUser($conn,$_SESSION['user']['email']);
				
								// dump($adminUsers);
								foreach ($orderDatas as $key => $orderData):
									# code...
																?>
								<tr>
									<td><center><?php echo $orderData['id']; ?></td>
									<td><center><?php echo $orderData['productname']; ?></center></td>
									<td><center><?php echo $orderData['productquantity']; ?></center></td>
									<td><center><?php echo $orderData['price']*$orderData['productquantity']; ?></center></td>
									<td><center><?php echo $orderData['order_by']; ?></center></td>
									
																
																
				
								</tr>
						<?php endforeach; ?>
							</tbody>

				
			
			</table>
	  

	

</body>
</html>





				


				






				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
