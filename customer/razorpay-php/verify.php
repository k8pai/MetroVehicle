<?php

require('config.php');
require('../dbcon.php');
session_start();
$db=new dbcon();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
$_SESSION['payment']="Pending";

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $_SESSION['payment']="Successful";
    $rate = $_SESSION['rate'];
    $fname = $_SESSION['fname'];
    $bookingId = $_SESSION['bookingId'];
    $insquery="INSERT INTO `payment` (`bookingId`, `name`, `amount`, `paymentStatus`, `payment_id`) VALUES ('$bookingId', '$fname', '$rate', 'Successful', '$razorpay_payment_id');";
    $db->insertQuery($insquery);

    $updquery="update banda set paymentStatus='".$_SESSION['payment']."' where bookingId='".$_SESSION['bookingId']."'";
    $db->insertQuery($updquery);
    $updquery="update bookinghistory set paymentStatus='".$_SESSION['payment']."' where bookingId='".$_SESSION['bookingId']."'";
    $db->insertQuery($updquery);
    echo "<script>alert('Your payment was successful.');window.location='../printTicket.php';</script>";

    // $html = "<p>Your payment was successful</p>
             // <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $_SESSION['payment'] = 'Failed';
    $updquery="update bookinghistory set paymentStatus='".$_SESSION['payment']."' where bookingId='".$_SESSION['bookingId']."'";
    $db->insertQuery($updquery);
    echo "<script>alert('Payment Failed. Try again!');window.location='';</script>";
    //  $html = "<p>Your payment failed</p>
             // <p>{$error}</p>";
}

