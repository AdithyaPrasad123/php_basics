<?php
include 'connection.php';
session_start();
$id=$_SESSION["id"];
$sql=mysqli_query($conn,"SELECT * FROM `employee_table` WHERE `id`='$id'");
$row=mysqli_fetch_assoc($sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile-employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <h1 class="text-center"><u>My Profile</u></h1>
    <table class="table table-boadered table">
         <tr>
            <th>Empid</th>
            <td><?php echo $row['empid'];?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $row['name'];?></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><?php echo $row['mobile'];?></td>
        </tr>
        <!-- <tr>
            <th>Email</th>
            <td><?php echo $row['email'];?></td>
        </tr> -->
        <!-- <tr>
            <th>Password</th>
            <td><?php
             $hash=password_verify($password,$row['password']);
            echo $row['hash'];?></td>
        </tr> -->
        <tr>
            <th>Photo</th>
            <td><img src="./image/<?php echo $row['photo']; ?>" width="75" height="75"></td>
        </tr>
        <tr>
            <td><a href="edit.php ?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>
            <td><a href="delete.php ?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
            <td><a href="logout.php ?id=<?php echo $row['id']; ?>"class="btn btn-info">LogOut</a></td>
        </tr>
        
    </table>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>