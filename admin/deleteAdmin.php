<?php
include 'layouts/header.php';
 $name=$_GET['ref'];
 if (deleteAdmin($conn, $name)) {
 			//showMsg('User Deleted Successfully');
             // echo "sucessfully Deleted";
             redirect('manageAdmin.php');
 } 
 
?>