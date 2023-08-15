<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "dp.php";
    $popup = "popup";
    if(isset($_SESSION['adminName'])){
        echo '
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Varela+Round&display=swap");
        *{
            font-family: "Varela Round", sans-serif;
            box-sizing: border-box;
        }
        body{
            background: url(img/login_signup_background.gif);
            padding-top: 10em;
            height:10000px;
        }
        
        .main{
            display: flex;
            flex-wrap: wrap;
        }
        
        .container{
            background:transparent ;
            color: white;
            width: 45%;
            margin: 25px auto;
            display: flex;
            border: 2px solid white;
            border-radius: 15px;
        }
        
        .left,.right{
            padding: 10px 15px;
        }
        
        .left{
            width: 30%;
        }
        
        h6{
            font-weight: 900;
        }
        
        .right{
            width: 70%;
        }
        
        button {
            color: #171820;
            height: 30px;
            padding: 5px 20px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        .nodata{
          display: flex;
          width: 45%;
          background:transparent ;
          color: white;
          margin: 40px auto;
          display: flex;
          border: 2px solid white;
          border-radius: 15px;
      }
      
      .sorry{
          margin-top: 70px;
      }

      .popup{
        display: none;
      position: fixed;
      padding: 10px;
      left: 50%;
      top: 0;
      margin: 200px 0px 0px -160px;
      background: #FFF;
      z-index: 20;
    }
    .pop_head{
        width: 100%;
        display: block;
        margin: auto;
        padding: 10px;
    }
    
    .logo{
        width: 150px;
    }
    
    .details{
        font-family: "Varela Round", sans-serif;
    }
    
    .details h5{
        margin: 10px 0px;
    }
    
    
    #popup:after {
        position: fixed;
        content: "";
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(0,0,0,0.5);
        z-index: -2;
      }
      
      #popup:before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: #fff;
        z-index: -1;
      }
        
        @media (max-width:1000px) {
            .container,.nodata{
                width: 100%;
            }
        }
        
        @media (max-width:400px) {
            .container,.nodata{
                flex-direction: column;
            }
            .left,.right{
                width: 100%;
            }
            .popup{
              left: 0%;
              margin: 200px 0px;
            }
        }
            </style>
        </head>
        <body>
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="Home.php"><img class="logo" src="img/logo.png" alt=""></a>
                  <!-- search bar -->
                  <form class="d-flex mt-3" role="search" action="home.php" method="post">
                    <input class="form-control me-2" type="text" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-outline-success">Search</button>
                  </form>
                  <!-- search bar end -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Find all Services</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Add Your Service</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Delete Your Service</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php">Log Out</a>
                        </li>
                        
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </nav>
              <div id="popup" class="popup">
        <img src="img/logo.png" class="pop_head logo"><br>
        <div class="details">
          <h5>Provider Name :- <span class="output"></span></h5>
          <h5>Gender :- <span class="output"></span></h5>
          <h5>Service Providing :- <span class="output"></span></h5>
          <h5>Phone no :- <span class="output"></span></h5>
          <h5>Email :- <span class="output"></span></h5>
          <h5>Location :- <span class="output"></span></h5>
          <h5>Amount to pay :- <span class="output"></span></h5>
          <button class="button button2" onclick="hide()">Close</button>
        </div>
        </div>
              
              <script src="javaScript/bootstrap/bootstrap.min.js"></script>
              <script src="javaScript/script.js"></script>
              <div class="main">
        ';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $search = $_POST['search'];
            $sql = "SELECT * FROM `service_details` WHERE `service` = '$search';";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($result);
            if($row>0){
                while ($data = mysqli_fetch_assoc($result) ){
                    echo '
                    <div class="container">
                      <div class="left">
                          <h6>'.$data['name'].'</h6>
                          <button class="button button1"  onclick="show(\''.$data['name'].'\',\''.$data['gender'].'\',\''.$data['service'].'\',\''.$data['number'].'\',\''.$data['email'].'\',\''.$data['location'].'\',\''.$data['amount'].'\')">See Details</button>
                      </div>
                      <div class="right">
                          <h6>Service :- '.$data['service'].'</h6>
                          <h6>Gender :- '.$data['gender'].'</h6>
                          <h6>amout payable :- '.$data['amount'].'/-per work</h6>
                      </div>
                    </div>
                  
                  
                  ';
                }
            }
            else
                echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No Data is found.</h3>
              </div>';
        }
        else{
            $sql = "SELECT * FROM `service_details` LIMIT 10;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($result);
            if($row>0){
                while ($data = mysqli_fetch_assoc($result) ){
                    echo '
                            <div class="container">
                              <div class="left">
                                <h6>'.$data['name'].'</h6>
                                <button class="button button1"  onclick="show(\''.$data['name'].'\',\''.$data['gender'].'\',\''.$data['service'].'\',\''.$data['number'].'\',\''.$data['email'].'\',\''.$data['location'].'\',\''.$data['amount'].'\')">See Details</button>
                              </div>
                            <div class="right">
                              <h6>Service :- '.$data['service'].'</h6>
                              <h6>Gender :- '.$data['gender'].'</h6>
                              <h6>amout payable :- '.$data['amount'].'/-per work</h6>
                            </div>
                          </div>
                        
                        
                        ';
                }
            }
            else
                echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No Data is found.</h3>
              </div>';
        }
      
        echo '</div>';
    }
    else
      header("location: login.php");

?>
</body>
</html>