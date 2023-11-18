<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<head>
  <?php
  include "../dp.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["usrname"];
    $password = $_POST["pass"];
    if ($username == "admin" || $password == "12345") {
      session_start();
      $_SESSION["username"] = $username;
      echo '<script>
    window.location.href =
        "adminIndex.php";

</script>';
    } else {
      echo '<script>alert("Wrong Username and Password")</script>';
    }
  }
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Service Provider Management</title>

  <link href="http://localhost/php-spms/assets/img/favicon.png" rel="icon">
  <link href="http://localhost/php-spms/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="http://localhost/php-spms/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/php-spms/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://localhost/php-spms/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://localhost/php-spms/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="http://localhost/php-spms/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="http://localhost/php-spms/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://localhost/php-spms/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="http://localhost/php-spms/assets/css/style.css" rel="stylesheet">
  <link href="http://localhost/php-spms/assets/css/custom.css" rel="stylesheet">

  <script src="http://localhost/php-spms/assets/js/jquery-3.6.4.min.js"></script>

</head>

<body>
  <style>
    body {
      background-image: url("http://localhost/php-spms/uploads/cover.png?v=1682490747");
      background-size: cover;
      background-repeat: no-repeat;
      backdrop-filter: brightness(.7);
      overflow-x: hidden;
    }

    .logo img {
      max-height: 55px;
      margin-right: 25px;
    }

    .logo span {
      color: #fff;
      text-shadow: 0px 0px 10px #000;
    }
  </style>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="login.php" method="post" class="row g-3 needs-validation" novalidate id="login-frm">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input name="usrname" type="text" name="username" class="form-control" id="yourUsername"
                          required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input name="pass" type="password" name="password" class="form-control" id="yourPassword"
                        required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

  <script src="http://localhost/php-spms/assets/js/jquery-3.6.4.min.js"></script>
  <script src="http://localhost/php-spms/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="http://localhost/php-spms/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/php-spms/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="http://localhost/php-spms/assets/vendor/echarts/echarts.min.js"></script>
  <script src="http://localhost/php-spms/assets/vendor/quill/quill.min.js"></script>
  <script src="http://localhost/php-spms/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="http://localhost/php-spms/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../javaScript/sweetalert.mn.js"></script>

</body>

</html>