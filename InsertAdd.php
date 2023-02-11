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
if($_POST['addr3']!="")
		$addr=$_POST['addr1'].",<br>".$_POST['addr2'].",<br>".$_POST['addr3'].",<br>".$_POST['city']." ".$_POST['pincode'].",<br>".$_POST['state'];
else
		$addr=$_POST['addr1'].",<br>".$_POST['addr2'].",<br>".$_POST['city']." ".$_POST['pincode'].",<br>".$_POST['state'];
$_SESSION['addr']=$addr;
$sql = "UPDATE users SET address='".$addr."' WHERE user_id=".$_SESSION['id'];
$result=$conn->query($sql);
		if ($conn->query($sql) === TRUE) 
		{
			$_SESSION['address']=1;
			$conn->close();
			if(isset($_GET['url']))
			{	
				if(isset($_GET['ct']))
					header("Location:Catalogue.php?ct=".$_GET['ct']);
				else
					header("Location:index.php");
			}
			else
			header("Location: cart.php");
		}
		else 
		{
			
		$conn->close();
		echo "Unsuccessful";

		}
}
?>
