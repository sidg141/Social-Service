<?php

 $con=mysqli_connect('localhost','root','','palak_foundation');
 $email=$_POST['email'];
 $email=mysqli_real_escape_string($con,$email);
 $mess=$_POST['message'];
  $mess=mysqli_real_escape_string($con,$mess);
 $query="insert into you_can_help values('$email','$mess')";
 $result=mysqli_query($con,$query);
