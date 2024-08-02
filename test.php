<?PHP
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$connect = mysqli_connect('localhost','root','');
mysqli_query($connect,'use login1');
$insert = 'insert into userdetails values(?,?,?,?)';
$stmt = mysqli_prepare($connect,$insert);
mysqli_stmt_bind_param($stmt,'ssss',$_POST['name'],$_POST['mail'],$_POST['pincode'],$_POST['address']);
mysqli_stmt_execute($stmt);
?>
<?php
session_start();
$_SESSION["name"]=$_POST['name'];
echo "dear  ".$_SESSION["name"]."  your order is placed successfully";
?> 



















