<?php
include '../../app/call.php';
$msg="";
if(isset($_POST['track'])){
if(selectMyPendingOrderForTrack($conn,$_POST['email'],$_POST['id'])){
    $msg= "You'r order is in pending process.Please Receive the confirmation call.";
}
if(selectMyConfirmedOrderForTrack($conn,$_POST['email'],$_POST['id'])){
    $msg="You'r Order is Shipped.";
}
if(selectMyOrderForTrack($conn,$_POST['email'],$_POST['id'])){
    $msg="You'r Order is Delivered.Time for cooking delicious food";
}
}
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
	<link href="../UserView/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../UserView/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../UserView/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="../UserView/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="../UserView/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="../UserView/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="../UserView/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="../UserView/assets/js/core/app.js"></script>
	<script type="text/javascript" src="../UserView/assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

	
<!--  NAVBAR  -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- NAVBAR END  -->
</head>

<body>
 






	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

<!-- SIDEBAR HERE -->














			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				
				<!-- /page header -->
				<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Frontendhome.php">HamroTarkariBazar</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="inactive"><a href="Frontendhome.php">Home</a></li>
      
      <li class="inactive"><a href="today'sVegatablePriceinHTB.php">Today's Vegetable Price in hamroTarkariBazar</a></li>
	  <li  class="active"><a href="trackMyOrder.php">Track My order</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

				<!-- Content area -->
				
				
   



<!DOCTYPE html>
<html>
<head> 
	<title>Display</title>
</head>
<body>

<form method="POST">
<table>
<tr>
<td><label>Email</label></td>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td><label>Order Number</label></td>
<td><input type="text" name="id" required></td>
</tr>
<td><button type="submit" name="track">Track</button></td>
</table>
<?php echo $msg; ?>
			
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
