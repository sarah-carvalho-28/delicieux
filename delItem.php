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
	if(! $conn)
	{
	    die('Connection Failed'.mysql_error());
	}
	$itemid=$_GET['item'];
	$sql = "DELETE FROM cart where item_id=".$itemid." AND user_id=".$_SESSION['id']." AND checkout=0";
	$result=$conn->query($sql);
	if ($conn->query($sql) === TRUE) 
	{
		$conn->close();
		header("Location: cart.php?u=dl");
	}
	else 
	{		
	$conn->close();
	}
}
?>

