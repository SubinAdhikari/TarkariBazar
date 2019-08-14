

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
 
<!-- NAVEBAR HERE -->









<!-- <div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="Frontendhome.php"><img src="../UserView/layouts/logo.png" alt="HameroTarkariBazar" width="50%"></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				
			
				
			</ul>

			

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					

					
				</li>

				

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="../UserView/assets/images/user.png" alt="">
						
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						
						<li><a href="login.php"><i class="icon-switch2"></i>Login</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div> -->

























<?php 
// include 'layouts/header.php';
$serverName="localhost";
$userName="root";
$password="";
$dbName="userloginfortb";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn)
  die("connection Failed".mysqli_connect_error());


$query="SELECT image,link,quantity,title,description,update_date from tb_addproduct";

$result=mysqli_query($conn,$query);

$marqueeNoticeFetch="SELECT notice FROM marquee_info ORDER BY id DESC ";
$notice=mysqli_query($conn,$marqueeNoticeFetch);
$row=mysqli_fetch_assoc($notice);

?>

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
      <li class="active"><a href="Frontendhome.php">Home</a></li>
      
      <li><a href="today'sVegatablePriceinHTB.php">Today's Vegetable Price in hamroTarkariBazar</a></li>
	  <li><a href="trackMyOrder.php">Track My order</a></li>
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
<hr size="30" >
<div>
<span style="color:red;font-style:italic;background-color:white "><marquee><b><?php foreach($row as $key=>$rows): echo $rows; ?></b></marquee></span><?php endforeach; ?>
</div>
<hr size="30" >
<div>
<!-- <center><h1><span style="color:Red">OFFERS</span> </h1></center> -->

         <img   src="../UserView/ProductSaleimages/banner.png" width=100% height="300px" border="0"/>       
	  </div>
	  <hr size="30" >

	  
<!-- <h3>Please Use CTRL + F for filter sorry for the inconvenience caused</h3> -->
<?php
while($row=mysqli_fetch_assoc($result)){
	if($row['quantity']>=1){

	// echo $row['image'];  
	// $link=$row['link'];
	?>
	<div>
	

	<div class="card-deck"> 
<div class="col-sm-3">
  <div class="card">
  <a  href= "login.php "> <img class="card-img-top" src="../ProductImages/<?php echo $row['image']  ?>" alt="ProductName" height="200" width="100%" > 
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['title'] ?></h5>
      <p class="card-text"><?php echo $row['description'] ?></p>
	  <p class="card-text"><small class="text-muted"><?php echo $row['update_date'] ?></small></p></a>
	  
    </div>
  </div>
  </div>
  </div>










		<!-- <a  href= "Pages/<?php  echo $row['link'] ?> "> <img src="../ProductImages/<?php echo $row['image']  ?>" alt="#" height="200" width="100%"></a> -->
	</div>
<?php 
}
}
?>






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
