<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:signin.php');
}
?>
<html>
    <head>
                <link rel="stylesheet" type="text/css" href="style.css">
        <link type="text/javascript" href="navscript.js">
        <style>
            .big_one{
                width: 400px;
                height: 380px;
                border: 1px solid black;
                margin: auto;
                position: relative;
                top: 100px;
                padding-left: 30px;
                border-radius: 8px;
                background-color: rgb(255, 255, 153);
                
            }
            body{
                
                
            }
            .big{
                width: 300px;
                height: 450px;
                margin: auto;
                border: 1px solid black; 
                padding-left: 20px; 
            }
            .input_box{
                width: 210px;
                height: 30px;
                
                border-radius: 8px;
                padding-left: 10px;
            }
            .bottom_logo{
                position: relative;
                top:30px;
                width: 90px;
                height: 100px;
                display: inline-block;
                float: left;
            }
        </style>
    </head>
    <body>
             
<nav>
            <ul class="topnav" id="dc">
                <li><a href="index.php">Palak foundation</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="volunteer.php">Get Involved</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="donation.php">DONATE</a></li>
                <?php
                if(isset($_SESSION['email']))
                {?>
                <li class="nav-right"><a href="logout.php">logout</a></li>
                <li class="nav-right"><a href="profile.php">profile</a></li>
                
                <?php
                }
                else{?>
                <li class="nav-right"><a href="signup.php">Sign up</a></li>
                <li class="nav-right"><a href="signin.php">Sign in</a></li>
               <?php }?>
                <li class="dropdown" ><a href="javascript:void(0);" onclick="dropdownmenu()">&#9776;</a></li>
            </ul>
</nav>
        <form method="post" action="account_credit.php">
        <div class="big">
            <h3>
                Email:
                <br>
                <input type="text" name="email" placeholder="email" class="input_box" required>
                <br><br>
                Netbanking id:
                <br>
                <input type="text" name="netbankId" placeholder="netbanking" class="input_box" required>
                netbacking password:
                <br>
                <input type="text" name="pass" placeholder="password" class="input_box" required>
                <br><br>
                AMOUNTS<br>
                <input type="tel" name="amount" placeholder="Rs" class="input_box" style="border-width:0px 0px 3px 0px  ;"
                       <br><br><br>
                <input type="reset" value="reset">
                <input type="submit" value="pay">
                
            </h3>
            <div class="bottom_logo"  >
                <image src="img/mastercard.jpg" style="width:90px; height:50px;" >
            </div>
            <div class="bottom_logo" >
                <image src="img/visa.png" style="width:90px; height:70px;">
            </div>
            <div class="bottom_logo">
                <image src="img/paytm_logo.jpg" style="width:90px; height:70px;">
            </div>
        </div>
        </form>    
        <form action="#.php" method="post">
        <div class="big_one">
            <center><h2> I want your feedback  </h2> </center>
            <br>
            Email:
            <br>
            <input type="text" name="email" required placeholder="email" style="width: 210px;height: 30px; border-radius: 8px;padding-left: 8px;">
            <br>
            <br>
            feedback
            <br>
            <textarea  rows="7" cols="50"></textarea>
            <br>
            <br><br>
            <center> <input type="submit"> </center>
        </div>
        </form>
    </body>
</html>