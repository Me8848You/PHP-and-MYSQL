<?php
    // view which cookie is formed 
    if(isset($_COOKIE["name"]))
        {
            echo "Hello " . $_COOKIE["name"];
        }
    else
    {
        echo "Empty cookie ";
    }
?>
<a href="deleteee.php">Delete this cookie</a>