<?php
include('dbcon.php');
$db=new dbcon;

$code=$_POST['transcode'];
$name=$_POST['transport'];
$numb=$_POST['time'];

$sql="insert into transport set time='$numb',transport='$name',transcode='$code'";
$db->insertQuery($sql);
echo"<script>alert('VALUE UPDATED');windows.location=mot.php</script>";