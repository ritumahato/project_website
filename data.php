<?php

include 'connectToMySQL.php';

if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $address=$_POST['address'];
            $phone=$_POST['phone'];
            $comment=$_POST['comment'];
            $email=$_POST['email'];
            
           
           // $pass=password_hash($password, PASSWORD_BCRYPT);
            //$cpass=password_hash($cpassword, PASSWORD_BCRYPT);

         //  $token = bin2hex
 
                    $insertquery= "INSERT INTO user (name, email, address, phone, comment) 
                    VALUES ('$name','$email','$address','$phone','$comment') ";

                    $iquery = mysqli_query($con,$insertquery);
if($iquery)
{
    echo "thanks for your response";
}
else
{
    echo "failed";
}
        }




?>