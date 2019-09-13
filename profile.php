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
       echo "<center>";
       echo"<div class='block'>";
       echo "<i>first name:</i>";
     echo "<i>$row[0]</i><br>";
     echo "</div>";
     echo "<i>last name:</i>";
      echo "<i>$row[1]</i><br>";
      echo "<i>email:</i>";
       echo "<i>$row[2]</i><br>";
       echo "<i>address:</i>";
        echo "<i>$row[3]</i><br>";
        echo "<i>gender:</i>";
         echo "<i>$row[4]</i><br>";
         echo "<i>contact:</i>";
          echo "<i>$row[5]</i><br>";
          echo "<i>city:</i>";
            echo "<i>$row[7]<i><br>";
            echo "</center>";
            ?>
           </div>
                <div class="box" width="50%" style="background-color:red;">
                    <center> <a href="setting.php" >setting</a></center>
                    
            </div>
                
        </div>
            <br> <center><a href="update_profile.php"  > update</a></center>
        </div>
        
    </body>
</html>




