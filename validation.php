<?php
session_start();
$con = mysqli_connect('sql106.ultimatefreehost.in','ltm_25827605','Ritu@743112');
mysqli_select_db($con,'ltm_25827605_userregistration');
$email=$_POST['email'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$s="select*from usertable where email ='$email' && password ='$password'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num == 1 && $usertype=='admin')
{
   header('location:adminhome.php');
}
elseif($num == 1 && $usertype=='user')
{
   header('location:userhome.php');
}
else{
    echo "wrong";
}

?>