<?php
include '../app/call.php';
$email=$_GET['ref'];

$count=selectOrderDeclineTimes($conn,$email);

// print_r ($count);
foreach($count as $value){
    echo "Order Decline For ".$value." Times";



}

if(isset($_POST['blockbtn'])){
if(blockUserAccount($email)){
    redirect("index.php");
}

}





?>
<form method="POST">
<button type="submit" name="blockbtn">Block Account</button>
</form>