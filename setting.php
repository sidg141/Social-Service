 

 <html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link type="text/javascript" href="navscript.js">
        <style>
            body{
                background-image: url(img/h1.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 100%;
                margin: 0px;
            }
            .sign_in{
                width: 271px;
                height: 200px;
                border-radius: 4px;
                background-color: rgba(0,0,0,.20);
                display: block;
                margin: auto;
                position: relative ;
                top: 200px;
                border-radius: 15px;
            }
            .input_box{
                width: 250px;
                height: 30px;
                border-radius: 10px;
                
            }
            .top{
                width: 22%;
                height: 50px;
                
                float: right;
                font-size: 22px;
            }
            a.hover{
                color: red
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
        </style>
           
    </head>
    <body>
            <?php include 'header.php'; ?>
        <div class="sign_in">
            <form method="post" action="setting_script.php">
                <h3 style="color: #0080ff;position:relative; top:20px;"> 
                    old password: 
                    <br>
                    <input type="password" name="old-pass" class="input_box"  placeholder="old password" > 
                    <br>
                     new-password: 
                    <br>
                    <input type="password" name="new-pass" class="input_box" placeholder="new password"> 
                    <br>
                    confirm new-password: 
                    <br>
                    <input type="password" name="new-pass1" class="input_box" placeholder="new password"> 
                    <br>
                    <br><br>
                    <?php echo $_SESSION['email'];?>
                    <center><input type="submit" style=""></center>
                </h3>
            </form>
        </div>
    </body>
</html>


