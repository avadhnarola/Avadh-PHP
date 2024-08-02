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
            /* text-align: center; */
        }

        .flex {
            justify-content: center;
            margin-right: 300px;
            margin-left: 310px;
        }

        table {
            margin: auto;
        }

        .container {
            display: flex;
            /* justify-content: center; */
            align-items: center;
            height: 35px;
        }

        .input {
            max-width: 190px;
            height: 100%;
            outline: none;
            font-size: 14px;
            font-weight: 500;
            background-color: #53535f;
            caret-color: #f7f7f8;
            color: #fff;
            padding: 7px 10px;
            border: 2px solid transparent;
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
            margin-right: 1px;
            transition: all .2s ease;
        }

        .input:hover {
            border: 2px solid rgba(255, 255, 255, 0.16);
        }

        .input:focus {
            border: 2px solid #a970ff;
            background-color: #0e0e10;
        }

        .search__btn {
            border: none;
            cursor: pointer;
            background-color: rgba(42, 42, 45, 1);
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
            height: 100%;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search__btn:hover {
            background-color: rgba(54, 54, 56, 1);
        }
        
    </style>

</head>

<body>

    <div class="flex">
        <form action="" method="get">
            <div class="container">
                

                <input type="text" name="search" class="input" placeholder="Dark Twitch Search">
                <button class="search__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
                        <path
                            d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"
                            fill="#efeff1"></path>
                    </svg>
                </button>
            </div>
        </form>
        <table class="table table-hover table-striped table-success table-sm">
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