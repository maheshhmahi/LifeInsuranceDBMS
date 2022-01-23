<?php
session_start();
if($_SESSION)
{
header("Location:dashboardc.php");}
else{
  
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shru";

$emsg = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST)
{
  $u = $_POST["Name"];
  $p = $_POST["Password"];
   

$sql = "SELECT * FROM login  WHERE name LIKE '$u' AND password LIKE '$p'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {

	$id = $row["client_id"];
    // output data of each row
    echo "login okay";
     $_SESSION["id"] = $id;
    header("Location:dashboardc.php");
}
} else {
    $emsg=1;
    $error1="Wrong email or password try again";
    header("Location:front1.php?error=Wrong email or password try again");
}
}
$conn->close();
?>