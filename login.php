<?php
// Connect to the database
$sservername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "delicieux";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}// Selecting Database from Server
// Grab User submitted information

$pass = $_POST["password"];
$email = $_POST["email"];
// Select the database to use
$sql = "SELECT * FROM users WHERE user_password='$pass' AND user_email='$email'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['id']=$row['user_id'];
        $_SESSION['name']=$row['user_fname'];
        $_SESSION['lname']=$row['user_lname'];
        $_SESSION['email']=$row['user_email'];
        $_SESSION['phone']=$row['user_contact'];
        if($row['address']=='')
            $_SESSION['address']=0;
        $_SESSION['addr']=$row['address'];
        header("Location:index.php?u=log");
    }
} 
else 
{
	
header("Location:index.php?u=nolog");
}
$conn->close();
?>




