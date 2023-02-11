<?php
extract($_POST);
if(isset($sendmail))
{
  
  $subject ="Delicieux";
  $from="maxseeley99@gmail.com";
  $message ="Hi ".$email.",\nSuccessfully subscribed.";
  $headers = "From:".$from;
  mail($email,$subject,$message,$headers);

  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $dbname = "delicieux";

  $conn = new mysqli($servername, $username, $password,$dbname);

  if(! $conn)
  {
      die('Connection Failed'.mysql_error());
  }
  $itemid=$_POST['item'];
  $sql = "SELECT * FROM newsletter where emailid='".$email."'";
  $result=$conn->query($sql);
  if ($result->num_rows > 0)
  {
    $conn->close();
    header("Location: index.php?u=presub");
  }
  else 
  {   
    $conn->close();
    $conn = new mysqli($servername, $username, $password,$dbname);
    if(! $conn)
    {
        die('Connection Failed'.mysql_error());
    }
    $sql = "INSERT INTO newsletter(emailid) VALUE ('".$email."')";
    if ($conn->query($sql) == TRUE)
    {
        $conn->close();
        header("Location: index.php?u=subs");
    }
    else 
    {
        $conn->close();
        header("Location: index.php?u=nosub");
    }
  }
}
?>  
