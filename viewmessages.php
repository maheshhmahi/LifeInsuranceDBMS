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

  $iid=$_GET["id"];
  



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
   
    $sql = "SELECT *FROM admin WHERE ID LIKE $id";
    $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 
                 $name = $row["username"];
                }} 
 
  
?>

 
<!DOCTYPE html>
<html>
  <title> Messages</title>
  <?php include('include/header.php')  ?>
  <body class="w3-light-grey" style="background-image:url(pic.jpg);background-size:cover;">
  
  <?php include('include/sidebar.php');?>
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  <div class="w3-main" style="margin-left:300px;">
    <header class="w3-container" style="padding-top:22px">
      <!--<h5><i class="fa fa-medkit"></i> &nbsp; <?php echo $store_name; ?> </h5>
      <p class="w3-text-grey"><?php echo $store_address; ?></p>-->
    </header>
   <?php
  $sql ="SELECT * FROM contact WHERE ID LIKE $iid";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {  
              while($row = $result->fetch_assoc()) {
                
                $fname = $row["fname"];
                $lname=$row["lname"];
                $phone = $row["mobile"];
                $email=$row["email"];
                $mess=$row["message"];

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
                      ID
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
                      <?php echo $fname," ",$lname; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Phone
                    </td>
                    <td>
                      <?php echo $phone; ?>
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
                      Message
                    </td>
                    <td>
                      <?php echo $mess; ?>
                    </td>
                  </tr>
                  
                  
                </table>
              </div>
          
              
              
              </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
