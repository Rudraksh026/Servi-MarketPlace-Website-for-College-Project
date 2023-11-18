<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "dp.php";
if (isset($_SESSION['adminName'])) {
  echo '
        <head>';
  include 'icon.php';
  echo '
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home | ALSP</title>
            <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Varela+Round&display=swap");
        *{
            font-family: "Varela Round", sans-serif;
            box-sizing: border-box;
        }
        body{
            padding-top: 15em;
        }
        
        .main{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .container{
            background:transparent ;
            color: black;
            width: 20%;
            height: 400px;
            margin: 25px 10px;
            display: flex;
            border: 2px solid #039efc;
            border-radius: 15px;
            flex-direction: column;
            box-shadow: 5px 5px 10px black;
        }
        
        .left,.right{
            padding: 10px 15px;
        }
        
        .left{
            width: 40%;
        }

        .container .left,.container .right{
          height: 50%;
          width: 100%;
      }
        
        h6{
            font-weight: 900;
        }
        
        .right{
            width: 60%;
        }
        
        .button {
          width:100%;
            color: white;
            background-color: black;
            height: 30px;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            outline: none;
            margin: 3px 0px;
            box-shadow: 5px 5px 10px black;
        }
        .button:hover{
          color:black;
          background-color: #039efc;
        }

        .nodata{
          display: flex;
          width: 45%;
          background:transparent ;
          color: black;
          margin: 40px auto;
          display: flex;
          border: 2px solid #039efc;
          border-radius: 15px;
      }
      
      .sorry{
          margin-top: 70px;
      }
    
    .logo{
        width: 90px;
    }
      .sort{
        width: 45%;
        color: black;
        margin: auto;
      }

      .left img{
        border-radius: 50%;
      }

      .search{
        width:30%;
      }

      .search_btn{
        background-color: black;
        color:white;
      }

      .search_btn:hover{
        background-color: #039efc;
        color:black;
      }
        
        @media (max-width:1000px) {
            .container,.nodata{
                width: 45%;
                flex-direction: column;
            }
            .sorry{
              margin-top:0px;
            }
            .left,.right{
              width: 100%;
          }
          .search{
            width:50%;
          } 
        }
        
        @media (max-width:450px) {
          .container{
            width: 100%;
          }
          .search{
            width:90%;
          } 
            .nodata{
                flex-direction: column;
            }
            .left,.right{
                width: 100%;
            }
        }
            </style>
        </head>
        <body>
            ';
  include "nav.php";
  echo '
              <script src="javaScript/bootstrap/bootstrap.min.js"></script>
      </div>
      <form class="container-fluid search" action="home.php" method="post">
          <div class="input-group">
          <select name="search" class="form-control" id="service" required>
                            <option value="none" selected disabled hidden>Select an Option</option>';
      $sql = 'SELECT `location` FROM `user_detail` WHERE `email` = "' . $_SESSION['email'] . '";';
      $result = mysqli_query($conn, $sql);
      $data = mysqli_fetch_assoc($result);
      $sql = "SELECT DISTINCT `service` FROM service_details WHERE `location` = '".$data["location"]."' AND `active` = 1;";
      $result = mysqli_query($conn, $sql);
      while ($data = mysqli_fetch_assoc($result)) {
                     echo'       <option value="'.$data["service"].'">'.$data["service"].'</option>';
    }

                     echo'
                        </select>
            <button class="btn search_btn ">Search</button>
          </div>
        </form>
        ';
    
  if (isset($_POST['search']) && !isset($_POST['sort'])) {
    $search = $_POST['search'];
    $sql = 'SELECT `location` FROM `user_detail` WHERE `email` = "' . $_SESSION['email'] . '";';
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $sql = "SELECT * FROM `service_details` WHERE `service` = '$search' AND `location` = '" . $data['location'] . "' AND `active` = 1;";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if ($row > 0) {
      echo '<div class="sort">
              <form action="home.php" method="post">
              <label for="sort">sort by</label>
              <select name="sort" id="sort">
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="ASC"><button>low to high</button></option>
                <option value="DESC">high to low</option>
              </select>
              <input type = "text" name="sortSearch"  value="' . $search . '" style="display:none;">
              <button style="border:0px;background:none;"><img src="img/search_icon.png" alt="" style="width:45px;"></button>
            </form>
            <hr>
            </div>
              <div class="main">';
      while ($data = mysqli_fetch_assoc($result)) {
        $img = "uploads/" . $data['image_url'];
        echo '
                    
                    <div class="container">
                      <div class="left">
                      <img src="' . $img . '" alt="" width="100%" height="100%" style="display: block; margin: auto;">
                          
                          
                      </div>
                      <div class="right">
                          <h6>' . $data['name'] . '</h6>
                          <h6>' . $data['service'] . '</h6>
                          <h6>' . $data['gender'] . '</h6>
                          <h6>' . $data['amount'] . '/-</h6>
                          <form action = "view.php" method="post">
                          <input name="sno" type="text" value="' . $data['sno'] . '" style="display:none">
                          <button class="button button1">See Details</button>
                          </form>
                          <button class="button button1" onclick="contact(\'' . $data['number'] . '\')">Contact Him</button>
                      </div>
                    </div>
                  
                  
                  ';
      }
    } else
      echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No Service is found in your area.</h3>
              </div>';


  } elseif (isset($_POST['sort'])) {
    $sort = $_POST['sort'];
    $search = $_POST['sortSearch'];
    $sql = 'SELECT `location` FROM `user_detail` WHERE `email` = "' . $_SESSION['email'] . '";';
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $sql = "SELECT * FROM `service_details` WHERE `service` = '$search' AND `location` = '" . $data['location'] . "' AND `active` = 1 ORDER BY `amount` $sort";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if ($row > 0) {
      echo '<div class="sort">
              <form action="home.php" method="post">
              <label for="sort">sort by</label>
              <select name="sort" id="sort">
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="ASC"><button>low to high</button></option>
                <option value="DESC">high to low</option>
              </select>
              <input type = "text" name="sortSearch"  value="' . $search . '" style="display:none;">
              <button style="border:0px;background:none;"><img src="img/search_icon.png" alt="" style="width:45px;"></button>
            </form>
            <hr>
            </div>
              <div class="main">';
      while ($data = mysqli_fetch_assoc($result)) {
        $img = "uploads/" . $data['image_url'];
        echo '
                    
                  <div class="container">
                    <div class="left">
                    <img src="' . $img . '" alt="" width="100%" height="100%" style="display: block; margin: auto;">
                        
                        
                    </div>
                    <div class="right">
                        <h6>' . $data['name'] . '</h6>
                        <h6>' . $data['service'] . '</h6>
                        <h6>' . $data['gender'] . '</h6>
                        <h6>' . $data['amount'] . '/-</h6>
                        <form action = "view.php" method="post">
                          <input name="sno" type="text" value="' . $data['sno'] . '" style="display:none">
                          <button class="button button1">See Details</button>
                          </form>
                          <button class="button button1" onclick="contact(\'' . $data['number'] . '\')">Contact Him</button>
                    </div>
                  </div>
                
                
                ';
      }
    } else
      echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No service is found in your area.</h3>
              </div>';
  } else {
    $sql = 'SELECT `location` FROM `user_detail` WHERE `email` = "' . $_SESSION['email'] . '";';
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $sql = "SELECT * FROM `service_details` WHERE `location` = '" . $data['location'] . "' AND `active` = 1;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
      echo '<div class="main">';
      while ($data = mysqli_fetch_assoc($result)) {
        $img = "uploads/" . $data['image_url'];
        echo '
                    
                  <div class="container">
                    <div class="left">
                    <img src="' . $img . '" alt="" width="100%" height="100%" style="display: block; margin: auto;">
                        
                        
                    </div>
                    <div class="right">
                        <h6>' . $data['name'] . '</h6>
                        <h6>' . $data['service'] . '</h6>
                        <h6>' . $data['gender'] . '</h6>
                        <h6>' . $data['amount'] . '/-</h6>
                        <form action = "view.php" method="post">
                          <input name="sno" type="text" value="' . $data['sno'] . '" style="display:none">
                          <button class="button button1">See Details</button>
                          </form>
                          <button class="button button1" onclick="contact(\'' . $data['number'] . '\')">Contact Him</button>
                    </div>
                  </div>
                
                
                ';
      }
    } else
      echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No service is found in our area.</h3>
              </div>';
  }

  echo '</div>';
} else {
  echo '<script>
    window.location.href =
        "login.php";

</script>';
}

?>
<script>
  function contact(number) {
    var link = "https://wa.me/91" + number;
    window.open(link);
  }
  function sort(search) {
    document.getElementById('search').value = (search);
  }
</script>

</body>

</html>