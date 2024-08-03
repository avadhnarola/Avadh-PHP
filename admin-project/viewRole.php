<?php
include ('config.php');
include ('dashboard.php');
// session_start();
if (!isset($_SESSION["id"])) {
    header('Location:index.php');
}

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // echo $search;die();

    $sel = "select * from role where rname like '%$search%'";
} else {
    $sel = "select * from role";

}
// $sel = "select * from role";

$res = mysqli_query($conn, $sel);


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
            text-align: center;
        }
        thead th{
            border-bottom: 1px solid black;
            text-align: center;
        }

        .flex {
            margin: 30px 300px 0px 310px;
            box-shadow: 0px 0px 10px gray;
            border-radius: .25rem;
            padding: 2px 10px;
            width: 30%;
        }

        table {
            margin: auto;
        }
    </style>

</head>

<body>

    <div class="flex">
        <!-- <form action="" method="get" class="frm">
            <input type="text" name="search" id="">
            <input type="submit" value="sumbit" style="margin-bottom:30px;">
        </form> -->
        
        <table class="table table-hover table-striped table table-sm">
            <thead>
                <th>RoleId</th>
                <th>Name</th>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $row['r_id'] ?></td>
                    <td><?php echo $row['rname'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>