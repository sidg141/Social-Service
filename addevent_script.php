<?php
   $con = mysqli_connect("localhost", "root", "", "palak_foundation")or die($mysqli_error($con));
   $ename=$_POST['ename'];
   $ename = mysqli_real_escape_string($con, $ename);
   $e_date=$_POST['e_date'];
   $url=$_POST['url'];
   $url = mysqli_real_escape_string($con, $url);
   $sname=$_POST['sname'];
  $query = "INSERT INTO event(e_name,e_date,link,society_name)"
  ."VALUES('" . $ename . "','".$e_date."','". $url ."','".$sname."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $userid= mysqli_insert_id($con);
    header('location: admin.php?vid='.$userid);  
?>

