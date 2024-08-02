<?php
include ('config.php');
include ('dashboard.php');
// session_start();
if (!isset($_SESSION["id"])) {
    header('Location:index.php');
}
if (isset($_GET['search'])) {
    $name = $_GET['search'];
    $select = "select id,name,email,password,contact,branch.bname,role.rname,image from admin INNER JOIN role ON admin.r_id = role.r_id INNER JOIN branch ON admin.b_id = branch.b_id where admin.name like '%$name%'";
} else {
    $select = "select id,name,email,password,contact,branch.bname,role.rname,image from admin INNER JOIN role ON admin.r_id = role.r_id INNER JOIN branch ON admin.b_id = branch.b_id";
}
$res = mysqli_query($conn, $select);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
        <style>
        * {
            padding: 0;
            margin: 0;
        }

        td {
            /* text-align: center; */
        }

        .flex{
          justify-content: center;
          margin-right: 10px;
          margin-left: 310px;
        }
        table {
            /* margin: auto; */
        }
    </style>

</head>

<body>

    <div class="flex">
        <form action="" method="get" class="frm">
            <input type="text" name="search" id="">
            <input type="submit" value="sumbit" style="margin-bottom:30px;">
        </form>

        <table class="table table-success table-striped table-hover table-sm">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th>Branch</th>
                <th>Role</th>
                <th>Image</th>
            </thead>

            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['contact'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['bname'] ?></td>
                    <td><?php echo $row['rname'] ?></td>
                    <td><img src="images/<?php echo $row['image'] ?>" alt="not found" height="50px" width="50px"
                            style="border-radius: 50%;"></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>