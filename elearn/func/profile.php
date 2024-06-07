<?php

$email = $_SESSION['m'];

$que = mysqli_query($conn,"select * from users where email='$email'");
$row = mysqli_fetch_array($que);
$user_id = $row['user_id'];
$veri = $row['is_verified'];
$status = $row['status'];

function isVerified($user_id, $veri){

if($veri == '0'){


echo "<div align='center' class='alert alert-danger'><i class='fa fa-info-circle'></i> You email has not been verified. Kindly click verification link in your email. else your account will be deactivated after 12hrs</div>";

}


}


function isPayment($user_id, $status){


if($status == '0'){

$href = "Modal";

}else{

$href = "";

}


}


?>