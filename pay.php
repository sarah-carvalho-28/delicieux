<?php

require('config.php');
require('razorpay-php/Razorpay.php');

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => 3456,
    'amount'          => $total * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}
$oid=00000;

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


//Insert Query of SQL

$sql = "INSERT INTO orders(user_id,rpid) VALUES (".$_SESSION['id'].",'".$_SESSION['razorpay_order_id']."')";
if ($conn->query($sql) == TRUE)
{
    $conn->close();
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Make sure we connected successfully
    if(! $conn)
    {
        die('Connection Failed'.mysql_error());
    }
    $sql = "SELECT * FROM orders WHERE user_id=".$_SESSION['id']." AND rpid='".$_SESSION['razorpay_order_id']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
        // output data of each row
            while($row = $result->fetch_assoc()) {
            $oid=$row['ord_id'];
            }
        } 
}
$conn->close();

$conn = new mysqli($servername, $username, $password,$dbname);

// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}
$sql = "UPDATE cart SET ord_id=".$oid." WHERE user_id=".$_SESSION['id']." AND checkout=0";
if ($conn->query($sql) == TRUE)
{

}
else {
}
$conn->close();

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Delicieux",
    "description"       => "Order Payment",
    "image"             => "images/final_logo.png",
    "prefill"           => [
    "name"              => $_SESSION['name'],
    "email"             => $_SESSION['email'],
    "contact"           => $_SESSION['phone'],
    ],
    "notes"             => [
    "merchant_order_id" => $oid,
    ],
    "theme"             => [
    "color"             => "#f23c48"
    ],
    "order_id"          => $razorpayOrderId,];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("paybutton.php");
