<?php
// Indexed array
$color=array("red","green","blue");
echo $color[2]."<br>";
echo $color[0];
?>


<br><br>


<?php
// Associative array
$age=array("peter"=>"10","banu"=>"17","Hari"=>"20");
echo "age of Peter ".$age["peter"];
?>

<br><br>

<?php
// foreach loop
$age=array("peter"=>"10","banu"=>"17","Hari"=>"20");
foreach($age as $x=> $x_value){
    echo "age of $x is $x_value"."<br>";
}
?>

<br><br>

<?php
// Mulitidimensional array
$car=array(
    array("volvo",19,20),
    array("BMW",27,27),
    array("Saab",17,16)
);
for($row=0;$row<3;$row++){
    echo "<b>$row number</b>"."<br>";
    for($col=0;$col<3;$col++){
        echo $car[$row][$col]."<br>";
    }
}
    
?>