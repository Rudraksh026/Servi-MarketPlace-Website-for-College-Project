<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "dp.php";
    if(isset($_SESSION['adminName'])){
        echo '
        <head>';
        include 'icon.php';
        echo'
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
            background: url(img/login_signup_background.gif);
            padding-top: 15em;
        }
        
        .main{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .container{
            background:transparent ;
            color: white;
            width: 20%;
            height: 400px;
            margin: 25px 10px;
            display: flex;
            border: 2px solid white;
            border-radius: 15px;
            flex-direction: column;
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
            color: #171820;
            height: 30px;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            outline: none;
            margin: 3px 0px;
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
      margin: 100px 0px 0px -160px;
      z-index: 20;
    }
    .pop_head{
        width: 100%;
        display: block;
        margin: auto;
        padding: 10px;
    }
    
    .logo{
        width: 90px;
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
        background: rgba(0,0,0,0.86);
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
        border-radius: 15px;
      }
      .sort{
        width: 45%;
        color: white;
        margin: auto;
      }

      .search{
        width:30%;
      }

      .search_btn{
        background-color: black;
        color:white;
      }

      .search_btn:hover{
        background-color: white;
        color:black;
      }
        
        @media (max-width:1000px) {
            .container,.nodata{
                width: 45%;
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
            .popup{
              left: 0%;
              margin: 200px 0px;
            }
        }
            </style>
        </head>
        <body>
            ';
            include "nav.php";
            echo '
              <div id="popup" class="popup">
                <img src="img/icon.png" class="pop_head logo"><br>
                <div class="details">
                  <img id="profile" src="" width= 150px height="150px">
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
      </div>
      <form class="container-fluid search" action="home.php" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Username" name="search" aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn search_btn ">Search</button>
          </div>
        </form>
        ';
        if(isset($_POST['search']) && !isset($_POST['sort'])){
            $search = $_POST['search'];
            $sql = 'SELECT `location` FROM `user_detail` WHERE `email` = "'.$_SESSION['email'].'";';
          $result = mysqli_query($conn,$sql);
          $data = mysqli_fetch_assoc($result);
            $sql = "SELECT * FROM `service_details` WHERE `service` = '$search' AND `location` = '".$data['location']."';";

            $result = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($result);
          
            if($row>0){
              echo '<div class="sort">
              <form action="home.php" method="post">
              <label for="sort">sort by</label>
              <select name="sort" id="sort">
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="ASC"><button>low to high</button></option>
                <option value="DESC">high to low</option>
              </select>
              <input type = "text" name="sortSearch"  value="'.$search.'" style="display:none;">
              <button style="border:0px;background:none;"><img src="img/search_icon.png" alt="" style="width:45px;"></button>
            </form>
            <hr>
            </div>
              <div class="main">';
                while ($data = mysqli_fetch_assoc($result) ){
                  $img = "uploads/".$data['image_url'];
                    echo '
                    
                    <div class="container">
                      <div class="left">
                      <img src="'.$img.'" alt="" width="100%" height="100%" style="display: block; margin: auto;">
                          
                          
                      </div>
                      <div class="right">
                          <h6>'.$data['name'].'</h6>
                          <h6>'.$data['service'].'</h6>
                          <h6>'.$data['gender'].'</h6>
                          <h6>'.$data['amount'].'/-</h6>
                          <button class="button button1"  onclick="show(\''.$data['name'].'\',\''.$data['gender'].'\',\''.$data['service'].'\',\''.$data['number'].'\',\''.$data['email'].'\',\''.$data['location'].'\',\''.$data['amount'].'\',\''.$data['image_url'].'\')">See Details</button>
                          <button class="button button1" onclick="contact(\''.$data['number'].'\')">Contact Him</button>
                      </div>
                    </div>
                  
                  
                  ';
                }
            }
          
            else
                echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No Service is found in your area.</h3>
              </div>';
          
          
        }

        elseif(isset($_POST['sort']) ){
          $sort = $_POST['sort'];
          $search = $_POST['sortSearch'];
          $sql = 'SELECT `location` FROM `user_detail` WHERE `email` = "'.$_SESSION['email'].'";';
          $result = mysqli_query($conn,$sql);
          $data = mysqli_fetch_assoc($result);
            $sql = "SELECT * FROM `service_details` WHERE `service` = '$search' AND `location` = '".$data['location']."' ORDER BY `amount` $sort";

            $result = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($result);
          
            if($row>0){
              echo '<div class="sort">
              <form action="home.php" method="post">
              <label for="sort">sort by</label>
              <select name="sort" id="sort">
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="ASC"><button>low to high</button></option>
                <option value="DESC">high to low</option>
              </select>
              <input type = "text" name="sortSearch"  value="'.$search.'" style="display:none;">
              <button style="border:0px;background:none;"><img src="img/search_icon.png" alt="" style="width:45px;"></button>
            </form>
            <hr>
            </div>
              <div class="main">';
                while ($data = mysqli_fetch_assoc($result) ){
                  $img = "uploads/".$data['image_url'];
                  echo '
                    
                  <div class="container">
                    <div class="left">
                    <img src="'.$img.'" alt="" width="100%" height="100%" style="display: block; margin: auto;">
                        
                        
                    </div>
                    <div class="right">
                        <h6>'.$data['name'].'</h6>
                        <h6>'.$data['service'].'</h6>
                        <h6>'.$data['gender'].'</h6>
                        <h6>'.$data['amount'].'/-</h6>
                        <button class="button button1"  onclick="show(\''.$data['name'].'\',\''.$data['gender'].'\',\''.$data['service'].'\',\''.$data['number'].'\',\''.$data['email'].'\',\''.$data['location'].'\',\''.$data['amount'].'\',\''.$data['image_url'].'\')">See Details</button>
                        <button class="button button1" onclick="contact(\''.$data['number'].'\')">Contact Him</button>
                    </div>
                  </div>
                
                
                ';
                }
            }
          
            else
                echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No service is found in your area.</h3>
              </div>';
        }

        else{
          $sql = 'SELECT `location` FROM `user_detail` WHERE `email` = "'.$_SESSION['email'].'";';
          $result = mysqli_query($conn,$sql);
          $data = mysqli_fetch_assoc($result);
            $sql = "SELECT * FROM `service_details` WHERE `location` = '".$data['location']."' LIMIT 20;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($result);
            if($row>0){
              echo '<div class="main">';
                while ($data = mysqli_fetch_assoc($result) ){
                  $img = "uploads/".$data['image_url'];
                  echo '
                    
                  <div class="container">
                    <div class="left">
                    <img src="'.$img.'" alt="" width="100%" height="100%" style="display: block; margin: auto;">
                        
                        
                    </div>
                    <div class="right">
                        <h6>'.$data['name'].'</h6>
                        <h6>'.$data['service'].'</h6>
                        <h6>'.$data['gender'].'</h6>
                        <h6>'.$data['amount'].'/-</h6>
                        <button class="button button1" onclick="show(\''.$data['name'].'\',\''.$data['gender'].'\',\''.$data['service'].'\',\''.$data['number'].'\',\''.$data['email'].'\',\''.$data['location'].'\',\''.$data['amount'].'\',\''.$data['image_url'].'\')">See Details</button>
                        <button class="button button1" onclick="contact(\''.$data['number'].'\')">Contact Him</button>
                    </div>
                  </div>
                
                
                ';
                }
            }
            else
                echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No service is found in our area.</h3>
              </div>';
        }
      
        echo '</div>';
    }
    else{
    echo '<script>
    window.location.href =
        "login.php";

</script>';
    }

?>
<script>
  function contact(number){
    var link = "https://wa.me/91"+number;
    window.open(link);
  }

  function show(name,gender,service,number,email,location,amount,image) {
  change = "block";
  document.getElementById("popup").style.display = ("block");
  var data = [name,gender,service,number,email,location,amount];
  var i=0;
  while(i<data.length){
      document.getElementsByClassName("output")[i].innerHTML = (data[i]);
      i++;
  }
  //   popup.style.display ='block';
  var i = "uploads/"+image;
  document.getElementById("profile").src = (i);
}
function hide() {
  change = "none";
  document.getElementById("popup").style.display = ("none");
  //   popup.style.display ='none';
}

function sort(search){
  document.getElementById('search').value = (search);
}
</script>

</body>
</html>