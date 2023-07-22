<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>digit sum</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number" placeholder="check the number to be checked">
        <input type="submit" name="submit" value="CHECk">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"]))
    {
        $num=$_POST["number"];
        $n=$num;
        $sum=0;
        $rem=0;
        for ($i =0; $i<=strlen($num);$i++)  
        {  
         $rem=$num%10;  
          $sum = $sum + $rem;  
          $num=$num/10;  
         }  
        echo "Sum of digits $n is $sum";  
    }
?>

