<?php
session_start();
if($_SESSION)
{
header("Location:dashboard.php");}
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

    if($_POST)
    {

        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $pass=$_POST['Password'];
        $conpass=$_POST['ConPassword'];

    $sql="INSERT INTO login (name,email,password,confirm) VALUES ('$name','$email','$pass','$conpass')";
    if(!mysqli_query($con,$sql))
    {
       
   echo 'Not Inserted';
    }
    else{
          $last_id = mysqli_insert_id($con);
        echo 'INSERTED';
        $id=$row["user_id"];
        $_SESSION["id"] = $id;
        header("Location:index.php");
    }
}

?>