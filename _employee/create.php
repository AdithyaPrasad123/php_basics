<?php
    include 'connection.php';

    if(isset($_POST['submit']))
    {
      $empid=$_POST['empid'];
      $name=$_POST['name'];
      $mobile=$_POST['mobile'];
      $email=$_POST['email'];
      
      $hash=password_hash($_POST['password'],PASSWORD_DEFAULT);

      $filename=$_FILES["photo"]["name"];
      $tempname=$_FILES["photo"]["tmp_name"];
      $folder="./image/".$filename;
      $image=$filename;
      $uploadOk=1;
      $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));


      if($imageFileType!="png" && $imageFileType!="jpg" && $imageFileType!="jpeg" && $imageFileType!="gif")
      {
        echo "SORRY, Only PNG JPG JPEG GIF files are allowed";
        $uploadOk=0;
      }
      if($uploadOk==0)
      {
        echo "SORRY, Cannot upload photo";
      }
      else
      {
        move_uploaded_file($tempname,$folder);
      }

      $sql=mysqli_query($conn,"INSERT INTO `employee_table`( `empid`, `name`, `mobile`, `email`, `password`, `photo`) VALUES ('$empid','$name','$mobile','$email','$hash','$image')");

      if($sql)
      {
        echo '<script>alert("Registered Successfully"); window.location.href="login.php";</script>';
      }
      else
      {
        echo '<script>alert("Something Went Wrong");</script>';
      }
    }
    

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create_employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <form method="POST" enctype="multipart/form-data" class="bg-dark text-light p-3">
                    <h4 style="text-align: center;">REGISTER EMPLOYEE</h4><br>
                    <label for="empid">Employee Id</label>
                    <input type="number" name="empid" placeholder="Enter Employee Id" class="form-control"><br>

                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Name" class="form-control"><br>

                    <label for="mobile">Mobile</label>
                    <input type="number" name="mobile" placeholder="Enter Mobile" class="form-control"><br>
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control"><br>

                    <label for="password">Password</label>
                    <input type="password" name="password"  class="form-control"><br>

                    <label>Photo</label>
                    <input type="file" name="photo"><br><br>

                    <input type="submit" name="submit" value="SUBMIT" class="btn-btn-primary fw-bold" style="margin-left: 300px;">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>