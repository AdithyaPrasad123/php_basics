
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd</title>
</head>
<body>
    <form  method="POST">
        <input type="number" name="odd">
        <input type="submit" name="submit" value="PRINT">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
   
    $j=$_POST["odd"];
    for($i=1;$i<=$j;$i=$i+2)
    {
    echo $i."<br>";
    }
}


?>