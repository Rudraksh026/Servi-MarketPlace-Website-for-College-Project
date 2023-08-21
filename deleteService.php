<?php
include "dp.php";
session_start();

if (isset($_SESSION['adminName'])) {
  $email = $_SESSION['email'];
  echo '<!DOCTYPE html>
        <html lang="en">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Varela+Round&display=swap");
        *{
            font-family: "Varela Round", sans-serif;
            box-sizing: border-box;
            color: white;
        }
        body{
            background: url(img/login_signup_background.gif);
            padding-top: 10em;
        }
        .logo{
            width: 90px;
        }
        
        .container {
          border: 2px solid rgba(255, 255, 255, 0.523);
          width: 100%;
          margin: 80px auto;
          border-radius: 20px;
          display: flex;
          flex-wrap: wrap;
          flex-direction: row;
        }
        
        .container h1 {
          width: 100%;
          margin: auto;
          text-align: center;
          text-decoration: underline;
        }
        tr{
          width: 100%;
        }
        
        th,td{
          width: 250px !important;
          padding: 2% 10% ;
          
        }

        table{
            display:block;
            width:100%;
        }
        
        button{
            background: transparent;
            border: none;
            outline: none;
        }

        input{
          display:none;
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

    .right{
      width: 70%;
  }

  .left{
    width: 30%;
}

.left,.right{
  padding: 10px 15px;
}

a{
  color:white;
  text-decoration:none;
}

a:hover{
  color:red;
}

.search{
  display:none !important;
}


        
        @media (max-width:1300px) {
          th,td{
            width: 200px !important;
            padding: 2% 10%;
            padding-left: 0px !important;
          }
          .nodata{
            width: 100%;
        }
        }
        
        @media (max-width:500px) {
          .container{
              border:none;
              width: 100%;
          }
          .nodata{
            flex-direction: column;
        }
        .left,.right{
          width: 100%;
      }
        }
        
            </style>
            <script>
            function value(n){
              var data = [n];
              console.log(data);
              }
            </script>
        </head>
        <body>
            ';
              include "nav.php";
  


  if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    $del = $_POST["sno"];
    
    $sql2 = "DELETE FROM `service_details` WHERE `sno` = ('$del');";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
      $sql = "SELECT * FROM `service_details` WHERE `email` = '$email';";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_num_rows($result);
      if ($row > 0) {
        echo '
      
            <div class="container">
              <h1>Delete Service</h1>
              <table>
                  <tr>
                      <th>Service</th>
                      <th>Amount</th>
                      <th>Name</th>
                      <th></th>
                      <th></th>
                  </tr>';
        $i = 0;
        $arr = array();
        while ($data = mysqli_fetch_assoc($result)) {

          array_push($arr, $data['sno']);
          echo '<tr>
                          <td>' . $data['service'] . '</td>
                          <td>' . $data['amount'] . '</td>
                          <td>' . $data['name'] . '</td>
                          <td>
                          <form action="Edit.php" method="get">
                              <input type="number" name="edit" value="' . $arr[$i] . '" >
                              <button>Edit</button>
                            </form>
                          </td>
                          <td>
                            <form action="deleteService.php" method="post">
                              <input type="number" name="sno" value="' . $arr[$i] . '" >
                              <button><i class="material-icons">delete</i></button>
                            </form>
                          </td>
                        </tr>
                    ';
          $i += 1;
        }

      }
      else {
        echo '<div class="nodata">
                  <img class="left" src="img/nodata.gif" alt="" width="50%">
                  <h3 class = "right sorry">Sorry, No Data is found.</h3>
                </div>';
      }
    }
  } 
  else {
    $sql = "SELECT * FROM `service_details` WHERE `email` = '$email';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
      echo '
        
              <div class="container">
                <h1>Delete Service</h1>
                <table>
                    <tr>
                        <th>Service</th>
                        <th>Amount</th>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                    </tr>';
      $i = 0;
      $arr = array();
      while ($data = mysqli_fetch_assoc($result)) {
        array_push($arr, $data['sno']);
        echo '<tr>
                            <td>' . $data['service'] . '</td>
                            <td>' . $data['amount'] . '</td>
                            <td>' . $data['name'] . '</td>
                            <td>
                            <form action="Edit.php" method="get">
                              <input type="number" name="edit" value="' . $arr[$i] . '" >
                              <button>Edit</button>
                            </form>
                            </td>
                            <td>
                              <form action="deleteService.php" method="post">
                              <input type="number" name="sno" value="' . $arr[$i] . '" >
                                <button><i class="material-icons">delete</i></button>
                              </form>
                            </td>
                          </tr>
                      ';
        $i += 1;
      }

    } 
    else {
      echo '<div class="nodata">
                <img class="left" src="img/nodata.gif" alt="" width="50%">
                <h3 class = "right sorry">Sorry, No Data is found.</h3>
              </div>';
    }
  }
}


?>
</table>
</div>
<script src="javaScript/bootstrap/bootstrap.min.js"></script>


</body>

</html>