 <?php
 
require("common.php");
  $fname = $_POST['fname'];
  $fname = mysqli_real_escape_string($con, $fname);
  
  $lname = $_POST['lname'];
  $lname = mysqli_real_escape_string($con, $lname);

  $email = $_POST['mail'];
  $email = mysqli_real_escape_string($con, $email);
  
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);
  
  $gender = $_POST['gender'];
  $gender = mysqli_real_escape_string($con, $gender);
  
  $mobile_no = $_POST['mobile_no'];

  $password = $_POST['pass1'];
  $password = mysqli_real_escape_string($con, $password);
 
  $password1 = $_POST['pass2'];
  $password1 = mysqli_real_escape_string($con, $password);
  
  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM person WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $mobile_no)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else if($password!=$password1){
      $m = "<span class='red'>password is not matched</span>";
    header('location: signup.php?m2=' . $m);
  }
  else{
      $password = MD5($password);
    $query = "INSERT INTO person(fname,lname,email,address,sex,contact,password,city)"
  ."VALUES('" . $fname . "','".$lname."','". $email . "','" . $address . "','" . $gender. "','" .$mobile_no . "','" . $password ."','" . $city ."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: index.php');
  }
?>