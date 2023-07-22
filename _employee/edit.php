<?php
include 'connection.php';

$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM `employee_table` WHERE id='$id'");
$data=mysqli_fetch_assoc($sql);
if(isset($_POST['update']))
{
  $empid=$_POST['empid'];
  $name=$_POST['name'];
  $mobile=$_POST['mobile'];
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

      $sql=mysqli_query($conn,"UPDATE `employee_table` SET `name`='$name',`mobile`='$mobile',`email`='$email',`photo`='$image' WHERE id='$id'");

      if($sql)
      {
        echo '<script>alert("Registered Successfully"); window.location.href="profile.php";</script>';
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
    <title>edit-employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        
        <form method="post" class="bg-dark text-light p-3" enctype="multipart/form-data">
        <h1>My Profile</h1>
            <label for="empid">Employee id</label>
            <input type="number" name="empid" class="form-control" value="<?php echo $data['empid']; ?>"><br>

            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>"><br>

            <label for="mobile">Mobile</label>
            <input type="number" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?>"><br>

            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>"><br>

            <label for="password">Password</label>
            <input type="number" name="password" class="form-control" value="<?php echo $data['password']; ?>"><br>

            <label for="photo">Photo</label>
            <input type="file" name="photo"><br><br>

            <input type="submit" name="update" class="btn btn-primary" value="UPDATE">
       </form>
        </div>
      </div>
    </div>
    
                  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>