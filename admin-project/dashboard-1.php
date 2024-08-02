<?php
session_start();
if (!isset($_SESSION["id"])) {
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
                   initial-scale=1.0">
    <title>dashbord</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zain:wght@200;300;400;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid d-flex main">
            <div class="left">
                <h3>Admin Panel</h3>
            </div>
            <div class="right">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="search">
                    <input class="btn btn-outline-light" type="submit" value="search"></input>
                </form>

            </div>
        </div>
    </header>
    <div class="sidebar">
        <div class="dashname">

            <div class="nav-option option1">
                <h5><a href="index.php"> Dashboard</a></h5>
            </div>

            <div class="option2 nav-option">
                <h5><a href="register.php">Add Admin</a></h5>
            </div>

            <div class="nav-option option3">
                <h5><a href="viewAdmin.php">View Admin Data</a></h5>
            </div>

            <div class="nav-option option4">
                <h5><a href="branch.php">Add Branch</a></h5>
            </div>

            <div class="nav-option option5">
                <h5><a href="viewBranch.php">View Branch Data</a></h5>
            </div>

            <div class="nav-option option6">
                <h5><a href="role.php">Add Role</a></h5>
            </div>

            <div class="nav-option option6">
                <h5><a href="viewRole.php">View Role Data</a></h5>
            </div>
            <div class="nav-option option6">
                <h5><a href="logout.php">Log Out</a></h5>
            </div>

        </div>
        <div class="main">
            
        </div>
    </div>
</body>

</html>