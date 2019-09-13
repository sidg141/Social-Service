<?php
   $con = mysqli_connect("localhost", "root", "", "palak_foundation")or die($mysqli_error($con));
   $oname=$_POST['oname'];
   $oname = mysqli_real_escape_string($con, $oname);
   $o_id=$_POST['o_id'];
   $amount=$_POST['amount'];
   $a_email=$_POST['a_email'];
   $a_email = mysqli_real_escape_string($con, $a_email);
   $a_pass=$_POST['a_pass'];
   $a_pass = mysqli_real_escape_string($con, $a_pass);
   $a_pass= md5($a_pass);
$q = "SELECT * FROM admin WHERE a_email='" . $a_email . "' AND password='" . $a_pass . "'";
$r = mysqli_query($con, $q) or die($mysqli_error($con));
$num = mysqli_num_rows($r);
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: adminlogin.php?error=' . $error);
} else { 
    $q1 = "SELECT sum(amount) FROM acc_detail ";
$r1 = mysqli_query($con, $q) or die($mysqli_error($con));
$a= mysqli_fetch_array($r1); 
if($a[0]<$amount)
{
    echo"<h1>fund are insufficient for transfer</h1>";
    header('location: admin.php');
}
else{
 $query = "INSERT INTO acc_detail(deb_bit,amount)"
  ."VALUES(" . 1 . ",".-$amount.")";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['user_id'] = $user_id;
    $user_id=$user_id;
    $q1= "INSERT INTO debit_donate(deb_id,o_id)"
  ."VALUES(" . $user_id. ",'".$o_id."')";
      mysqli_query($con, $q1) or die(mysqli_error($con));
    header('location: admin.php');
}
} 
?>



