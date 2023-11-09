<!DOCTYPE html>
<html lang="en">
<?php
    include "../dp.php";
    session_start();
    if(isset($_SESSION["username"])) {
        echo '
        <head>';
        include '../icon.php';
        echo'
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>EDIT SERVICE | ALSP</title>
            <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Varela+Round&display=swap");
        *{
            font-family: "Varela Round", sans-serif;
            box-sizing: border-box;
            color: black;
            margin: 0;
            padding: 0;
        }
        body{
            padding-top: 10em;
        }
        .logo{
            width: 90px;
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
        select,
        input[type="number"] {
            width: 100%;
            border: none;
            border-bottom: 2px solid #039efc;
            background-color: white;
        }
        input ,select{
            margin: 5px 0px;
            outline: none;
            padding: 5px;
            color:black;
        }
        input[type="radio"] {
            margin: 0 5px;
        }
        button {
            color: black;
            height: 30px;
            padding: 5px 20px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            outline: none;
            cursor: pointer;
            background-color:#039efc;
            width: 100%;
        }
        .empty{
            display: none;
        }
        .search{
            display:none !important;
        }
        @media (max-width:1300px) {
            .container form div {
            display: inline-block;
            width: 100%;
            margin: 25px 10px;
        }
        }
        @media (max-width:500px) {
            .container{
                border:none;
                width: 100%;
            }
        }
            </style>
        </head>
        <body>
        ';
              if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit'])){
                $sno = $_POST['edit'];
                $sql = "SELECT * FROM `service_details` WHERE `sno` = ('$sno');";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($result);
                if($row>0){
                    while($data = mysqli_fetch_assoc($result)){
                        $name = $data['name'];
                        $email = $data['email'];
                        $gender = $data['gender'];
                        $number = $data['number'];
                        $service = $data['service'];
                        $location = $data['location'];
                        $amount = $data['amount'];
                        $status = $data['active'];
                    }
                    echo '<div class="container">
                    <h1>Edit Service</h1>
                    <form action="editDone.php" method="post">
                        <div>
                            <label for="fname">Name<br></label>
                            <input type="text" id="fname" name="fname" value="'.$name.'" required>
                        </div>
                        <div>
                            <label for="amount">Amount<br></label>
                            <input type="number" id="amount" name="amount" value="'.$amount.'" required>
                        </div>
                        <div>
                            <label>Gender<br></label>';
                            if($gender == 'M'){
                                echo'<input type="radio" name="gender" id="male" value="M" checked="checked" required><label for="male">Male</label>';
                                echo'<input type="radio" name="gender" id="Female" value="F" required><label id="female" for="Female">Female</label>';
                            }
                            if($gender == 'F'){
                                echo'<input type="radio" name="gender" id="male" value="M" required><label for="male">Male</label>';
                                echo'<input type="radio" name="gender" id="Female" value="F" checked="checked" required><label id="female" for="Female">Female</label>';
                            }
                        echo'</div>
                        <div>
                            <label for="email">Email<br></label>
                            <input type="email" id="email" name="email" value="'.$email.'" required>
                        </div>
                        <div>
                            <label for="phoneNo">Phone Number<br></label>
                            <input type="number" id="phoneNo" name="number" value="'.$number.'" required>
                        </div>
                        <div>
                            <label for="service">Service<br></label>
                            <select name="service" id="service" required>
                                <option value="'.$service.'" selected>'.$service.'</option>
                                <option value="Designer">Designer</option>
                                <option value="Developer">Developer</option>
                                <option value="Electrician">Electrician</option>
                                <option value="Plumber">Plumber</option>
                                <option value="Constructor">Constructor</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Travel_agency">Travel agency</option>
                                <option value="Financial_services">Financial services</option>
                                <option value="Medical">Medical</option>
                                <option value="Legal_work">Legal Work</option>
                                <option value="Tutor">Tutor</option>
                                <option value="Sport_Academy">Sport Academy</option>
                                <option value="music_Academy">Music Academy</option>
                                <option value="dance_Academy">Dance Academy</option>
                                <option value="Freelancer">Freelancer</option>
                            </select>
                        </div>
                        <div>
                            <label for="location">Location<br></label>
                            
                            <select name="location" id="location" required>
                        ';
                        $sql = "SELECT DISTINCT location FROM service_details;";
                        $result = mysqli_query($conn,$sql);
                        while($data = mysqli_fetch_assoc($result)){
                            if($data["location"] == $location){
                                echo '<option value='.$data['location'].' selected>'.$data['location'].'</option>';
                            }else{
                            echo '<option value='.$data['location'].'>'.$data['location'].'</option>';
                            }
                        }
                        echo'
                        </select>
                        </div>
                        <div class="empty">
                            <input class = "empty" type="text" name="sno" value="'.$sno.'" required>
                        </div>
                        <div>
                        <label for="status">Status</label>
                        <select id="status" name="status" required>
                            <option value="'.$status.'" selected>';
                                $ac = 0;
                                $iac = 0;
                                if($status == 1){
                                    echo 'Active';
                                    $ac++;
                                }
                                else{
                                    echo 'InActive';
                                    $iac++;
                                }
                            echo'</option>
                            <option value="';
                            if($ac == 1){
                                echo '0';
                            }
                            if($iac == 1){
                                echo '1';
                            }
                            echo'">';
                                if($ac == 1){
                                    echo 'InActive';
                                }
                                if($iac == 1){
                                    echo 'Active';
                                }
                            echo'</option>
                        </select>
                    </div>
                        <button class="button">Edit Service</button>
                    </form>
                </div>
                  <script src="javaScript/bootstrap/bootstrap.min.js"></script>';
                }
            }
            else{
                echo '<script>
                    window.location.href =
                        "home.php";   
            </script>';
            }       
    }
    else{
        echo '<script>
          window.location.href =
              "login.php";
      </script>';
      }
?>
</body>
</html>