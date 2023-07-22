<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home-employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
        <div class="container-fluid">
          <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item fw-bold">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>

              <li class="nav-item fw-bold" style="margin-left: 150px;">
                <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
              </li>

              <li class="nav-item fw-bold " style="margin-left: 1100px;">
                <a class="nav-link active" aria-current="page" href="logout.php">Log out</a>
              </li>
             </ul>
          </div>
        </div>
      </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>