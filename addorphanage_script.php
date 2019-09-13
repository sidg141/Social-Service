<?php
   $con = mysqli_connect("localhost", "root", "", "palak_foundation")or die($mysqli_error($con));
   $oname=$_POST['oname'];
   $oname = mysqli_real_escape_string($con, $oname);
   $address=$_POST['address'];
   $city=$_POST['city'];
   $city = mysqli_real_escape_string($con, $city);
   $npeople=$_POST['npeople'];
   $caretaker=$_POST['caretaker'];
   $caretaker = mysqli_real_escape_string($con, $caretaker);
$q = "SELECT * FROM volunteer";
$r1 = mysqli_query($con, $q)or die($mysqli_error($con));
 $num= mysqli_num_rows($r1);
 $o_vid=rand(1, $num);
  $query = "INSERT INTO orphange(o_name,address,city,no_people,caretaker,o_v_id)"
  ."VALUES('" . $oname. "','".$address."','". $city ."','".$npeople."','".$caretaker."',".$o_vid.")";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $userid= mysqli_insert_id($con);
    header('location: admin.php?vid='.$userid);  
?>

