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
  $sql ="SELECT * FROM clients c,policy p,insurance i,agent a, login l
         WHERE c.client_id=$iid AND p.policy_id=$pid AND p.policy_id=i.policy_id
              AND c.agent_id=a.agent_id AND c.client_id=l.client_id";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {  
              while($row = $result->fetch_assoc()) {
                $pname = $row["policy_name"];
                $pid = $row["policy_id"];
                $tenure=$row["tenure"];
                $asu_amt=$row["policy_asu_amt"];
                $aid = $row["agent_id"];
                $cid=$row["client_id"];
                $cname=$row["name"];
                $aname=$row["aname"];
                $premium=$row["premium"];
                $email=$row["email"];
                $phone=$row["phone"];


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
                      <?php echo $cid; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Name
                    </td>
                    <td>
                      <?php echo $cname; ?>
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
                      policy
                    </td>
                    <td>
                      <?php echo $pname; ?>
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      tenure
                    </td>
                    <td>
                      <?php echo $tenure; ?>
                    </td>
                  </tr>
                    <tr class="">
                    <td>
                      Assured Amount
                    </td>
                    <td>
                      <?php echo $asu_amt; ?>
                    </td>
                  </tr>
                  

                  <tr class="">
                    <td>
                      Premium  
                    </td>
                    <td>
                      <?php echo "$premium ";  ?>
                    </td>
                  
                  <tr class="">
                    <td>
                      Agent Name
                    </td>
                    <td>
                      <?php echo $aname; ?>
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
