<?php
session_start();
if($_SESSION)
{
header("Location:front.php");}
else{
  
}
$servername = "localhost";
$username = "root";


    $con=mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo 'Not Connected to server';
    }

    if(!mysqli_select_db($con,'shru'))
    {
        echo 'Database not Selected';
    }

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $mess=$_POST['message'];
  

    $sql="INSERT INTO contact (fname,lname,mobile,email,message) VALUES ('$fname','$lname','$phone','$email','$mess')";
    if(!mysqli_query($con,$sql))
    {
       
   echo 'Not Inserted';
    }
    else{
          $last_id = mysqli_insert_id($con);
        echo 'INSERTED';
        header("Location:index.php");
    }

?>