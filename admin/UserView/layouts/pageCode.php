<?php

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
	<link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<script type="text/javascript" src="../assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

<!-- NAVEBAR HERE -->
<?php
include '../layouts/header.php';
include '../../../app/call.php';
$staticName=basename($_SERVER['PHP_SELF']);
$s=explode(".",$staticName);
// $t=$s[0].".".$s[1];

 
 

$msg="";
if(isset($_POST['orderSubmit'])){
	$quantity=$_POST['productquantity'];
	$price=$_POST['price'];
	$TotalPrice=$quantity*$price;
  if(insertOrder($conn,$_POST)){


	$ProductID=SelectIDForOrderConfirmation($conn,$_POST);
					
						
				
				


	$msg="Order Submitted";
  }else{
	  $msg="Order Decline";
  }
}



?>



	<!-- Page container -->
	<div class="page-container">



		<!-- Page content -->
		<div class="page-content">


<!-- SIDEBAR HERE -->
<?php include '../layouts/sidebar.php' ?>






			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<img   src="../ProductSaleimages/baner.png" width=100% height="300px" border="0"/>

				
				<!-- /page header -->


				<!-- Content area -->
				
				
   


				<?php if($msg=="Order Submitted"){	?>	<h1>Your Order has been Received</h1><img src="../layouts/ticklogo.png" height="100px" width="10%"/><p>Thanks for purchase</p><p>your order number is:<?php  foreach($ProductID as $value){
    echo $value, '<br>';
} ?></p>
<p>Your Total Price is:<?php echo $TotalPrice?></p>
<p>Make sure to receive the confirmation call</p> <?php } ?>

	<!-- <?php echo $msg; ?> -->
				<form class="form-horizontal" method="POST">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">ORDER</h5>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							<a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<fieldset>
											<legend class="text-semibold"><i class="icon-reading position-left"></i> Product Details</legend>

											<div class="form-group">
												<label class="col-lg-3 control-label">Product Name:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name="productname" value=" <?php echo $s[0] ?> " placeholder="Product Name" readonly>
												</div>
											</div>

											

											<div class="form-group">
												<label class="col-lg-3 control-label">Payment Method:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name="paymentMethod" value="Cash On Delivery" readonly>
												</div>
											</div>

										

											


											<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="userloginfortb";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn)
	die("connection Failed".mysqli_connect_error());



?>


<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php
	 $staticName=basename($_SERVER['PHP_SELF']);
	 $NetPrice='';
// 	 $s=explode(".",$staticName);
// $t=$s[0].".".$s[1];
// echo $t;
	$query="SELECT * FROM tb_addproduct where link='$staticName' ";

	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result)){
		$length= $row['quantity'];
		$id=$row['id'];
		$price=$row['price'];
		

}
		?>


<div class="form-group">
												<label class="col-lg-3 control-label">Product ID:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name="product_id" value=" <?php echo $id ?> " placeholder="Product Name" readonly>
												</div>
											</div>


<div class="form-group">
<label class="col-lg-3 control-label">Product Quantity:</label>
<div class="col-lg-9">
												<select name="productquantity"  required  class="form-control">
									                            	<option></option>
<?php for($i=1;$i<=$length;$i++){ ?>
	<option value="<?php echo $i; ?>"><?php   echo $i; ?></option>
			<?php } ?>
		</select>
</div>
</div>

<div class="form-group">
												<label class="col-lg-3 control-label">Price per quantity:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name="price"  value="<?php echo $price ?>" readonly>
												</div>
											</div>


											


											<div class="form-group">
												<label class="col-lg-3 control-label">Order By:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name="orderby"  value="<?php echo $_SESSION['user']['email']; ?> " readonly>
												</div>
											</div>						

</body>
</html>




















											

											

											
										</fieldset>
									</div>

									<div class="col-md-6">
										<fieldset>
						                	<legend class="text-semibold"><i class="icon-truck position-left"></i> Shipping details</legend>

											<div class="form-group">
												<label class="col-lg-3 control-label">Your name:</label>
												<div class="col-lg-9">
													<div class="row">
														<div class="col-md-6">
															<input type="text" placeholder="First name" name="fname" class="form-control" required>
														</div>

														<div class="col-md-6">
															<input type="text" placeholder="Last name" name="lname" class="form-control" required>
														</div>
													</div>
												</div>
											</div>

											

											<div class="form-group">
												<label class="col-lg-3 control-label">Phone:</label>
												<div class="col-lg-9">
													<input type="number" name="phone"  class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Provision No:</label>
												<div class="col-lg-9">
													<div class="row">
														<div class="col-md-6">
															<div class="mb-15">
																<select name="state" required class="form-control">
									                            	<option></option>
									                                <option value="1">1</option> 
									                                <option value="2">2</option> 
									                                <option value="3">3</option> 
																	<option value="4">4</option> 
																	<option value="5">5</option> 
									                                <option value="6">6</option> 
									                                <option value="7">7</option> 
									                            </select>
								                            </div>

								                            <input type="text" placeholder="Municipality" name="municipality" class="form-control" required>
														</div>

														<div class="col-md-6">
															<input type="text" placeholder="City" name="city" class="form-control mb-15" required>
															<input type="text" placeholder="Area" name="area" class="form-control" required>
														</div>
													</div>
												</div>
											</div>

											

											
										</fieldset>
									</div>
								</div>

								<div class="text-right">
									<button type="submit" name="orderSubmit" class="btn btn-primary">Order<i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</div>
						</div>
					</form>

				


				






				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
