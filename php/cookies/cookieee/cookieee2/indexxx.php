<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML form</title>
</head>
<body>
    <form action="processs.php" method="post">
        <h2>Please provide the following information to See the MAGIC</h2>
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="bgcolor">Backgroud Color:</label>
            <input type="text" name="bgcolor" id="bgcolor">
        </p>
        <p>
            <label for="color">Font color:</label>
            <input type="text" name="color" id="color">
        </p>
        <p>
            <input type="submit" value="Apply">
        </p>
    </form>

</body>
</html>