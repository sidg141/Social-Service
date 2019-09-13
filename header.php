<?php
require("common.php");
?>
<nav>
            <ul class="topnav" id="dc">
                <li><a href="index.php">social foundation</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="volunteer.php">Get Involved</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="donation.php">DONATE</a></li>
                <?php
                if(isset($_SESSION['email']) or isset($_SESSION['a_email']))
                {?>
                <li class="nav-right"><a href="logout.php">logout</a></li>
                <li class="nav-right"><a href="profile.php"><?php echo $_SESSION['email']; ?></a></li>
                
                <?php
                }
                else{?>
                 <li class="nav-right"><a href="adminlogin.php">admin login</a></li>
                <li class="nav-right"><a href="signup.php">Sign up</a></li>
                <li class="nav-right"><a href="signin.php">Sign in</a></li>
               
               <?php }?>
                <li class="dropdown" ><a href="javascript:void(0);" onclick="dropdownmenu()">&#9776;</a></li>
            </ul>
</nav>
        
