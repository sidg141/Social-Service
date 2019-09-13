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
            <div class="sign_up">
                <form method="post" action="transfer_script.php">
                <div>
                    <h3 style="color: #fff;position:relative; top:10px;"> 
                        orphanage name:<br> <input type="text" name="oname" class="input_box" required>  <br>
                        o_id:<br> <input type="text" name="o_id" class="input_box" required>  <br>
                        amount:<br> <input type="text" name="amount" class="input_box" required> <br>
                        admin id:<br> <input type="email" name="a_email" class="input_box" required> <br>
                        password:<br> <input type="password" name="a_pass" class="input_box" required> <br>
                                        <center>   <input type="submit" > </center>
                    </h3>
                </div> 
                </form>    
                </div>
    </body>
</html>




