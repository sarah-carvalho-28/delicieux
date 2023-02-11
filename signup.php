<?php
$servername = "localhost:3306";
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
$password=$_POST['pass'];
$contact = $_POST['phone'];
$email = $_POST['emailid'];
$fname = $_POST['firstn'];
$lname = $_POST['lastn'];

//Insert Query of SQL

$sql = "INSERT INTO users(user_fname, user_lname, user_email, user_contact, user_password ) VALUES (\"".$fname."\",\"".$lname."\",\"".$email."\",\"".$contact."\",\"".$password."\")";
echo $sql;
if ($conn->query($sql) == TRUE)
{
//Insert Query of SQL
header("Location: index.php?u=new");
}
else {
header("Location: index.php?u=not");
}
$conn->close();
?>

