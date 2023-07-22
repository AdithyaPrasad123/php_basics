<?php
include 'connection.php';
$id=$_GET['id'];

$sql=mysqli_query($conn,"DELETE FROM `form` WHERE id='$id'");

if($sql)
{
    echo'<script>alert("Deleted Successfully");window.location.href="read.php";</script>';
}
else
{
    echo'<script>alert("Something Went Wrong");</script>';
}
?>