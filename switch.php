<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="days">
        <input type="submit" name="submit" value="WHICH DAY">
    </form>
    
</body>
</html>


<?php
 if(isset($_POST["submit"]))
$days=$_POST["days"];

switch($days){
    case 1:{
        echo "Sunday";
        break;
    }
    case 2:{
        echo "Monday";
        break;
    }
    case 3:{
        echo "Tuesday";
        break;
    }
    case 4:{
        echo "Wednesday";
        break;
    }
    case 5:{
        echo "Thursday";
        break;
    }
    case 6:{
        echo "Friday";
        break;
    }
    case 7:{
        echo "Saturday";
        break;
    }
    default:
        echo "Invalid Day";
}
?>