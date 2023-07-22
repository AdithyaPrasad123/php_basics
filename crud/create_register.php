<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

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
    

    $sql=mysqli_query($conn,"INSERT INTO register( name,age,phone,email,password,photo) VALUES ('$name','$age','$phone','$email','$password','$image')");

    if($sql)
    {
        echo '<script>alert("Registered Successfully"); window.location.href="read_register.php";</script>';
    }
    else
    {
        echo '<script>alert("Something Went Wrong");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form-control{
            width: 75%;
        }
    </style>

</head>
<body>
    
    <div class="container" >
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 bg-secondary mt-3">
                <form method="POST" enctype="multipart/form-data" >
                    <h1 style="text-align: center;">REGISTRATION FORM</h1>

                    <label>Name</label><br>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" required ><br><br>

                    <label>Age</label><br>
                    <input type="number" name="age" class="form-control" placeholder="Enter Age" required ><br><br>

                    <label>Phone</label><br>
                    <input type="number" name="phone" class="form-control" placeholder="Enter mobile number" required ><br><br>

                    <label>Email</label><br>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email id" required><br><br>

                    <label>Password</label><br>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required><br><br>

                    <label>Photo</label>
                    <input type="file" name="photo" required><br><br>

                    <button type="submit" class="btn btn-info mb-3" name="submit" style="margin-left: 165px;"><b>Submit</b> </button>



                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>