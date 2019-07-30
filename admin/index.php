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

	<!-- Table Check -->
	<script type='text/javascript' src='assets/plugins/datatables/jquery.dataTables.min.js'></script> 
	<link rel='stylesheet' type='text/css' href='assets/plugins/datatables/dataTables.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/form-toggle/toggles.css' /> 
	<!-- Table Check End -->

</head>

<body>

<!-- NAVEBAR HERE -->
<?php 

 include 'layouts/header.php';

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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Admin Panel</h4>
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
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">AdminPanel</li>
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
				


<!-- <a href="#" class="badge badge-warning"><h1><?php 

echo "hello it's place for quantity warning";


?></h1></a> -->



		
















<center><h2><b>ORDERS</center></h2></b>
				<table border="1" height="100px"  width="1100px"  >
				<thead>
				<tr>
					<th><center>Order Number</center></th>
					<th><center>Product Name</center></th>
					<th><center>Product ID</center></th>
					<th><center>Product Quantity</center></th>
					<th><center>Price</center></th>
					<th><center>Order By</center></th>
					<th><center>First Name</center></th>
					<th><center>Last Name</center></th>
					<th><center>Phone no</center></th>
					<th><center>State</center></th>
					<th><center>Municipality</center></th>
					<th><center>City</center></th>
					<th><center>Area</center></th>
					<th><center>Confirmation</center></th>
				</tr>
				</thead>
				<tbody> 
				<?php $orderDatas=selectOrderDatabase($conn);
				$sn=0;
								// dump($adminUsers);
								foreach ($orderDatas as $key => $orderData):
									# code...
																?>
								<tr>
									<td><center><?php echo $orderData['id']; ?></td>
									<td><center><?php echo $orderData['productname']; ?></center></td>
									<td><center><?php echo $orderData['product_id']; ?></center></td>
									<td><center><?php echo $orderData['productquantity']; ?></center></td>
									<td><center><?php echo $orderData['price']*$orderData['productquantity']; ?></center></td>
									<td><center><?php echo $orderData['order_by']; ?></center></td>
									<td><center><?php echo $orderData['fname']; ?></center></td>
									<td><center><?php echo $orderData['lname']; ?></center></td>
									<td><center><?php echo $orderData['phone']; ?></center></td>
									<td><center><?php echo $orderData['state']; ?></center></td>
									<td><center><?php echo $orderData['municipality']; ?></center></td>
									<td><center><?php echo $orderData['city']; ?></center></td>
									<td><center><?php echo $orderData['area']; ?></center></td>
									<td><center><a href="orderconfirm.php?ref=<?php echo $orderData['id'];?>" onclick="return confirm('Order Confirmed??');" class="btn btn-xs btn-success">
																	Confirm
																</a></center>
																
																
																<center><a href="orderdelete.php?ref=<?php echo $orderData['id'];?>" onclick="return confirm('Deleting Order??');" class="btn btn-xs btn-danger">
																	Delete
																</a></center>

																<center><a href="userOrderDecline.php?ref=<?php echo $orderData['order_by'];?>" onclick="return confirm('Order Decline??');" class="btn btn-xs btn-warning">
																	Decline
																</a></center>
																</td>
				
								</tr>
						<?php endforeach; ?>
							</tbody>

				
			
			</table>















			<center><h2><b>CONFIRMED ORDERS</center></h2></b>
				<table border="1" height="100px" width="1100px">
				<thead>
				<tr>
					<th><center>SN</center></th>
					<th><center>Product Name</center></th>
					<th><center>Product ID</center></th>
					<th><center>Product Quantity</center></th>
					<th><center>Price</center></th>
					<th><center>Order By</center></th>
					<th><center>First Name</center></th>
					<th><center>Last Name</center></th>
					<th><center>Phone no</center></th>
					<th><center>State</center></th>
					<th><center>Municipality</center></th>
					<th><center>City</center></th>
					<th><center>Area</center></th>
					<th><center>Confirmation</center></th>
				</tr>
				</thead>
				<tbody>
				<?php $orderDatas=selectOrderConfirmedDatabase($conn);
				$sn=0;
								// dump($adminUsers);
								foreach ($orderDatas as $key => $orderData):
									# code...
																?>
								<tr>
									<td><center><?php echo $orderData['id']; ?></td>
									<td><center><?php echo $orderData['productname']; ?></center></td>
									<td><center><?php echo $orderData['product_id']; ?></center></td>
									<td><center><?php echo $orderData['productquantity']; ?></center></td>
									<td><center><?php echo $orderData['price']*$orderData['productquantity']; ?></center></td>
									<td><center><?php echo $orderData['order_by']; ?></center></td>
									<td><center><?php echo $orderData['fname']; ?></center></td>
									<td><center><?php echo $orderData['lname']; ?></center></td>
									<td><center><?php echo $orderData['phone']; ?></center></td>
									<td><center><?php echo $orderData['state']; ?></center></td>
									<td><center><?php echo $orderData['municipality']; ?></center></td>
									<td><center><?php echo $orderData['city']; ?></center></td>
									<td><center><?php echo $orderData['area']; ?></center></td>
									<td><center><a href="orderDelivered.php?ref=<?php echo $orderData['id'];?>" onclick="return confirm('Order Delivered??');" class="btn btn-xs btn-success">
																	Delivered
																</a></center></a></center></td>
				
								</tr>
						<?php endforeach; ?>
							</tbody>

				
			
			</table>









			<!-- <legend><center><span style="color:red"><h4>Delivered ORDERS</h4></span></center></legend>
				<table border="1" height="100px" width="1100px">
				<thead>
				<tr>
					<th><center>SN</center></th>
					<th><center>Product Name</center></th>
					<th><center>Product ID</center></th>
					<th><center>Product Quantity</center></th>
					<th><center>First Name</center></th>
					<th><center>Last Name</center></th>
					<th><center>Phone no</center></th>
					<th><center>State</center></th>
					<th><center>Municipality</center></th>
					<th><center>City</center></th>
					<th><center>Area</center></th>
					<th><center>Confirmation</center></th>
				</tr>
				</thead>
				<tbody>
				<?php $orderDatas=selectOrderDeliveredDatabase($conn);
				$sn=0;
								// dump($adminUsers);
								foreach ($orderDatas as $key => $orderData):
									# code...
																?>
								<tr>
									<td><center><?php echo $orderData['id']; ?></td>
									<td><center><?php echo $orderData['productname']; ?></center></td>
									<td><center><?php echo $orderData['product_id']; ?></center></td>
									<td><center><?php echo $orderData['productquantity']; ?></center></td>
									<td><center><?php echo $orderData['fname']; ?></center></td>
									<td><center><?php echo $orderData['lname']; ?></center></td>
									<td><center><?php echo $orderData['phone']; ?></center></td>
									<td><center><?php echo $orderData['state']; ?></center></td>
									<td><center><?php echo $orderData['municipality']; ?></center></td>
									<td><center><?php echo $orderData['city']; ?></center></td>
									<td><center><?php echo $orderData['area']; ?></center></td>
									<td><center>Delivered</a></center></td>
				
								</tr>
						<?php endforeach; ?>
							</tbody>

				
			
			</table> -->











				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	

</body>
</html>
