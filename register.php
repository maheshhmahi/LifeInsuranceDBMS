<?php
session_start();
if($_SESSION)
{
  $id = $_SESSION["id"];
}
else{
  header("Location:dashboardc.php");
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
<head>
<style>
.error {color: #FF0000;}
</style>
    <title> Registration </title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.header {
  padding: 2px; /* some padding */
  text-align: center; /* center the text */
  background-image: url("pic.jpg");
  background-size: 1920px;
  background-repeat: no-repeat;
  background-position: center;
  margin: 0PX;
   color:#;
   
}
#idol{
    color:#2e4053;
}
#mar {
    text-align: center;
}
#le {
    
    margin-top: 0px;
    margin-left: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    background : transparent;
    float: left;
    color: black;
 }
</style>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<div class="header">
     <h2>Register Form</h2>
</div>
    <br>
    <br>
    <h3 id="mar"> ENTER THE DETAILS </h3>
<form action="client_ins.php" method="post" style="max-width:500px; margin:auto">
  <!---<div class="input-container">
   <input class="input-field" type="number" name="ID" placeholder="Your ID" value="<?php echo $cid; ?>">--->
  </div>
    <div class="input-container">
    <input class="input-field" type="text" name="name" placeholder="Name"  required>
    </div>
    <div class="input-container">
    <input class="input-field" type="number" name="Phone" placeholder="Phone" id="phno" required>
    </div>
    <div class="input-container">
    <input class="input-field" type="email" name="Email" placeholder="Email"  required> 
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Address" placeholder="Address" required>
    </div>
    <div class="input-container">
    <input class="input-field" type="number" name="age" placeholder="Age" required>
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="gender" placeholder="Gender (M/F)" required>
    </div>
    <div class="input-container">
    <input class="input-field" type="number" name="agent_id" placeholder="Agent_id" required>
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="policy_name" placeholder="policy name"  required>
    </div>
    
        
 <button type="submit" class="btn">Register</button>
</form>
<script src="js/jquery-2.2.3.min.js"></script>
   
    <script>
        window.onload = function () {
            document.getElementById("phno").onchange = validatePhno;
            
        }

        function validatePhno() {
            var ph = document.getElementById("phno").value;
            
            if (ph != /^\d{10}$/)
                document.getElementById("phno").setCustomValidity("Invalid phone Number");
            else
                document.getElementById("phno").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
</body>
</html>
