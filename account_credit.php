<?php
require("common.php");
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$netbankId = $_POST['netbankId'];
$netbankId = mysqli_real_escape_string($con,$netbankId);
$password = $_POST['pass'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
$amount=$_POST['amount'];
 
$query = "INSERT INTO acc_detail(deb_bit,amount)"
  ."VALUES(" . 0 . ",".$amount.")";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['user_id'] = $user_id;
    $q1= "INSERT INTO credit_donate(cre_did,email_p)"
  ."VALUES(" . $user_id . ",'".$_SESSION['email']."')";
      mysqli_query($con, $q1) or die(mysqli_error($con));
    header('location: thanks.php');

