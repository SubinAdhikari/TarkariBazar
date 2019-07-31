

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
      
      <li class="active"><a href="today'sVegatablePriceinHTB.php">Today's Vegetable Price</a></li>
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

<center><h2><b>Product Price in HamroTarkariBazar</center></h2></b>
				<table border="1" height="100px"  width="100%"  >
				<thead>
				<tr>
					<th><center>SN</center></th>
					<th><center>Product Name</center></th>
					<th><center>Price per Quantity</center></th>
				</tr>
				</thead>
				<tbody> 

<?php
include '../../app/call.php';
$Price=selectTheProductPrice($conn);
$sn=1;
foreach($Price as $key =>$prices):


?>
<tr>
                                    <td><center><?php echo $sn;$sn++ ; ?></td>
									<td><center><?php echo $prices['title']; ?></center></td>
									<td><center><?php echo $prices['price']; ?></center></td>
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
