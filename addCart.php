<?php
session_start();
if(empty($_SESSION['name']))
{
	if(isset($_GET['ct']))
		header("Location: Catalogue.php?ct=".$_GET['ct']."&u=crt");
	else
		header("Location: index.php?u=crt");
}
else if(empty($_GET['quantity']))
		header("Location: Catalogue.php?ct=".$_GET['ct']."&u=noadd");
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
$sql = "SELECT * FROM cart where item_id=".$itemid." AND user_id=".$_SESSION['id']." AND checkout=0";
$result=$conn->query($sql);
if ($result->num_rows > 0)
{
$conn->close();
	if(isset($_GET['ct']))
		header("Location: Catalogue.php?ct=".$_GET['ct']."&u=already");
	else
		header("Location: index.php?u=already");
}
else {
	
$conn->close();
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}// Selecting Database from Server
//Insert Query of SQL
$sql = "INSERT INTO cart(item_id, user_id,qty,checkout) VALUES (".$itemid.",".$_SESSION['id'].",".$qty.",0)";
if ($conn->query($sql) == TRUE)
{
//Insert Query of SQL
	if(isset($_GET['ct']))
		header("Location: Catalogue.php?ct=".$_GET['ct']."&u=add");
	else
		header("Location: index.php?u=add");
}
else {
	if(isset($_GET['ct']))
		{header("Location: Catalogue.php?ct=".$_GET['ct']."&u=noadd");}
	else
		{header("Location: index.php?u=noadd");}
}
$conn->close();
}
}
?>

