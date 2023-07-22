<?php 
$i="ENGLISH";
// echo $i."<br>";
$j=$i;
$h=strrev($j);
// echo $h;
if($i==$h)
{
    echo $i." is palindrome ".$h;
}
else{
    echo $i." is not palindrome ".$h;
}

?>