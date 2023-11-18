<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'icon.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

        * {
            font-family: 'Varela Round', sans-serif;
            box-sizing: border-box;
            color: black;
            margin: 0;
            padding: 0;
        }

        img {
            width: 70%;
            display: block;
            margin: 0px auto;
        }

        .container {
            border: 2px solid #039efc;
            width: 40%;
            margin: 80px auto;
            padding: 40px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 5px 5px 10px black;
        }

        input[type="email"],
        input[type="password"] {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid black;
            width: 100%;
            padding-bottom: 7px;
            margin-top: 30px;
            display: block;
            outline: none;
        }

        ::placeholder {
            color: black;
            font-size: 17px;
        }

        button {
            background-color: #039efc;
            border: none;
            width: 100%;
            padding: 7px;
            margin-top: 30px;
            display: block;
            color: black;
            font-weight: bold;
            border-radius: 20px;
        }

        h5 {
            margin-top: 25px;
        }

        h5 a {
            text-decoration: none;
        }

        @media (max-width:450px) {
            .container {
                width: 100%;
                margin: 80px 0px;
                border: none;
            }
        }
    </style>
</head>

<body>
    <div class="background"></div>
    <div class="container">
        <img src="img/login.gif" alt="">
        <div>
            <h1>Login</h1>
            <form action="login.php" method="post">
                <input class="active" type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="password" required>
                <button>Login</button>
            </form>
            <h5>Don't have an account? <a href="register.php">Register</a></h5>
        </div>
    </div>
    <script src="javaScript/sweetalert.mn.js"></script>
</body>

</html>

<?php
include 'dp.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user_detail` WHERE `email` = '$email' and `password` = '$password';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        $data = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['adminName'] = $data['name'];
        echo '<script>swal("login successful!", "Welcome back ' . $data["name"] . '!", "success")
            .then((value) => {
                window.location.href =
                    "home.php";
            });</script>';
    } else {
        echo '<script>swal ( "Oops" ,  "Invalid Email and Password!" ,  "error" );</script>';
    }
}

?>