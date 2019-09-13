<?php
require("common.php");
 $v_id=$_POST['v_id'];
 $e_id=$_POST['e_id'];
     $q1= "INSERT INTO volunteer_work(vid,eid)"
  ."VALUES(" .$v_id.",".$e_id.")";
      mysqli_query($con, $q1) or die(mysqli_error($con));
      header('location:admin.php');
 

