<?php
include ('config.php');
include ('dashboard.php');
// session_start();
if (!isset($_SESSION["id"])) {
    header('Location:index.php');
}


if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $sel = "select * from branch where bname like '%$search%'";
} else {
    $sel = "select * from branch";
}

$res = mysqli_query($conn, $sel);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <style>
        td {
            text-align: center;
        }

        .flex {
           margin: 0px 300px 0px 310px;
        }
    </style>
</head>

<body>
    <div class="flex">
        <form action="" method="get">
            <input type="text" name="search">
            <input type="submit" name="" id="" value="Submit">
        </form>

        <table class="table table-hover table-striped table-success table-sm">
            <thead>
                <th>BranchId</th>
                <th>Name</th>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $row['b_id'] ?></td>
                    <td><?php echo $row['bname'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>