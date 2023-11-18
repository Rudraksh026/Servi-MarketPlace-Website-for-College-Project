<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'icon.php';
    include 'dp.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

        * {
            font-family: 'Varela Round', sans-serif;
            box-sizing: border-box;
            color: black;
            margin: 0;
            padding: 0;
        }

        .container {
            border: 2px solid #039efc;
            width: 40%;
            margin: 80px auto;
            padding: 40px;
            border-radius: 20px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            box-shadow: 5px 5px 10px black;
        }

        .container h1 {
            width: 100%;
            margin: auto;
        }

        form {
            width: 100%;
        }

        .container form div {
            display: inline-block;
            width: 45%;
            margin: 25px 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="password"],
        input[type="number"],
        select {
            width: 100%;
            border: none;
            border-bottom: 2px solid #039efc;
        }

        input,
        select {
            margin: 5px 0px;
            outline: none;
            padding: 5px;
            color: black;
        }

        input[type="radio"] {
            margin: 0 5px;
        }

        button {
            color: black;
            background-color: #039efc;
            height: 30px;
            padding: 5px 20px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            outline: none;
            cursor: pointer;
        }

        @media (max-width:1300px) {
            .container form div {
                display: inline-block;
                width: 100%;
                margin: 25px 10px;
            }
        }

        @media (max-width:500px) {
            .container {
                border: none;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Register Yourself</h1>
        <form action="register.php" method="post">

            <div>
                <label for="fname">First Name<br></label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div>
                <?php
                echo '<label for="location">Location<br></label>
                    <select name="location" id="location" required>
                    ';
                $sql = "SELECT DISTINCT location FROM service_details;";
                $result = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    echo '<option value=' . $data['location'] . '>' . $data['location'] . '</option>';
                }
                echo '
                    </select>';
                ?>
            </div>
            <div>
                <label for="birthday">Birthday<br></label>
                <input type="date" id="birthday" name="birthday" required>
            </div>
            <div>
                <label>Gender<br></label>
                <input type="radio" name="gender" id="male" value="M" required><label for="male">Male</label>
                <input type="radio" name="gender" id="Female" value="F" required><label id="female"
                    for="Female">Female</label>
            </div>
            <div>
                <label for="email">Email<br></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phoneNo">Phone Number<br></label>
                <input type="number" id="phoneNo" name="number" required>
            </div>
            <div>
                <label for="password">Password<br></label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="cpassword">Confirm Password<br></label>
                <input type="password" id="cpassword" name="cpassword" required>
            </div>
            <button>Register</button>
        </form>
    </div>
    <script src="javaScript/sweetalert.mn.js"></script>
</body>

</html>

<?php
include 'dp.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $location = $_POST['location'];
    $sql = "SELECT * FROM `user_detail` WHERE `email` LIKE '$email';";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    if ($password == $cpassword && $rows == 0) {

        // insert into database
        $sql = "INSERT INTO `user_detail` ( `name`, `birthday`, `gender`, `email`, `number`, `password`, `created on`,`location`) VALUES ( '$name', '$birthday', '$gender', '$email', '$number', '$password', current_timestamp(),'$location');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            session_start();
            $_SESSION['adminName'] = $name;
            $_SESSION['email'] = $email;
            echo '<script>swal("Register successful!", "Login Now!", "success")
            .then((value) => {
                window.location.href =
                    "login.php";
            });</script>';
        }
    } else if ($password != $cpassword) {
        echo '<script>swal ( "Oops" ,  "Password must be same!" ,  "error" );</script>';
    } else {
        echo '<script>swal ( "Oops" ,  "Account must be exists!" ,  "error" );</script>';
    }
}
?>