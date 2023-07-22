<?php
$cookie_name="user";
$cookie_value="noyas";

setcookie($cookie_name,$cookie_value,time()+(86400),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie name $cookie_name is not set";
    }
    else
    {
        echo "Cookie name $cookie_name is set";
        echo "<br>";
        echo "value $_COOKIE[$cookie_name]";
    }
    ?>
</body>
</html>