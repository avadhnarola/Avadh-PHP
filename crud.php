

<?php
    include("config.php");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $radio = $_POST['radio'];
        $language = $_POST['language'];
        if(isset($_GET['upd_id'])){
            $query = "update userdata set name='$name' where Id=".$_GET['upd_id'];
        }
        else{
            $query = "insert into userdata(name,email,password,radio,language ) values ('$name','$email','$password','$radio','$language')";
        }
        mysqli_query($conn,$query);
        header('Location:select.php');// ek var updqate thay pchi select.php ma move thaay
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .form .inp {
            padding: 7px;
            margin-bottom: 5px;
            border-radius: 20px;
            border: 1px solid black;
            display: flex;
            margin-left: 5px;
            width: 90%;
           
        }

        .form {
            margin-top: 20px;
            border: 2px gray solid;
            border-radius: 10px;
            background-color: rgb(0,0,0,0.1);
            
        }

        .main {
            text-align: center;
            margin: auto;
            width: 30%;
        }

        p {
            color: gray;
            text-align: left;
            margin-left: 15px;
            text-transform: uppercase;
            font-weight: 600;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form .btn {
            width: 40%;
            margin: auto;
            margin-bottom: 10px;
        }
        .form .btn:hover{
            background-color: rgb(0, 0, 0);
            transition: all ease-in-out 0.3s;
            color: rgb(255, 255, 255);
        }

        .rad {
            width: 50%;
        }

        #box {
            float: left;
            margin-left: 5px;
        }
        label{
            color: rgb(126, 124, 124);
            float: inline-start;
            margin-left: 5px;
        }
        #lang{
            padding: 5px;
            margin: 2px 0px 5px -5px;
        }
    </style>
</head>

<body>


    <div class="main">
        <div class="form">

            <h2 style="margin-top: 20px;">CRUD Operation</h2>

            <form method="post">
                <p>Enter Name *</p>
                <input type="text" name="name" class="inp"><br>
                <p>Enter Email *</p>
                <input type="email" name="email" class="inp"><br>
                <p>Enter Password</p>
                <input type="password" name="password" class="inp" ><br>
                <div class="rad">
                    <input type="radio" name="radio" id="box" value="Web Designing" ><label for="">Web Designing</label> <br>
                    <input type="radio" name="radio" id="box" value="FullStack Developer" ><label for="">FullStack Developer</label> <br>
                    <input type="radio" name="radio" id="box" value="Flutter Developer  " ><label for="">Flutter Developer </label><br>
                    <label for="lang" id="lang">Language</label>
                    <select name="language" id="lang">
                        <option name="language" value="javascript">JavaScript</option>
                        <option name="language" value="php">PHP</option>
                        <option name="language" value="java">Java</option>
                        <option name="language" value="golang">Golang</option>
                        <option name="language" value="python">Python</option>
                        <option name="language" value="c#">C#</option>
                        <option name="language" value="C++">C++</option>
                        <option name="language" value="erlang">Erlang</option>
                    </select>
                </div>
                <input type="submit" name="submit" class="btn inp">
            </form>
        </div>
    </div>
</body>

</html>