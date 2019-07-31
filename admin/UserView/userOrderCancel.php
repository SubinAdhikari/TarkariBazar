<?php
include '../../app/call.php';
//  echo "Order Confirmed";
//  redirect("index.php");

 $data=$_GET['ref'];
$values=selectConfirmedOrderDatabase($conn,$data);


$id=$values['id'];
    

$stmtdelete=$conn->prepare("DELETE FROM tb_addorder WHERE id=:id");
$stmtdelete->bindParam(':id', $data);
$stmtdelete->execute();
 

 redirect("home.php");

?>