<?php
include 'connection.php';

session_start();
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * FROM `login_table` WHERE username='$username'");

    if($sql)
    {
        $row=mysqli_fetch_assoc($sql);
        $hash=password_verify($password,$row['password']);
        $count=mysqli_num_rows($sql);

        if($count==1 && $hash)
        {
            $_SESSION['id']=$row['id'];
            ?>
            <script>window.location.href="index.php";</script>
            <?php
        }
    }
    else
    {
        echo "invalid username and password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="conatainer">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <form method="POST" class="bg-info p-3">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="margin-left: 170px;" name="submit">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>