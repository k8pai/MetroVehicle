<?php
require('config.php');
session_start();
include('dbcon.php');
$db=new dbcon;
$pic=$_SESSION['pickLoc'];
$dest=$_SESSION['avlStation'];
$trmo=$_SESSION['transMode'];

echo $_SESSION['pickLoc'];
echo $_SESSION['avlStation'];
echo $_SESSION['transMode'];

$sql="select * from ratecalc where pickLoc='$pic' AND avlStation='$dest' AND transMode='$trmo';";
$query=$db->selectData($sql);
if($row=mysqli_fetch_array($query))
{
	$rate=$row['rate']*100; ?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="<?php echo $rate; ?>"
		data-name="Metro By Vehicles"
		data-description="Pay with valid card details."
		data-image="Favicon.png"
		data-currency="inr"
		data-email="<?php echo $_SESSION['cust']; ?>"
	>
	</script>

</form>
<?php 
}
else{
	echo "<script>alert('No Transport Available now! We are working on it.');window.location='ticketBooking.php';</script>";
}
?>
