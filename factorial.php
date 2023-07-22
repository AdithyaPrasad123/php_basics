<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="FACTORIAL">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
    $num=$_POST["number"];
    $factorial = 1;  
    for ($x=$num; $x>=1; $x--)   
    {  
    $factorial = $factorial * $x;  
    }  
    echo "Factorial of $num is $factorial";  
}
?>