 <html>
    <head>
          <link rel="stylesheet" type="text/css" href="style.css">
        <link type="text/javascript" href="navscript.js">
        <style>
            .block{
                width:100%;
                
            }
            i{
                font-size:40px;
            }
            .input_box{
                width: 250px;
                height: 50px;
                font-size: 30px;
            }
        </style>
    </head>
    <body style="margin: 0px;">
            <?php include 'header.php'; ?>
        <div class="container">
            <div class="list_box">
                <div class="box" width="100%" style="margin:auto;">
                    <?php
       $con = mysqli_connect("localhost", "root", "", "palak_foundation")or die($mysqli_error($con));
       $query = "SELECT * FROM person WHERE email='" . $_SESSION['email'] . "'";
       $result = mysqli_query($con, $query)or die($mysqli_error($con));
       $row = mysqli_fetch_array($result);
       ?>  <form action="update_profile_set.php" method="post">
                    <i>
                    firstname:<input type="text" class="input_box" name="fname"  value="<?php echo $row['fname'] ?>"> <br><br>
                    lastname:<input type="text" class="input_box" name="lname"  value="<?php echo $row[1] ?>" ><br><br>
                    email:<input type="text" class="input_box" name="email" value="<?php echo $row[2] ?>"> <br><br>
                    address:<input type="text" class="input_box" name="address" value="<?php echo $row[3] ?>"> <br><br>
                    gender:<input type="radio" name="sex" value="m" > &nbsp &nbsp
                    <input type="radio" name="sex" value="f"  > <br><br>
                    <h3> Enter your privious password<br><br></h3>
                     password: <input type="password" value="row[6]" name="pass1"><br><br>
                     
                    contact:<input type="text" class="input_box" name="contact" value="<?php echo $row[5] ?>"> <br><br>
                    city:<input type="text" class="input_box" name="city" value="<?php echo $row[7] ?>" ><br><br>
                    </i>
                    <br><br>
                    <center> <input type="submit"> </center>
       </form>
           </div>
                <div class="box" width="50%" style="background-color:red;">
            <a href="setting.php">setting</a>
            </div>
                
        </div>
        </div>
    </body>
</html>




