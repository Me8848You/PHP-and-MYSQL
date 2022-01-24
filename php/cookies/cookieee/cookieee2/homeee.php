<?php
    // aba user bata aayeko information lai apply garne thau yehi ho 
    if(isset($_COOKIE['name']))
        $Name=$_COOKIE[name];
    else
        $Name=Guest;
    if(isset($_COOKIE['bgcolor']))
        $Bgcolor=$_COOKIE['bgcolor'];
    else
        $Bgcolor=black;
    if(isset($_COOKIE[]))
        $Color=$_COOKIE['color'];
    else
        $Color=red;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabluar</title>
    <style>
        body{
            background-color:<?php echo $Bgcolor ?> ;
            color:<?php echo $Color?> ;
        }
    </style>
</head>
<body>
    
</body>
</html>

