<?php
$num=152;
$n=$num;
$result=0;
while($n!=0)
{
    $r=$n%10;
    $result=$result+($r*$r*$r);
    $n=$n/10;
}
if($result==$num)
{
    echo "Amstrong Number";
}
else
{
    echo "Not An Amstrong Number";
}

?>