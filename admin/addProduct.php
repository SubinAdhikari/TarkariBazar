

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
<?php include 'layouts/header.php';

if(isset($_POST['uploadbtn'])){

$serverName="localhost";
$userName="root";
$password="";
$dbName="userloginfortb"; 

$conn=mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn)
	die("connection Failed".mysqli_connect_error());

	if(isset($_POST['uploadbtn'])){


		$hrefLink=$_POST['link'];
		$quantity=$_POST['quantity'];
		$title=$_POST['title'];
		$description=$_POST['description'];
		$date=$_POST['update_date'];
		$price=$_POST['price'];
		$file=$_FILES['file']['name'];
		$temp_name=$_FILES['file']['tmp_name'];
		$path='ProductImages/'.$file;
	
	
		move_uploaded_file($temp_name, $path);
	
		$sqlQuery="INSERT INTO tb_addProduct (image,link,quantity,title,description,update_date,price) VALUES('$file','$hrefLink','$quantity','$title','$description','$date','$price') ";
		mysqli_query($conn,$sqlQuery);



// Create a page dynamically

		error_reporting(E_ALL);

$pagename = $hrefLink;

$newFileName = '../admin/UserView/Pages/'.$pagename;
$newFileContent = "<?php
include '../layouts/pageCode.php';
?>";

if (file_put_contents($newFileName, $newFileContent) !== false) {
    echo "File created (" . basename($newFileName) . ")";
} else {
    echo "Cannot create file (" . basename($newFileName) . ")";
}

		
	}
		
	}
?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

<!-- SIDEBAR HERE -->
<?php include 'layouts/sidebar.php' ?>

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="invoice.php" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
                
                
                <!DOCTYPE html>
<html>
<head> 
	<title>File Upload</title>
</head>
<body>
<table border='0' cellspacing="0px" cellpadding="0px">
	<form method="POST" enctype="multipart/form-data">
	<tr>
	    <td>Link:</td><td><input type="text" name="link" required/></td></tr>
		<tr>
			<td>Quantity:</td><td><input type="text" name="quantity" required/></td></tr>
		<tr>
			<td>Title:</td><td><input type="text" name="title" required/></td></tr>
		<tr>
			<td>Description:</td><td><textArea name="description"></textArea></td> </tr>
		<tr>
			<td>Update Date:</td><td><input type="date" name="update_date" required/></td></tr>
		<tr>
			<td>Price Per Kg:</td><td><input type="text" name="price" required/></td></tr>


     



		<tr><td><input type="file" name="file" required/></td>
		<td><button type="submit" name="uploadbtn">Upload</button></td></tr>
	</form>
	<table border='1' cellspacing="0px" cellpadding="0px">

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
