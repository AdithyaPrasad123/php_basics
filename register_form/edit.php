<?php
include 'connection.php';

$id=$_GET['id'];
// $id="5";

$sql=mysqli_query($conn,"SELECT * FROM form WHERE id='$id'");
$data=mysqli_fetch_assoc($sql);

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"UPDATE `form` SET `name`='[$name]',`email`='$email',`mobile`='$mobile',`address`='$address' WHERE id=$id");

   

    if($sql)
    {
        echo '<script>alert("Upadated Successfully");window.location.href="read.php";</script>';
    }
    else
    {
        echo '<script>alert("Something went wrong");window.location.href="read.php";</script>';
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
            <div class="col-4 mt-5">
                <form method="post" class="bg-dark text-light p-3">

                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control"><br>

                    <label>Email</label><br>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>"><br>

                    <label>Mobile</label><br>
                    <input type="number" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?>"><br>

                    <label for="address">Address</label>
                    <input type="text" name="address" value="<?php echo $data['address']; ?>" class="form-control"><br><br>

                    <button type="submit" name="update" class="btn btn-primary text-dark"><b>Update</b></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>