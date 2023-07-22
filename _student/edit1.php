<?php
include 'connection.php';

$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM student where id='$id'");
$data=mysqli_fetch_assoc($sql);

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $qulification=$_POST['qulification'];
    $course=$_POST['course'];

    $filename=$_FILES["image"]["name"];
    $tempname=$_FILES["image"]["tmp_name"];
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

    $sql=mysqli_query($conn,"UPDATE `student` SET `name`='$name',`dob`='$dob',`email`='$email',`mobile`='$mobile',`address`='$address',`city`='$city',`pincode`='$pincode',`qulification`='$qulification',`image`='$image',`course`='$course' WHERE id=$id");

    if($sql)
    {
        echo '<script>alert("Registered Successfully"); window.location.href="read.php";</script>';
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
                <form method="post" class="mt-5 bg-info text-light p-3" enctype="multipart/form-data">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>"><br>

                    <label>DOB</label>
                    <input type="date" name="dob" class="form-control" value="<?php echo $data['dob']; ?>"><br>

                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>"><br>

                    <label>Mobile</label>
                    <input type="number" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?>"><br>

                    <label for="gender">Gender</label><br>
                    <input type="text" name="gender" class="form-control" value="<?php echo $data['gender'];?>"><br>


                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $data['address'];?>"><br>

                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" value="<?php echo $data['city'];?>"><br>

                    <label for="pin">Pin Code</label>
                    <input type="number" name="pincode" class="form-control" value="<?php echo $data['pincode'];?>"><br>

                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $data['address'];?>"><br>

                    <label for="qulification">Qulification</label>
                    <input type="text" name="qulification" class="form-control" value="<?php echo $data['qulification']; ?>"><br>

                    <label for="course">Course</label>
                    <input type="text" name="course" class="form-control" value="<?php echo $data['course'];?>"><br>
    
                    <label>Image</label>
                    <input type="file" name="image" ><br><br>

                    <input type="submit" name="update" class="btn btn-primary" value="UPDATE">
                    
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>