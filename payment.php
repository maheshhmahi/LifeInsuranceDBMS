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
	if($_GET)
	{
		$q=$_GET["id"];
	} 
	 $sql ="SELECT * FROM clients c, policy p, insurance i,login l
            WHERE c.client_id=$id AND i.policy_id=$q AND c.client_id=l.client_id 
            	AND p.policy_name=(SELECT policy_name FROM policy WHERE policy_id=$q)";
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
                $premium=$row["premium"];
                $email=$row["email"];
                $phone=$row["phone"];


  }} 
			
	 
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>Payment Form </h1>
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2> Payment </h2>
									  <ul class="resp-tabs-list">
									  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										   
										  <div class="clear"></div>
									  </ul>	
								</div>
  <div class="resp-tabs-container">
	<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
	 <div class="payment-info">
	  <h3>Personal Information</h3>
	   <form action="pay.php" method="post">
		<div class="tab-for">			
		<h5>ID</h5>
		 <input type="text" name="id" value="<?php echo $id; ?>">	
			<h5>Policy ID</h5>
		 <input type="text" name="pid" value="<?php echo $pid; ?>">							
	      <h5>NAME</h5>			
			<input type="text" name="name" value="<?php echo $cname?>">
		  <h5>EMAIL ADDRESS</h5>
		   <input type="text" name="email" value="<?php echo $email?>">
		  <h5>Policy</h5>
		   <input type="text" name="pname" value="<?php echo $pname?>">
		  <h5>Premium amount</h5>
		  <input type="text" name="paid" value="<?php echo $premium?>">
		</div>		
	<h3 class="pay-title">Credit Card Info</h3>
	
	<div class="tab-for">				
	<h5>NAME ON CARD</h5>
	<input type="text"   required>
	<h5>CARD NUMBER</h5>													
	<input class="pay-logo" type="text"  required>
	</div>	
	<div class="transaction">
	<div class="tab-form-left user-form">
		<h5>EXPIRATION</h5>
		<ul>
		<li>
		<input type="number" class="text_box" type="text"  min="1" required>	
	</li>
	<li>
	<input type="number" class="text_box" type="text" value="" min="1" required>	
	</li>
	</ul>
	</div>
	<div class="tab-form-right user-form-rt">
		<h5>CVV NUMBER</h5>													
		<input type="number"  required>
		</div>
		<div class="clear"></div>
	</div>
	
	<input type="submit" value="SUBMIT">
	</form>
	<div class="single-bottom">
	<ul>
	<li>
	<input type="checkbox"  id="brand" value="">
	<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
	</li>
	</ul>
	</div>
	</div>
	</div>
	<div class="single-bottom">
	<ul>
	<li>
	<input type="checkbox"  id="brand" value="">
	<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
	</li>
	</ul>
	</div>
	</div>	
	</div>
	</div>	
	</div>
	</div>	

	</div>
		
	</div>
</body>
</html>