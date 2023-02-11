<?php
session_start();
if(empty($_SESSION['name']))
{
		header("Location: index.php");
}
else
{
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "delicieux";

$conn = new mysqli($servername, $username, $password,$dbname);

// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}// Selecting Database from Server
$itemid=$_GET['item'];
$qty=$_GET['quantity'];
//Insert Query of SQL
$sql = "UPDATE cart SET qty=".$qty." WHERE item_id=".$itemid." AND user_id=".$_SESSION['id']." AND checkout=0";
$result=$conn->query($sql);
		if ($conn->query($sql) === TRUE) 
		{
			$conn->close();
			header("Location: cart.php");
		}
		else 
		{
			
		$conn->close();
		// Create connection

		}
}
?>





