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
						<img src="assets/images/placeholder.jpg" alt="">
						<span><?php echo $_SESSION['user']['email']; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="myprofile.php"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
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
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $_SESSION['user']['email']; ?></span>
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
								
								<li>
									<a href="#"><i class="icon-user-plus"></i> <span>Users</span></a>
									<ul>
										<li><a href="#" >Add Users </a></li>
										<li><a href="#" >Manage Users</a></li>
									</ul>
								</li>
								
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
				
				
   


<?php


$result=selectUserDataFromDatabase($conn,$_SESSION['user']['email'],$_SESSION['user']['fname']);
// echo $result['id'];

if(isset($_POST['updatebtn'])){
    if(editUserInformation($conn,$_POST,$result['id'])){
        echo "Updated data please logout for the update";
        
    }else{
        redirect('myprofile.php');
    }
    }
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Display</title>
</head>
<body>

<form  method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Fill out the information</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
									
										<div class="form-group">
											<label>First Name</label>
											<input type="text" name="fname" class="form-control" value=<?php echo $result['fname'];?> placeholder="Enter first name">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="lname" class="form-control" value=<?php echo $result['lname'];?> placeholder="Enter last name">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" class="form-control" value=<?php echo $result['email'];?> placeholder="Enter email address">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" class="form-control" value=<?php echo $result['password'];?> placeholder="Enter password">
										</div>
										
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" name="phoneno" class="form-control" value=<?php echo $result['phoneno'];?> placeholder="Enter phone number">
										</div>

									  
					
										<div class="text-right">
											<button type="submit" name ="updatebtn" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
										</div>


										
									</div>
								</div>
							</form>
							<!-- /basic layout -->
						</div>
						<div class="col-md-3"></div>

						
					<!-- /vertical form options -->


					<!-- Centered forms -->
					

						

										
									</div>
								</div>
							</form>

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
