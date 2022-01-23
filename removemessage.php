<?php
session_start();
if($_SESSION)
{
  $id = $_SESSION["id"];
}
else{
  header("Location:login.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $iid = $_GET["id"];
 

$sql = "DELETE FROM contact WHERE ID=$iid";

if ($conn->query($sql) === TRUE) {
    header("Location:dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>