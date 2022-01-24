<?php
    // aba form (index.php) bata aayeko information haru collect garnee yeha....
    if($_SERVER['METHOD']=="POST")
        {
            if(isset($_POST['name']))
                {
                    setcookie("name",$_POST['name'],time()+3600);
                }
            if(isset($_POST['bgcolor']))
                {
                    setcookie("bgcolor",$_POST['bgcolor'],time()+3600);
                }
            if(isset($_POST['color']))
                {
                    setcookie("color",$_POST['color'],time()+3600);
                }
            // redirect to the home page 
            header('location:homeee.php');
        }
        else
        {
            header('location:indexxx.php');
        }