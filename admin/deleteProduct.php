<?php
include 'layouts/header.php';
 $name=$_GET['ref'];
 if (deleteProduct($conn, $name)) {
 			//showMsg('User Deleted Successfully');
			 // echo "sucessfully Deleted";
			 redirect('manageProduct.php');
 } 
 
?>