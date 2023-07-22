<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime or not</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="CHECK">
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            $num=$_POST["number"];
            $count=0;  
            for ( $i=1; $i<=$num; $i++)  
            {  
                if (($num%$i)==0)  
                {  
                    $count++;  
                }  
            }  
                if ($count<=2)  
                 {  
                    echo "$num is a prime number.";  
                 }
                 else
                 {
                    echo "$num is not a prime number."; 
                 }
        }
    ?>
</body>
</html>

