<?php
include 'connection.php';

$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM students where id='$id'");

$data=mysqli_fetch_assoc($sql);

if(isset($_POST['update']))
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

    $sql=mysqli_query($conn,"UPDATE `students` SET `name`='$name',`rollno`='$rollno',`age`='$age',`department`='$dept',`address`='$address',`phone`='$phone',`email`='$email',`photo`='$image' WHERE id=$id");

    if($sql)
    {
        echo '<script>alert("Updated Successfully"); window.location.href="read.php";</script>';
    }
    else
    {
        echo '<script>alert("Something Wentb Wrong");windows.location.href="read.php";</script>'; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" >
                <form method="post" class="mt-5 bg-dark text-light p-3" enctype="multipart/form-data">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>"><br>

                    <label>Register Number</label>
                    <input type="number" name="rollno" class="form-control" value="<?php echo $data['rollno']; ?>"><br>

                    <label>Age</label>
                    <input type="number" name="age" class="form-control" value="<?php echo $data['age']; ?>"><br>

                    <!-- <label>Department</label>
                    <input type="text" name="dept" class="form-control" value="<?php echo $data['dept']; ?>"><br> -->

                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $data['address']; ?>"><br>

                    <label>Phone</label>
                    <input type="number" name="phone" class="form-control" value="<?php echo $data['phone']; ?>"><br>

                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>"><br>

                    <label>Photo</label>
                    <input type="file" name="photo" ><br><br>

                    <input type="submit" name="update" class="btn btn-primary" value="UPDATE">
                    
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>