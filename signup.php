<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link type="text/javascript" href="navscript.js">
        <style>
            body{
                background-image: url(img/h1.jpg);
                 background-repeat: no-repeat;
                background-size: cover;
            }
            .box{
                width: 100%;
                height: 100%;
                margin: 0px;
            }
            .sign_up{
                width: 271px;
                height: 370px;
                border-radius: 4px;
                background-color: rgba(0,0,0,.20);
                display: block;
                margin: auto;
                position: relative ;
                top: 30px;
            }
            .input_box{
                width: 250px;
                height: 30px;
                border-radius: 8px;
              }
            .middle{
                width: 300px;
                height: 400px;
                border: 2px solid red;
                display: block;
                margin: auto;
            }
            .top1{
                width: 48%;
                line-height: 50px;
                float: right;
                display: inline-block;
                color: red;
                border: 1px solid black;
                border-radius: 4px;
                text-align: center;
                background-color: lightblue;
            }
            .top{
                width: 22%;
                height: 50px;
                
                float: right;
                font-size: 22px;
            }
        </style>
    </head>
    <body style="margin: 0px;">
            <?php include 'header.php'; ?>
        <div class="box">
            <diV class="top">
            <diV class="top1">
                <a href="signin.php" style="text-decoration:none; color: red;"> sign_in</a>
            </diV>
            
        </diV>
            <div class="sign_up">
                <div class="midddle">
                <form method="post" action="signup_submit.php">
                    <h3 style="color: #eee;position:relative; top:10px;">First name <br><input type="text" name="fname" class="input_box" required> <br>
                        Last name: <br> <input type="text" name="lname" class="input_box" required> <br>
                        email :<br> <input type="email" name="mail" class="input_box" required> <br>
                        address:<br> <input type="text" name="address" class="input_box" required> <br>
                        male <input type="radio" name="gender" value="m" required> 
                        female<input type="radio" name="gender" value="f" required><br>
                         mobile no:<input type="tel" name="mobile_no" class="input_box" required>
                        password: <br> <input type="password" name="pass1" class="input_box" required> <br>
                        confirm password: <br> <input type="password" name="pass2" class="input_box" required> <br>
                        city:<input type="text" name="city" class="input_box" required>
                    <br><br>
                    <center><input type="submit" value="sign up" style=""></center>
                    </h3>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>


