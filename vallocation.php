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
                height: 250px;
                border-radius: 4px;
                background-color: rgba(0,0,0,.30);
                display: block;
                margin: auto;
                position: relative ;
                top: 50px;
                padding-left: 48px;
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
                <form method="post" action="vallocation_script.php">
                <div>
                    <h3 style="color: #fff;position:relative; top:10px;"> 
                        Event Id:<br> <input type="text" name="e_id" class="input_box" required>  <br>
                        Volunteer  Id:<br> <input type="text" name="v_id" class="input_box" required>  <br>
                        <br><br>
                                        <center>   <input type="submit" > </center>
                    </h3>
                </div> 
                </form>    
                </div>
    </body>
</html>





