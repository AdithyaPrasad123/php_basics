<?php
include 'connection.php';

session_start();

if(isset($_POST['submit']))
{
    $username=$_POST['email'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * FROM `employee_table` WHERE email='$username'");

    if($sql)
    {
        $row=mysqli_fetch_assoc($sql);
        $hash=password_verify($password,$row['password']);
        $count=mysqli_num_rows($sql);
    }
    if($count==1 && $hash)
        {
            $_SESSION['id'] = $row['id'];
            ?>
            <script>window.location.href="home.php";</script>
            <?php
        }
    else
    {
        echo'<script>alert("Invalid username or password");window.location.href="login.php";</script>';
        // echo "invalid username and password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <form method="post" class="p-3 bg-info">
                    <h4 style="text-align: center;">LOGIN</h4>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <table>
                        <thead>
                            <tr><th colspan="2"></th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="submit" name="submit" value="Submit" class="btn btn-primary"></td>
                                <td><a class="btn btn-primary" href="create.php" role="button" style="margin-left: 230px;">Signin</a></td>
                            </tr>
                        </tbody>
                    </table>

                   
                    <!-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> -->
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>