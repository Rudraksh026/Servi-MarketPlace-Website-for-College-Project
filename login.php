<?php
    include 'dp.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `user_detail` WHERE `email` = '$email' and `password` = '$password';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row>0){
            $data = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['adminName'] = $data['name'];
            header("location: home.php");
        }
        else{
            echo "<script>alert('Invalid Email and Password');</script>";
        }
    }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

        * {
            font-family: 'Varela Round', sans-serif;
            box-sizing: border-box;
            color: white;
            margin: 0;
            padding: 0;
        }

        body {
            background: url(img/login_signup_background.gif);
            background-size: 200% 200%;
            background-size: cover;
        }

        img {
            width: 70%;
            display: block;
            margin: 0px auto;
        }

        .container {
            border: 2px solid rgba(255, 255, 255, 0.523);
            width: 40%;
            margin: 80px auto;
            padding: 40px;
            text-align: center;
            border-radius: 20px;
        }

        input[type="email"],
        input[type="password"] {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid white;
            width: 100%;
            padding-bottom: 7px;
            margin-top: 30px;
            display: block;
            outline: none;
        }

        ::placeholder {
            color: white;
            font-size: 17px;
        }

        button {
            background-color: white;
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
        <img src="img/login_signup_image.gif" alt="">
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
</body>

</html>