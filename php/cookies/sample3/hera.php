<?php
    // now we  have to see the cookie which are created before
    // 1. first we check if it is formed or not 
    if(isset($_COOKIE["alpha"]))
        echo "cookie is " . $_COOKIE["alpha"];
    else
        echo "cookie is not formed";
?>
<p>
    <a href="hatau.php">Wanna delete the cookie </a>
</p>