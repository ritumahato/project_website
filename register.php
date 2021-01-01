<?php
session_start();
header('location:index.html');
$con = mysqli_connect('localhost','root','Ritu@743112');
mysqli_select_db($con,'userregistration');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$usertype=$_POST['usertype'];
$s="select*from usertable where email ='$email'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num == 1)
{
    echo "email already taken";
}
else{
    $reg="INSERT INTO usertable(name,email,phone,address,password,usertype) values('$name','$email','$phone','$address','$password','$usertype')";
     mysqli_query($con,$reg);
     echo " successfull" ;
}

?>