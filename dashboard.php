<?php
session_start();
if($_SESSION)
{
  $id = $_SESSION["id"];
}
else{
  header("Location:index.php");
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
  
   
    $sql = "SELECT *FROM admin WHERE ID LIKE '$id' ";
    $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 $name = $row["username"];
                }} 
 
?>

 
 



<!DOCTYPE html>
<html>
<title>Dashboard</title>
<?php include('include/header.php')  ?>

<body class="w3-light-grey" style="background-image:url(blur.jpg);background-size:cover;">
 

<?php include('include/sidebar.php');?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><i class="fa fa-dashboard"></i> Dashboard</h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <a href="displayclients.php" style="text-decoration: none;"><div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
            <h3>
              <?php   
              $count = 0;
                $sql = "SELECT *FROM clients";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                $count = $count + 1;
                }} 
                echo $count;   
              ?>

            </h3>

         </div>
        <div class="w3-clear"></div>
        <h4>Clients</h4>
      </div></a>
    </div>
    
  

</div>
<br><br>

  <div class="w3-row-padding w3-margin-bottom">
    <!---<div class="w3-col l3">
      <div class="w3-card w3-white w3-padding">
        <h3>Add client</h3>
        <a href="register.html" class="w3-btn w3-red">Add</a>
      </div>
    </div>--->
    <div class="w3-col l3">
      <div class="w3-card w3-white w3-padding">
        <h3>Old client</h3>
        <a href="search.php" class="w3-btn w3-red">Search</a>
      </div>
    </div>
    <div class="w3-col l3">
    </div>
    <div class="w3-col l3">
    </div>
    <div class="w3-col l3">
    </div>
  </div>

  <!--<div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Regions</h5>
        <img src="/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>New record, over 90 views.</td>
            <td><i>10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Database error.</td>
            <td><i>15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>New record, over 40 users.</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>New comments.</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Check transactions.</td>
            <td><i>28 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>CPU overload.</td>
            <td><i>35 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>New shares.</td>
            <td><i>39 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>-->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
