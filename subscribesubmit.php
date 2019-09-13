 <?php

require("common.php");
 $email = $_POST['mail'];
 $email = mysqli_real_escape_string($con, $email);
  
    $query = "SELECT * FROM person WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
    if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } 
 else {
  $query = "INSERT INTO subscribe(email)"
  ."VALUES('" .$email."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: index.php?'.'thanks for subscribing us');      
}
  