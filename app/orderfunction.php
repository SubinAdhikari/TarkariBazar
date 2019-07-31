<?php 
  
function insertOrder($conn,$data){
	$stmtinsert=$conn->prepare("INSERT INTO tb_addorder (`productname`,`product_id`,`productquantity`,`price`,`order_by`,`fname`,`lname`,`phone`,`state`,`municipality`,`city`,`area`) VALUES (:productname,:product_id,:productquantity,:price,:order_by,:fname, :lname, :phone, :state,:municipality,:city,:area)");



	$stmtinsert->bindParam(':productname', $data['productname']);
	$stmtinsert->bindParam(':product_id', $data['product_id']);
	$stmtinsert->bindParam(':productquantity', $data['productquantity']);
	$stmtinsert->bindParam(':price', $data['price']);
	$stmtinsert->bindParam(':order_by', $data['orderby']);
	$stmtinsert->bindParam(':fname', $data['fname']);
    $stmtinsert->bindParam(':lname', $data['lname']);
    $stmtinsert->bindParam(':phone', $data['phone']);
	$stmtinsert->bindParam(':state', $data['state']);
	$stmtinsert->bindParam(':municipality', $data['municipality']);
    $stmtinsert->bindParam(':city', $data['city']);
    $stmtinsert->bindParam(':area', $data['area']);
	if ($stmtinsert->execute()) {
		
		

		return true;
	}
	return false;
}

function selectOrderDatabase($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addorder");
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}


function selectMyPendingOrderForUser($conn,$email){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addorder WHERE order_by=:email");
	$stmtSelect->bindParam(':email',$email);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}

function selectMyConfirmedOrderForUser($conn,$email){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_confirmorder WHERE order_by=:email");
	$stmtSelect->bindParam(':email',$email);
	$stmtSelect->execute();
	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
	return $stmtSelect->fetchAll();
	
	
 	
} 


function selectConfirmedOrderDatabase($conn,$data){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addorder WHERE id=:id");
	$stmtSelect->bindParam(':id',$data);
	$stmtSelect->execute();
	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
	return $stmtSelect->fetch();
	
	
 	
} 

function functionforDeliveryDatabase($conn,$data){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_confirmorder WHERE id=:id");
	$stmtSelect->bindParam(':id',$data);
	$stmtSelect->execute();
	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
	return $stmtSelect->fetch();
	
	
 	
} 


function selectOrderConfirmedDatabase($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_confirmorder");
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}

function selectOrderDeliveredDatabase($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_deliveredorder");
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
 

function selectMyOrderForUser($conn,$email){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_deliveredorder WHERE order_by=:email");
	$stmtSelect->bindParam(':email',$email);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}


function SelectIDForOrderConfirmation($conn,$data){

	$productName=$data['productname'];
	$productID=$data['product_id'];
	$productQuantity=$data['productquantity'];
	$order_by=$data['orderby'];
	$fname=$data['fname'];
	$lname=$data['lname'];
	$phone=$data['phone'];

$stmtSelect = $conn->prepare("SELECT id FROM tb_addorder where productname=:productname && product_id=:product_id && order_by=:order_by  && fname=:fname && lname=:lname && phone=:phone");
$stmtSelect->bindParam(':productname',$productName);
$stmtSelect->bindParam(':product_id',$productID);
$stmtSelect->bindParam(':order_by',$order_by);

$stmtSelect->bindParam(':fname',$fname);
$stmtSelect->bindParam(':lname',$lname);
$stmtSelect->bindParam(':phone',$phone);
$stmtSelect->execute();
$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
return $stmtSelect->fetch();
}


function selectOrderDeclineTimes($conn,$email){
$stmtSelect = $conn->prepare("SELECT decline_times FROM tb_adduser WHERE email=:email");
$stmtSelect->bindParam(':email',$email);
$stmtSelect->execute();
$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
return $stmtSelect->fetch();
}




function blockUserAccount($email){

$serverName="localhost";
$userName="root";
$password="";
$dbName="userloginfortb";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn)
  die("connection Failed".mysqli_connect_error());




$sql= "UPDATE tb_adduser SET status='block' WHERE email='$email' ";
if ($conn->query($sql) === TRUE) {
    return true;
} else {
	return false;
}

}
?>