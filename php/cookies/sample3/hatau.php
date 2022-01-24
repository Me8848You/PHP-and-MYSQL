<?php
    // to delete cookie 
    // first you must check the cookie is formed or not 
    if(isset($_COOKIE["alpha"]))
    {

        echo "now aba delete hunxa hai cookie yehi bata";
        setcookie("alpha","k huna sakxa ra sathii.... Yestai ta ho jindagi",time()-3600);
    }
    else
    echo "The cookie is not found ";
    // else
    //     echo "cookie is not found";
?>
<a href="banau.php">Feri banauna jam k COOKIE . Yeha vook lagi sakyoo</a>