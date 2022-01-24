<?php
    // now to delete the cookie which if formed already
    if(isset($_COOKIE["name"]))
    {
        setcookie("name","sumannn",time()-3600);
        // syntax of deleting cookie which is already formed 

    }
    else
    {
        echo "There is no cookie available";
    }
?>
    <a href="createee.php">Go to the cookie creating page</a>