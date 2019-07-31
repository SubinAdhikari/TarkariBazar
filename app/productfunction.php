<?php
function selectProductDatabase($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addproduct");
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}

function selectTheProductPrice($conn){
	$stmtSelect = $conn->prepare("SELECT title,price FROM tb_addproduct");
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}

function deleteProduct($conn, $name){
	$stmtdelete=$conn->prepare("DELETE FROM tb_addproduct WHERE image=:name");
	$stmtdelete->bindParam(':name', $name);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}


function selectProductById($conn,$id){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addproduct WHERE id=:id");
	$stmtSelect->bindParam(':id', $id);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}

function editProductInfo($conn,$id,$data){



	$stmtUpdate=$conn->prepare("UPDATE tb_addproduct  SET quantity=:quantity,title=:title,update_date=:update_date,price=:price WHERE id=:id");
	$stmtUpdate->bindParam(':id',$id);
	$stmtUpdate->bindParam(':quantity',$data['quantity']);
	$stmtUpdate->bindParam(':title',$data['title']);
	$stmtUpdate->bindParam(':update_date',$data['update_date']);
	$stmtUpdate->bindParam(':price',$data['price']);
	if($stmtUpdate->execute()){
		return true;
	}
	else{
	return false;
	}

}



?>