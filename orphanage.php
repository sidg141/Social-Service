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
<div style="font-size:40px;display:block;">orphanages </div>
            <?php
            $con = mysqli_connect("localhost", "root", "", "palak_foundation")or die($mysqli_error($con));
            $query = "SELECT * FROM  orphanage";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetech_array($result);
            $i=0;
        while($i<$num){ $i++; ?>
         <div classs="box" style="width:50%; height:240px; background-color:#eee;float:left;margin:auto;">
               <div class="icon-bar">
                   <a href="#"><i class="fa  fa-home"></i>
                   <i style="font-size:20px;">
                   <?php
                   echo "$row[1]";
                   ?>
                  </i>
                   <i style="font-size:20px; width:50%">       
                   <?php
                   echo "$row[1]";
                   ?> 
                   </i>
                   </a>
          </div>
            </div> 
        <?php }?>
    </body>


