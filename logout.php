<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['address']);
unset($_SESSION['addr']);
header("Location:index.php");
/*session deleted. if you try using this you've got an error*/
?>