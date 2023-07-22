<?php
include 'connection.php';
$id=$_GET['id'];

$sql=mysqli_query($conn,"DELETE FROM `employee_table` WHERE id='$id'");

if($sql)
{
    echo'<script>alert("Deleted Successfully");window.location.href="create.php";</script>';
}
else
{
    echo'<script>alert("Something Went Wrong");</script>';
}
?>