<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "dp.php";
    if(isset($_SESSION['adminName'])){
        echo '
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>EDIT SERVICE | ALSP</title>
            <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Varela+Round&display=swap");
        *{
            font-family: "Varela Round", sans-serif;
            box-sizing: border-box;
            color: white;
            margin: 0;
            padding: 0;
        }
        body{
            background: url(img/login_signup_background.gif);
            padding-top: 10em;
        }
        .logo{
            width: 150px;
        }
        .container {
            border: 2px solid rgba(255, 255, 255, 0.523);
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
            border-bottom: 2px solid white;
            background-color: #393c51;
        }

        input ,select{
            margin: 5px 0px;
            outline: none;
            padding: 5px;
            color:white;
        }

        input[type="radio"] {
            margin: 0 5px;
        }

        button {
            color: #171820;
            height: 30px;
            padding: 5px 20px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .empty{
            display: none;
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
            <nav class="navbar bg-body-tertiary fixed-top" style="background-color: white !important;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="Home.php"><img class="logo" src="img/logo.png" alt=""></a>
                  
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:black;">Welcome, '.$_SESSION["adminName"].' on ALSP</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="addYourService.php">Add Your Service</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="deleteService.php">Delete Your Service</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php">Log Out</a>
                        </li>
                        
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </nav>';
        


              if($_SERVER['REQUEST_METHOD']=='GET'){
                $sno = $_GET['edit'];
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
                    }
                    echo '<div class="container">
                    <h1>Add Service</h1>
                    <form action="edit_success.php" method="post">
                        <div>
                            <label for="fname">Name<br></label>
                            <input type="text" id="fname" name="fname" value="'.$name.'" required>
                        </div>
                        <div>
                            <label for="amount">Amount<br></label>
                            <input type="number" id="amount" name="amount" value="'.$amount.'" required>
                        </div>
                        <div>
                            <label>Gender<br></label>
                            <input type="radio" name="gender" id="male" value="M" required><label for="male">Male</label>
                            <input type="radio" name="gender" id="Female" value="F" required><label id="female" for="Female">Female</label>
                        </div>
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
                            <input type="text" id="location" name="location" value="'.$location.'" required>
                        </div>
                        <div class="empty">
                            <input class = "empty" type="text" name="sno" value="'.$sno.'" required>
                        </div>
                        <button>Edit Service</button>
                    </form>
                </div>
                    
            
                  <script src="javaScript/bootstrap/bootstrap.min.js"></script>';
                }
            }
              
        

            
    }


?>
</body>
</html>