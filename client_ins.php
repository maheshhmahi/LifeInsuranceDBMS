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
     $sql = "SELECT *FROM login WHERE client_id LIKE '$id' ";
    $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 $cid = $row["client_id"];
                }}

        
        $name=$_POST['name'];
        $phone=$_POST['Phone'];
        
        $address=$_POST['Address'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $aid=$_POST['agent_id'];
        $pname=$_POST['policy_name'];
    
        $sql="SELECT * FROM policy WHERE policy_name='$pname'";
         $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 $pid = $row["policy_id"];
                }}
        
        
        $sql="SELECT * FROM agent WHERE agent_id=$aid";
            $result = $conn->query($sql);
                    if ($result->num_rows > 0) {  
                    while($row = $result->fetch_assoc()) {
                     $com = $row["comission"];
                    }}
            if($com>3000)
            {
                $message = "Agent cannot have more than 3 clients";
                echo "<script type='text/javascript'>alert('$message');</script>";
                ?><script type="text/javascript">   
    function Redirect() 
    {  
        window.location="dashboardc.php"; 
    } 
     
    setTimeout('Redirect()', 1);   
    </script>
        <?php
                exit;
            }

        else
        {
            $p0=$aid;

            $sql="CALL `updatecomission`($p0);";
            $conn->query($sql);
      
    $sql="INSERT INTO `clients`
    (client_id,name,phone,address,age,gender,agent_id,policy_id)
    VALUES ('$cid','$name','$phone','$address','$age','$gender','$aid','$pid')";
        
        if ($conn->query($sql) === TRUE) {
            $sql="SELECT * FROM agent WHERE agent_id=$aid";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) {
                 $com = $row["comission"];
                }}

              /*  $sql="UPDATE agent SET comission=1000+$com WHERE agent_id=$aid";
                $result = $conn->query($sql);*/

                echo 'INSERTED';
                header("Location:dashboardc.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }   
        }
?>