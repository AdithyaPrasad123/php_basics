<?php
include 'connection.php';
$sql=mysqli_query($conn,"SELECT * FROM `student`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read__student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
            <table class="table table-bordered table mt-5 bg-info">
        <thead>
            <tr>
                <th>Name</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Address</th>
                <th>City</th>
                <th>Pin Code</th>
                <th>Qulification</th>
                <th>Image</th>
                <th>Course</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_assoc($sql))
            { ?>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["dob"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["mobile"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
                    <td><?php echo $row["pincode"]; ?></td>
                    <td><?php echo $row["qulification"]; ?></td>
                    <td><img src="./image/<?php echo $row['image']; ?>" width="75" height="75"></td>
                    <td><?php echo $row["course"]; ?></td>
                    <td><a href="edit1.php ?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php ?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
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