<?php
function selectProductDatabase($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addproduct");
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





?>