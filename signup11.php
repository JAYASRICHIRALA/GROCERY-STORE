<!DOCTYPE html>
<html>
<head>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$connect = mysqli_connect('localhost','root','');
mysqli_query($connect,'use login1');
$insert = 'insert into signupdetails1 values(?,?,?)';
$stmt = mysqli_prepare($connect,$insert);
mysqli_stmt_bind_param($stmt,'sss',$_POST['username'],$_POST['email'],$_POST['pass']);
mysqli_stmt_execute($stmt);
?>
<title>
</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <script defer src="bootstrap.min.js"></script>
</head>
<body>
<br>
<center>
You have finished signing up <a class="btn btn-danger" type="submit" href="new_home.php">login here</a>
</center>
</body>
</html>
