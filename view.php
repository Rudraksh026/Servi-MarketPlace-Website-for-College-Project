<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "dp.php";
if (isset($_SESSION['adminName'])) {
    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>View Profile</title>
            <style>
                *{
                    box-sizing: border-box;
                }
                main{
                    display: block;
                    width: 40%;
                    border: 2px solid #039efc;
                    margin: 80px auto;
                    padding: 40px;
                    border-radius: 20px;
                    box-shadow: 5px 5px 10px black;
                    overflow: hidden;
                }
                .container{
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                }
                .left{
                    display: block;
                    width: 50%;
                }
                table{
                    border-collapse: collapse;
                }
                img{
                    border: 2px solid black;
                    border-radius: 50%;
                    height: 150px;
                }
                .button{
                    width: 100%;
                    margin: 5px;
                    color: white;
                    background-color: black;
                    padding: 5px;
                    font-size: 20px;
                    border: none;
                    border-radius: 15px;
                }
                .button a{
                    text-decoration: none;
                    color: white;
                    display: block;
                    width: 100%;
                }
                .button:hover{
                    background-color: #039efc;
                    color: black;
                }
                .button a:hover{
                    color: black;
                }
                @media (max-width:1000px) {
                    main{
                        width: 90%;
                    }
                }
                @media (max-width:500px) {
                    main{
                        width: 100%;
                        padding: 10px;
                    }
                }
            </style>
        </head>
        <body>
            <main>
                <section class="container">';
    $sno = $_POST['sno'];
    $sql = "SELECT * FROM `service_details` WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo '    <div class="left"><h1>' . $data["name"] . '</h1>
                <h3>Gender :- ' . $data["gender"] . '</h3></div>
                    <img class="left" src="uploads/' . $data["image_url"] . '" alt="">
                </section>
                <h2>' . $data["email"] . '</h2>
                <h3>Phone number :- ' . $data["number"] . '</h3>
                <h3>Services :- ' . $data["service"] . '</h3>
                <h3>Amount :- ' . $data["amount"] . '</h3>
                <h3>Location :- ' . $data["location"] . '</h3>
                
                <button class="button"><a href="http://localhost/minor_project/home.php">Back</a></button>
                <button class="button" onclick="contact(\'' . $data['number'] . '\')">Contact Him</button>
            </main>
            <script>
                function contact(number){
            var link = "https://wa.me/91"+number;
            window.open(link);
          }
            </script>
        </body>
        </html>';
} else {
    echo '<script>
    window.location.href =
        "login.php";

</script>';
}
?>

</html>