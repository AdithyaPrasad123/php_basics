<?php
include 'connection.php';

$sql=mysqli_query($conn,"SELECT * FROM `login`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
    <style>
        td{text-align: center;}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
               
                    <table class="table table-boadered table bg-dark text-light">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Age</th>
                                <th style="text-align: center;">Place</th>
                                <th style="text-align: center;" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row=mysqli_fetch_assoc($sql))
                            {?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['place']; ?></td>
                                <td><a href="edit.php ?id= <?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                            
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
