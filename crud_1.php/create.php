<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $place=$_POST['place'];
    $age=$_POST['age'];

    $sql=mysqli_query($conn,"INSERT INTO `login`(`name`, `place`, `age`) VALUES ('$name','$place','$age')");

    if($sql)
    {
        echo '<script>alert("Added Successfully"); window.location.href="read.php";</script>';
    }
    else
    {
        echo '<script>alert("Something Went Wrong"); window.location.href="create.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <form method="POST" class="bg-dark text-white p-3">
                    <h1 class="text-light text-center ">Register</h1>
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"><br>

                    <label>Age</label>
                    <input type="number" name="age" class="form-control" placeholder="Enter Age"><br>

                    <label for="">Place</label>
                    <input type="text" name="place" class="form-control" placeholder="Enter Place"><br>

                    <button type="submit" name="submit"  class="btn btn-light " style="margin-left: 303px;"><b>Submit</b></ibutton>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>