<?php
include 'connection.php';
$id=$_GET['id'];

$sql=mysqli_query($conn,"DELETE FROM `register` WHERE id='$id'");

if($sql)
{
    echo'<script>alert("Deleted Successfully");window.location.href="read_register.php";</script>';
}
else
{
    echo'<script>alert("Something Went Wrong");</script>';
}
?>