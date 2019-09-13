  <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Palak foundation</title>
        <link rel="stylesheet" type="text/css" href="style.css">
                <script>
           function dropdownmenu() {
               var x=document.getElementById("dc");
               if(x.className=== "topnav")
               {
                   x.className+=" responsive";
               }
               else
                   x.className= "topnav";
           }
         </script> 
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         </head>
    <body>
    <?php include 'header.php' ?>
        <div class="container">
            <div class="list_box">
                <div>
                    <h1><a href="addevent.php" target="_blank">add events</a></h1><hr>
                    <h1><a href="addorphanages.php" target="_blank">add orphanages</a></h1><hr>
                    <h1><a href="transferfund.php" target="_blank">transfer fund</a></h1><hr>
                    <h1><a href="vallocation.php" target="_blank">allocate volunteer to events</a></h1><hr>
                </div>
            </div>
        </div>
    </body>




