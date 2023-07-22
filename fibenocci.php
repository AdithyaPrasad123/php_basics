<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibinoccie</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="PRINT">
    </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
    $n=$_POST["number"];
    $a=0;
    $b=1;
    echo $a."<br>";
    echo $b."<br>";
    for($i=3;$i<=$n;$i++)
    {
        $c=$a+$b;
        $a=$b;
        $b=$c;
        echo $c."<br>";
    }
}
?>