<?php

require('..\dbcon.php');
require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

$db=new dbcon();
$pic=$_SESSION['pickLoc'];
$dest=$_SESSION['avlStation'];
$trmo=$_SESSION['transMode'];


  // echo $_SESSION['rate'];
  // echo $_SESSION['start'];
  // echo $_SESSION['expire'];
  // echo $_SESSION['pickLoc'];
  // echo $_SESSION['transMode'];
  // echo $_SESSION['bookingId'];

$selquery="select * from login inner join reg on login.uname = reg.mail where login.uname='".$_SESSION['cust']."'";
$query=$db->selectData($selquery);
if($row=mysqli_fetch_array($query)){
    $_SESSION['fname']=$row['fname'];
    $username=$row['fname']." ".$row['lname'];
    $mail=$row['mail'];
    $contactNo=$row['ph'];
}


// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => 3456,
    'amount'          => $_SESSION['rate'] * 100, // 2000 rupees in paise
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

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Metro by Vehicles",
    "description"       => "payment portal",
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill"           => [
    "name"              => $username,
    "email"             => $mail,
    "contact"           => $contactNo,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

$sql="select * from ratecalc where pickLoc='$pic' AND avlStation='$dest' AND transMode='$trmo';";
$query=$db->selectData($sql);
if($row=mysqli_fetch_array($query))
{
?>
<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>

<?php 
}
else{
    echo "<script>alert('No Transport Available now! We are working on it.');window.location='ticketBooking.php';</script>";
}
?>
