<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POSt">
        <input type="number" name="first" placeholder="first number"><br>
        <input type="number" name="second" placeholder="second number"><br>
        <input type="number" name="third" placeholder="third number"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"]))
    {
        $a=$_POST["first"];
        $b=$_POST["second"];
        $c=$_POST["third"];
        if($a>$b && $a>$c)
        {
            echo $a." is greater";
        }
        elseif($b>$a && $b>$c)
        {
            echo $b." is greater";
        }
        else
        {
            echo $c." is greater";
        }
}
?>