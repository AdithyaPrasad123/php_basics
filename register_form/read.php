<?php
include 'connection.php';

// $id=$_GET['id'];
$id="5";

$sql=mysqli_query($conn,"SELECT * FROM `form` WHERE id=$id");

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
            <div class="col-4"></div>
            <div class="col-4 mt-5">
               
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form method="get">
                <?php while($row=mysqli_fetch_assoc($sql))
                        { ?>
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>"><br><br>

                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>"><br><br>

                    <label for="mobile">Mobile</label>
                    <input type="number" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>"><br><br>

                    <label for="address">Address</label>
                    <!-- <textarea name="address" id="address" cols="10" rows="4"></textarea> -->
                    <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>"><br><br>

                    <a href="edit.php ?id= <?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    <?php } ?>
                </form>
              
                    
            </div>
        </div>
               
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
