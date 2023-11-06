<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "../dp.php";
    if(isset($_SESSION['adminName'])){
       
        echo '
        <head>';
        include '../icon.php';
        echo'
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ADD SERVICE | ALSP</title>
            <link rel="stylesheet" href="../style/bootstrap/bootstrap.min.css">
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
            background: url(../img/login_signup_background.gif);
            padding-top: 10em;
        }
        .logo{
            width: 90px;
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
            include "../nav.php";
            echo '
              <div class="container">
                <h1>Add Service</h1>
                <form action="create.php" method="post" enctype="multipart/form-data">
        
                    <div>
                        <label for="fname">First Name<br></label>
                        <input type="text" id="fname" name="fname" required>
                    </div>
                    <div>
                        <label for="lname">Last Name<br></label>
                        <input type="text" id="lname" name="lname">
                    </div>
                    <div>
                        <label for="amount">Amount<br></label>
                        <input type="number" id="amount" name="amount" required>
                    </div>
                    <div>
                        <label>Gender<br></label>
                        <input type="radio" name="gender" id="male" value="M" required><label for="male">Male</label>
                        <input type="radio" name="gender" id="Female" value="F" required><label id="female" for="Female">Female</label>
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
                        <label for="service">Service<br></label>
                        <select name="service" id="service" required>
                            <option value="none" selected disabled hidden>Select an Option</option>
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
                            <option value="Carpentar">Carpentar</option>
                            <option value="Delivery">Delivery</option>
                            <option value="Editor">Editor</option>
                        </select>
                    </div>
                    <div>
                        <label for="location">Location<br></label>
                        <input type="text" id="location" name="location"  required>
                    </div>
                    <div>
                        <label for="status">Status</label>
                        <select id="status" name="status" required>
                            <option value="0" selected>Inactive</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <div>
                        <input id="photo" type="file" name="image" required>
                    </div>
                    <br>
                    <button>Add Service</button>
                </form>
            </div>
             
                
        
              <script src="../javaScript/bootstrap/bootstrap.min.js"></script>
              <script src="../javaScript/sweetalert.mn.js"></script>
        ';
        if(($_SERVER['REQUEST_METHOD'] == 'POST') ){
            $name= $_POST['fname']." ".$_POST['lname'];
            $amount = $_POST['amount'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $service = $_POST['service'];
            $location = $_POST['location'];
            $status = $_POST['status'];

            

            $img_name = $_FILES["image"]['name'];
	        $img_size = $_FILES["image"]['size'];
	        $tmp_name = $_FILES["image"]['tmp_name'];
	        $error = $_FILES["image"]['error'];


            if($error === 0 ){
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		        $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg","png"); 

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
    
                    // Insert into Database
                    $sql = "INSERT INTO `service_details` (`name`, `email`, `gender`, `number`, `location`, `service`, `amount`,`image_url`,`active`) VALUES ('$name', '$email', '$gender', $number, '$location', '$service', $amount,'$new_img_name','$status');";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        echo '<script>swal("Service Inserted successfully!", "", "success")
            .then((value) => {
                window.location.href =
                    "list.php";
            });</script>';
                    }
                }
                else{
                    ?>
                    <script>swal ( "Oops" ,  "Invalid Image Type!" ,  "error" );</script>
                    <?php
                }


                
            }
        }
        
    }
    else
      {echo '<script>
        window.location.href =
            "login.php";
    
</script>';}

?>
</body>
</html>