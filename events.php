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
           <style>
  .icon-bar{
  width:90%;
  background-color:#555;
  overflow:auto;
  margin:10px;
  }
.icon-bar a{
    float:left;
    text-align: center;
    width:20%;
    padding:12px  0;
    transition:all .3s  ease;
    color:white;
    font-size:36px;
}
.active{
    background-color: #000;
}
 
   .hth:hover{
    background-color:#0080ff;
    color:#fff;
}
   .icon-bar:hover{
    background-color:#0080ff;
    color:#fff;
}
             </style>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         </head>
    <body>
    <?php include 'header.php' ?>
<div style="font-size:40px;display:block;">CURRENT EVENTS
    <a href="events.php" style="float:right;">view all<i class="fa  fa-plus-circle"></i></a>
        </div>
        <div class="list_box" style="padding:10px;">
            <?php
            $query = "SELECT * FROM event";
           $result = mysqli_query($con, $query)or die($mysqli_error($con));
            while($row = mysqli_fetch_array($result)){  ?>
            
                <div  classs="box" style="magin:10px;width:25%; height:240px; background-color:#26211f;float:left; color:white;">
                    <center>
                        <h4><?php echo"event name: $row[0]";?></h4>
                        <h4>
                            <?php echo "event date:$row[1]";?>
                        </h4><br>
                        <button style="color:white;border:1px solid white;background-color:transparent;"magin:10px;>
                                <a href="<?php echo "$row[2]"; ?>" style="color:white;">More detail</a>
                        </button>
                        <h4>
                            <?php echo "society name:$row[3]";?>
                        </h4>
                        <h4>
                            <?php echo "events id:$row[4]";?>
                        </h4>
                    </center>
                </div>

            <?php }?>
           </div>
    </body>
