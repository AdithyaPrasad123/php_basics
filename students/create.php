<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $age=$_POST['age'];
    $dept=$_POST['dept'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $filename=$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="./image/".$filename;
    $image=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    if($imageFileType!="png" && $imageFileType!="jpg" && $imageFileType!="jpeg" && $imageFileType!="gif")
    {
        echo "Sorry, only jpg, png,jpeg,gif files are allowed";
        $uploadOk=0;
    }

        if($uploadOk==0)
        {
            echo "Sorry";
        }
        else{
            move_uploaded_file($tempname,$folder);
        }

    $sql=mysqli_query($conn,"INSERT INTO `students`( `name`, `rollno`, `age`, `department`, `address`, `phone`, `email`, `photo`) VALUES ('$name','$rollno','$age','$dept','$address','$phone','$email','$image')");

    if($sql)
    {
        echo '<script>alert("Successfully Registered");window.location.href="read.php";</script>';
    }
    else
    {
        echo '<script>alert("Something went Wrong!!");</script>';
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
                <form method="post" class="bg-dark text-light p-3" enctype="multipart/form-data">
                    <h3 class="text-center">STUDENT REGISTER</h3>
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required><br>

                    <label for="rollno">Register Number</label>
                    <input type="number" name="rollno" class="form-control" placeholder="Enter Register Number" required><br>

                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control" placeholder="Enter Age" required><br>

                    <label for="department">Department</label>
                    <input type="text" name="dept" class="form-control" placeholder="Enter Department" required><br>

                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="EnterAddress" required></textarea><br>

                    <label for="phone">Phone Number</label>
                    <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required><br>

                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required><br>

                    <label for="image">Image</label>
                    <input type="file" name="photo" required><br><br>

                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>