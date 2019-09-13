<?php
require("common.php");
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['pass'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
$query = "SELECT * FROM admin WHERE a_email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: adminlogin.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['a_email'];
  header('location:admin.php');
}