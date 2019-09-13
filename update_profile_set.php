<?php

  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  
  $address=$_POST['address'];
  $gender=$_POST['sex'];
  $password=$_POST['pass1'];
  $mobile_no=$_POST['contact'];
  $city=$_POST['city'];
  
  session_start();
 $con= mysqli_connect('localhost','root','','palak_foundation');
  
  
   $query = "UPDATE  person SET fname = '" . $fname . "',lname = '" . $lname . "',address = '" . $address . "',sex = '" . $gender . "',city= '" . $city . 
           "',contact = ". $mobile_no ." WHERE email = '" . $_SESSION['email'] . "'";
  $result=mysqli_query($con,$query) or die(mysqli_error($con));
   header("location:profile.php");
  
  