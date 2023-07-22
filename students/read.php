<?php
include 'connection.php';
$sql=mysqli_query($conn,"SELECT * FROM `students`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mt-5">
                <table class="table table-bodered boder-primary p-3 bg-dark text-light text-center">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Register Number</th>
                        <th>Age</th>
                        <th>Department</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($row=mysqli_fetch_assoc($sql))
                        { ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['rollno']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['dept']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><img src="./image/<?php echo $row['photo']; ?>" width="75" height="75"></td>
                            <td><a href="edit.php ?id= <?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</td>   
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>