<?php
include '../app/call.php';
//  echo "Order Confirmed";
//  redirect("index.php");

 $data=$_GET['ref'];
$values=selectConfirmedOrderDatabase($conn,$data);


$id=$values['id'];
$productname=$values['productname'];
$productid=$values['product_id'];
$productquantity=$values['productquantity'];
$price=$values['price'];
$order_by=$values['order_by'];
$fname=$values['fname'];
$lname=$values['lname'];
$phone=$values['phone'];
$state=$values['state'];
$municipality=$values['municipality'];
$city=$values['city'];
$area=$values['area'];

	$stmtinsert=$conn->prepare("INSERT INTO tb_confirmorder (`id`,`productname`,`product_id`,`productquantity`,`price`,`order_by`,`fname`,`lname`,`phone`,`state`,`municipality`,`city`,`area`) VALUES (:id,:productname,:product_id,:productquantity,:price,:order_by,:fname, :lname, :phone, :state,:municipality,:city,:area)");
    $stmtinsert->bindParam(':id', $id);
    $stmtinsert->bindParam(':productname', $productname);
    $stmtinsert->bindParam(':product_id', $productid);
    $stmtinsert->bindParam(':productquantity', $productquantity);
    $stmtinsert->bindParam(':price', $price);
    $stmtinsert->bindParam(':order_by', $order_by);
	$stmtinsert->bindParam(':fname', $fname);
    $stmtinsert->bindParam(':lname', $lname);
    $stmtinsert->bindParam(':phone', $phone);
	$stmtinsert->bindParam(':state', $state);
	$stmtinsert->bindParam(':municipality', $municipality);
    $stmtinsert->bindParam(':city', $city);
    $stmtinsert->bindParam(':area', $area);
    $stmtinsert->execute();
    

$stmtdelete=$conn->prepare("DELETE FROM tb_addorder WHERE id=:id");
$stmtdelete->bindParam(':id', $data);
$stmtdelete->execute();


 redirect("index.php");

?>