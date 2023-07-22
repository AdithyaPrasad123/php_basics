<?php
if(isset($_GET['submit']))
{
    $name=$_GET['name'];
    echo $name;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Name:<input type="text" name="name"><br>
        <input type="submit" name="submit" value="submit">

    </form>
    
</body>
</html>