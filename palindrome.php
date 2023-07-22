<?php
$n=121;
$num=$n;
$reverse=0;
while(floor($n))
{
    $r=$n%10;
$reverse = $reverse*10 + $r;
$n = $n/10;
}
if($num==$reverse)
{
    echo "$num Palindrome Number";
}
else
{
    echo "$num Not A palindrome Number";
}
?>

