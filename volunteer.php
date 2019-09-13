<html>
    <head>
          <link rel="stylesheet" type="text/css" href="style.css">
        <link type="text/javascript" href="navscript.js">
        <style>
            body{
                background-image: url(img/hand.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                
                margin: 0px;
            }
            .sign_up{
                width:25%;
                height: 500px;
                border-radius: 4px;
                background-color: rgba(0,0,0,.30);
                display: block;
                margin: auto;
                position: relative ;
                top: 50px;
            }
            .input_box{
                width: 250px;
                height: 30px;
                border-radius: 8px;
                padding-left: 4px;
            }
           
             
        </style>
    </head>
    <body style="margin: 0px;">
            <?php include 'header.php'; ?>
        <h1>if you want become a volunteer then you have to sign up first </h1>
            <div class="sign_up">
                <form method="post" action="volunteer_submit.php">
                <div>
                    <h3 style="color: #fff;position:relative; top:10px;"> 
                        email <br> <input type="text" name="mail" class="input_box" required>  <br>
                        Password <br> <input type="password" name="pass" class="input_box" required>  <br>
                        Adhar no <br> <input type="tel" name="adhar" class="input_box" required> <br>
                        experience<br> <input type="text" name="experience" class="input_box" required> <br>
                    <br>
                    specialization:<br><input type="text" name="skill" class="input_box" required><br>
                    why you wanted to join us:<br><input type="text" name="purpose" class="input_box" required>
                    <br><br>
                                        <center>   <input type="submit" > </center>
                    </h3>
                  
                </div> 
                </form>    
                </div>
    </body>
</html>


