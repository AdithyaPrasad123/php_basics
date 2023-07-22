<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $course=$_POST['course'];

    $filename=$_FILES["image"]["name"];
    $tempname=$_FILES["image"]["tmp_name"];
    $folder="./image/".$filename;
    $image=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));

    if($imageFileType!="png" && $imageFileType!="jpg" && $imageFileType!="jpeg" && $imageFileType!="gif")
    {
        echo "SORRY, PNG JPEG JPG and GIF files are allowed";
        $uploadOk=0;
    }
    if($uploadOk==0)
    {
        echo "Sorry can't upload file";
    
    }
    else
    {
        move_uploaded_file($tempname,$folder);
    }
    $qual =implode(',',$_POST['qulification']) ;

    $sql=mysqli_query($conn,"INSERT INTO `student`(`name`, `dob`, `email`, `mobile`, `gender`, `address`, `city`, `pincode`,`qulification`, `image`, `course`)
     VALUES ('$name','$dob','$email','$mobile','$gender','$address','$city','$pincode','" . $qual . "','$image','$course')");
//$log =mysqli_insert_id($conn);



    

     if($sql)
     {
        echo '<script>alert("Registered Successfully");window.location.href="read.php";</script>';
     }
     else
     {
        echo '<script>alert("Registered Successfully");</script>';
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5" >
                <form method="POST" class="p-3 bg-info text-light" enctype="multipart/form-data">
                    <h4 class="text-center text-primary">STUDENT REGISTRATION FORM</h4>

                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required><br>

                    <label for="dob">DOB</label>
                    <input type="date" name="dob" class="form-control" required><br>

                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required><br>

                    <label for="mobile">Mobile</label>
                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number" required><br>

                    <label for="gender">Gender</label><br>
                    <input type="radio" id="male" name="gender" value="Male" >
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female" >
                    <label for="female">Female</label>
                    <input type="radio" id="others" name="gender" value="Others" >
                    <label for="others">Others</label><br><br>

                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="5" rows="3" class="form-control" required></textarea><br>

                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" placeholder="Enter City" required><br>

                    <label for="pin">Pin Code</label>
                    <input type="number" name="pincode" class="form-control" placeholder="Enter Pin Code" required><br>

                    <label for="qulification">Qulification</label><br>
                    <input type="checkbox" name="qulification[]" id="sslc" value="SSLC">
                    <label for="sslc">SSLC&nbsp;</label>
                    <input type="checkbox" name="qulification[]" id="+2" value="+2">
                    <label for="+2">+2&nbsp;</label>
                    <input type="checkbox" name="qulification[]" id="diploma" value="Diploma">
                    <label for="diploma">Diploma&nbsp;</label>
                    <input type="checkbox" name="qulification[]" id="degree" value="Degree">
                    <label for="degree">Degree&nbsp;</label>
                    <input type="checkbox" name="qulification[]" id="others" value="Others">
                    <label for="others">Others</label><br><br>

                    <label for="course">Course</label><br>
                    <select name="course" id="course" class="form-control ">
                        <option value="">select</option>
                        <option value="php">PHP</option>
                        <option value="flutter">Flutter</option>
                        <option value="mern">MERN</option>
                        <option value="ui/ux">UI/UX</option>
                      </select><br><br>

                    <label for="image">Image</label>
                    <input type="file" name="image"><br><br>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left: 310px;">

                    
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>