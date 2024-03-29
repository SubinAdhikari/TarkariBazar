<?php

function insertAdminUser($conn,$data){
    $data['password']=md5($data['password']);
	$stmtinsert=$conn->prepare("INSERT INTO tb_addadmin (`fname`,`lname`,`email`,`password`,`phoneno`) VALUES (:fname, :lname, :email, :password1,:phoneno)");

	$stmtinsert->bindParam(':fname', $data['fname']);
	$stmtinsert->bindParam(':lname', $data['lname']);
	$stmtinsert->bindParam(':email', $data['email']);
	$stmtinsert->bindParam(':password1', $data['password']);
	$stmtinsert->bindParam(':phoneno', $data['phoneno']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}

function insertUser($conn,$data){
	$data['password']=md5($data['password']);
	$data['status']="active";
	$data['decline_times']="0";
	$stmtinsert=$conn->prepare("INSERT INTO tb_adduser (`fname`,`lname`,`email`,`password`,`phoneno`,`status`,`decline_times`) VALUES (:fname, :lname, :email, :password1,:phoneno, :status1,:decline_times)");

	$stmtinsert->bindParam(':fname', $data['fname']);
	$stmtinsert->bindParam(':lname', $data['lname']);
	$stmtinsert->bindParam(':email', $data['email']);
	$stmtinsert->bindParam(':password1', $data['password']);
	$stmtinsert->bindParam(':phoneno', $data['phoneno']);
	$stmtinsert->bindParam(':status1',  $data['status']);
	$stmtinsert->bindParam(':decline_times', $data['decline_times'] );
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}

function checkReaminingEmail($conn,$data){

	$stmtSelect = $conn->prepare("SELECT email,fname FROM tb_adduser where email=:email || fname=:fname");
	$stmtSelect->bindParam(':email',$data['email']);
	$stmtSelect->bindParam(':fname',$data['fname']); 
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();

}

function AuthenticateCrediential($conn,$data){
	$data['password']=md5($data['password']);
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addadmin where email=:email && password=:password1");
	$stmtSelect->bindParam(':email',$data['email']);
	$stmtSelect->bindParam(':password1',$data['password']); 
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}

function AuthenticateCredientialUSER($conn,$data){
	$data['password']=md5($data['password']);
	$stmtSelect = $conn->prepare("SELECT * FROM tb_adduser where email=:email && password=:password1");
	$stmtSelect->bindParam(':email',$data['email']);
	$stmtSelect->bindParam(':password1',$data['password']);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}

function selectAdminDatabase($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_addadmin");
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}

function selectUserDatabase($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_adduser");
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function deleteAdmin($conn, $name){
	$stmtdelete=$conn->prepare("DELETE FROM tb_addadmin WHERE email=:name");
	$stmtdelete->bindParam(':name', $name);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}

function selectUserDataFromDatabase($conn,$email,$name){
	$stmtSelect = $conn->prepare("SELECT * FROM tb_adduser WHERE email=:email && fname=:name");
	$stmtSelect->bindParam(':email',$email);
	$stmtSelect->bindParam(':name',$name);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}

function editUserInformation($conn,$data,$id){
	$data['password']=md5($data['password']);

	$stmtUpdate=$conn->prepare("UPDATE tb_adduser  SET fname=:fname,lname=:lname,email=:email,password=:password,phoneno=:phoneno WHERE id=:id");
	$stmtUpdate->bindParam(':id',$id);
	$stmtUpdate->bindParam(':fname',$data['fname']);
	$stmtUpdate->bindParam(':lname',$data['lname']);
	$stmtUpdate->bindParam(':email',$data['email']);
	$stmtUpdate->bindParam(':password',$data['password']);
	$stmtUpdate->bindParam(':phoneno',$data['phoneno']);
	if($stmtUpdate->execute()){
		return true;
	}
	else{
	return false;
	}

}

?> 