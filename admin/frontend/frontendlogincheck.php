<?php
include '../../app/call.php';
session_start();
// session_start();
// if(checkAdminLogin()){
// 	redirect('index.php');
// }

if(isset($_POST['submitbtn'])){
 if(AuthenticateCrediential($conn,$_POST)){
  $adminInfo=AuthenticateCrediential($conn,$_POST);
  $_SESSION['admin'] ['email']=$adminInfo['email'];
  $_SESSION['admin'] ['fname']=$adminInfo['fname']; 
    redirect('../index.php'); 
 }
 else{  
    redirect('adminlogin.php');
 }  
}

if(isset($_POST['Usersubmitbtn'])){
  
   if(AuthenticateCredientialUSER($conn,$_POST)){
    $userInfo=AuthenticateCredientialUSER($conn,$_POST);
    if($userInfo['status']=='active'){
    $_SESSION['user'] ['email']=$userInfo['email'];
    $_SESSION['user'] ['fname']=$userInfo['fname']; 
     
    redirect('../UserView/home.php');
      }
    else{
       echo "You'r account is blocked.Please call us at +9779860275399 for further details";
    }
   }
   else{ 
      redirect('login.php');
   }
   
  } 


  if(isset($_POST['registerBtn'])){
	if(insertUser($conn,$_POST)){
      redirect('login.php');
		}else{
         redirect('signup.html');
      }
}
?>