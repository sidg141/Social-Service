<html>
    <head>
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
        </style>
            
    </head>
    <body>
        
            <form action="you_can_help_script.php" method="post">
        <div class="big_one">
            <center><h2> How You Can Help  </h2> </center>
            <br>
            Email:
            <br>
            <input type="text" name="email" required placeholder="email" style="width: 210px;height: 30px; border-radius: 8px;padding-left: 8px;">
            <br>
            <br>
            Tell me something
            <br>
            <textarea  rows="7" cols="50" name="message"></textarea>
            <br>
            <br><br>
            <center> <input type="submit"> </center>
        </div>
        </form>
        
    </body>
</html>