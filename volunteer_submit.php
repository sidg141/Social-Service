   <?php
   $con = mysqli_connect("localhost", "root", "", "palak_foundation")or die($mysqli_error($con));
   $email=$_POST['mail'];
   $email = mysqli_real_escape_string($con, $email);
   $password=$_POST['pass'];
   $password = MD5($password);
   $adhar=$_POST['adhar'];
   $adhar = mysqli_real_escape_string($con, $adhar);
   $experience=$_POST['experience'];
   $experience = mysqli_real_escape_string($con, $experience);
   $skill=$_POST['skill'];
   $skill = mysqli_real_escape_string($con, $skill);
   $purpose=$_POST['purpose'];
   $purpose = mysqli_real_escape_string($con, $purpose);
   $q2= "SELECT email FROM person WHERE email='" . $email . "' AND password='" . $password . "'";
   $r2 = mysqli_query($con, $q2)or die($mysqli_error($con));
   if(mysqli_num_rows($r2)==0)
   {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: volunteer.php?error=' . $error);
   }
     $query = "SELECT * FROM admin";
       $result = mysqli_query($con, $query)or die($mysqli_error($con));
       $q1 = "SELECT * FROM volunteer";
       $r1 = mysqli_query($con, $q1)or die($mysqli_error($con));
       if((mysqli_num_rows($r1)+1)%2==0)
       {
           for($i=0;$i<1;$i++)
           {
               $row=mysqli_fetch_array($result);
           }
           
       }
       else
       if((mysqli_num_rows($r1)+1)%3==0)
       {
           for($i=0;$i<2;$i++)
           {
               $row=mysqli_fetch_array($result);
           }
           
       } else {
           for($i=0;$i<3;$i++)
           {
               $row=mysqli_fetch_array($result);
           } 
        }
   $query = "INSERT INTO volunteer(experience,specilization,email_a,email_p,adhar,purpose)"
  ."VALUES('" . $experience . "','".$skill."','". $row[8] ."','".$email."','".$adhar."','".$purpose."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $userid= mysqli_insert_id($con);
    header('location: events.php?vid='.$userid);            
    ?>

