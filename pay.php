<?php
session_start();
if($_SESSION)
{
    $id = $_SESSION["id"];
}
else{
  header("Location:dashboardc.php");
}
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "shru";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
     $sql = "SELECT *FROM login WHERE client_id LIKE '$id' ";
    $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 $cid = $row["client_id"];
                }}


   

    $cid=$_POST["id"];
    $cname=$_POST["name"];
    $email=$_POST["email"];
    $pname=$_POST["pname"];
    $premium=$_POST["paid"];
    $pid=$_POST["pid"];
    
 $d=date("Y-m-d h:i:sa");
    $sql="INSERT INTO payment(client_id,policy_id,name,email,policy,paid,date_in) 
    VALUES ('$cid',$pid,'$cname','$email','$pname','$premium','$d')";
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:dashboardc.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}           
   
?>