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

 $cid = $_GET["id"];
 $pid = $_GET["pid"];

 $sql="SELECT * FROM clients WHERE client_id='$cid'";
         $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 $aid = $row["agent_id"];
             }}

$sql="SELECT * FROM agent WHERE agent_id='$aid'";
         $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 $clients = $row["clients"];
                 $com=$row["comission"];
             }}

        $update_client=$clients-1;
        $tot_com=$com-1000;

$sql = "UPDATE agent SET comission=$tot_com WHERE agent_id=$aid";
$conn->query($sql);

$sql = "UPDATE agent SET clients=$update_client WHERE agent_id=$aid";
$conn->query($sql);

$sql = "DELETE FROM clients WHERE client_id = $cid AND policy_id=$pid";

if ($conn->query($sql) === TRUE) {
    header("Location:dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>