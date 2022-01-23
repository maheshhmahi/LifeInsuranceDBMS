<?php
session_start();
if($_SESSION)
{
  $id = $_SESSION["id"];
}
else{
  header("Location:front.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shru";


$pid=$_GET["pid"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
   
    $sql = "SELECT *FROM login WHERE client_id LIKE '$id' ";
    $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                  $iid=$row["client_id"];
                 $name = $row["name"];
                }} 
 
  
?>

 
<!DOCTYPE html>
<html>
  <title> Details</title>
  <?php include('includec/headerc.php')  ?>
  <body class="w3-light-grey" style="background-image:url(pic.jpg);background-size:cover;">
  
  <?php include('includec/sidebarc.php');?>
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  <div class="w3-main" style="margin-left:300px;">
    <header class="w3-container" style="padding-top:22px">
      <!--<h5><i class="fa fa-medkit"></i> &nbsp; <?php echo $store_name; ?> </h5>
      <p class="w3-text-grey"><?php echo $store_address; ?></p>-->
    </header>
   <?php
  $sql ="SELECT * FROM payment WHERE client_id=$iid  AND policy_id=$pid";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {  
              while($row = $result->fetch_assoc()) {
                $cid=$row["client_id"];
                $name=$row["name"];
                $email=$row["email"];
                $policy=$row["policy"];
                $amt=$row["paid"];
                $date=$row["date_in"];


  }}


   ?>

    <div class="w3-margin">
      <div class="w3-row">
        <div class="w3-col s8 w3-white">
          <div class="w3-container w3-padding">
          
          <p></p>
          
          <!--<a href="system/delete_store.php?id=<?php  echo $id; ?>">Delete</a>-->
          <p></p>
          <div class="w3-large w3-text-grey">Details</div><br>
          <div class="w3-medium w3-text-black">
            <div class="w3-row">
              <div class="w3-col s8">
                <table class="w3-table w3-striped w3-bordered w3-border">
                  <tr class="">
                    <td>
                      My ID
                    </td>
                    <td>
                      <?php echo $iid; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Name
                    </td>
                    <td>
                      <?php echo $name; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Email
                    </td>
                    <td>
                      <?php echo $email; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      policy
                    </td>
                    <td>
                      <?php echo $policy; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      policy ID
                    </td>
                    <td>
                      <?php echo $pid; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Amount paid
                    </td>
                    <td>
                      <?php echo $amt; ?>
                    </td>
                  </tr>
                    <tr class="">
                    <td>
                      Date and Time
                    </td>
                    <td>
                      <?php echo $date; ?>
                    </td>
                  </tr>
                </table>
              </div>
          
              <button onclick="myFunction()" style="float:right">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>
              
              </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
