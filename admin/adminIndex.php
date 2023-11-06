
<!DOCTYPE html>
<html lang="en">
  <?php
session_start();
include "../dp.php";
if(isset($_SESSION["username"]))
{
echo '<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Service Provider Management System</title>
    
    <!-- Favicons -->
    <link href="http://localhost/php-spms/assets/img/favicon.png" rel="icon">
    <link href="http://localhost/php-spms/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="http://localhost/php-spms/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/php-spms/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="http://localhost/php-spms/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="http://localhost/php-spms/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="http://localhost/php-spms/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="http://localhost/php-spms/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="http://localhost/php-spms/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="http://localhost/php-spms/assets/css/style.css" rel="stylesheet">
    <link href="http://localhost/php-spms/assets/css/custom.css" rel="stylesheet">

    <!-- jQUery -->
    <script src="http://localhost/php-spms/assets/js/jquery-3.6.4.min.js"></script>
    <script src="http://localhost/php-spms/assets/js/script.js"></script>

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


    <script src="http://localhost/php-spms/dist/js/script.js"></script>
    
    <style>
    .sidebar-nav .nav-content a i {
      font-size: .9rem;
  }
  </style>
  </head>  <body>';
               include "nav.php"; 
include "sidebar.php";
  
echo '
      <!-- Content Wrapper. Contains page content -->
      <main id="main" class="main">
        <div class="pagetitle">
          <h1>Home</h1>
          <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item selected"><a href="http://localhost/php-spms//admin">Dashboard</a></li>
                              </ol>
          </nav>
        </div>
        <div id="msg-container">
           
        </div>
        <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row">

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card info-card">
              <div class="card-body">
                <h5 class="card-title">Services <span>| Active</span></h5>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success bg-opacity-25 text-success">
                    <i class="bi bi-menu-button-wide"></i>
                  </div>
                  ';
                        include "../dp.php";
                        $sql = "SELECT * FROM `service_details` WHERE `active` = 1";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        echo '<div class="ps-3">
                                            <h6>'.strval($row).'</h6>

                        </div>
                    
                </div>
              </div>

            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card info-card">
              <div class="card-body">
                <h5 class="card-title">Services <span>| Inative</span></h5>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-dark bg-opacity-25 text-dark">
                    <i class="bi bi-menu-button-wide"></i>
                  </div>';
                  
                        $sql = "SELECT * FROM `service_details` WHERE `active` = 0";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        echo '<div class="ps-3">
                                            <h6>'.strval($row).'</h6>

                        </div>
                    
                </div>
              </div>

            </div>
          </div>

     

          

        </div>
      </div><!-- End Left side columns -->

    </div>
  </section>      </main>
  
      <div class="modal fade" id="uni_modal" role="dialog">
        <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
          <div class="modal-content rounded-0">
            <div class="modal-header">
            <h5 class="modal-title"></h5>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary bg-gradient-teal border-0 rounded-0" id="submit" onclick="$("#uni_modal form").submit()">Save</button>
            <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Cancel</button>
          </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="uni_modal_right" role="dialog">
        <div class="modal-dialog modal-full-height  modal-md rounded-0" role="document">
          <div class="modal-content rounded-0">
            <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="fa fa-arrow-right"></span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="confirm_modal" role="dialog">
        <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
          <div class="modal-content rounded-0">
            <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
          </div>
          <div class="modal-body">
            <div id="delete_content"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary  bg-gradient-teal border-0 rounded-0" id="confirm" onclick="">Continue</button>
            <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
          </div>
          </div>
        </div>
      </div>
    <div class="modal fade" id="viewer_modal" role="dialog">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
                <img src="" alt="">
        </div>
      </div>
    </div>
    <script>
  $(document).ready(function(){
     window.viewer_modal = function($src = ""){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =="mp4"){
        var view = $("<video src='."'"."+src+"."'".' controls autoplay></video>")
      }else{
        var view = $("<img src='."'"."+src+"."'".' />")
      }
      $("#viewer_modal .modal-content video,#viewer_modal .modal-content img").remove()
      $("#viewer_modal .modal-content").append(view)
      $("#viewer_modal").modal({
              show:true,
              backdrop:"static",
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '."''".' , $url='."''".',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $("#uni_modal .modal-title").html($title)
                    $("#uni_modal .modal-body").html(resp)
                    if($size != '."''".'){
                        $("#uni_modal .modal-dialog").addClass($size+" modal-dialog-centered")
                    }else{
                        $("#uni_modal .modal-dialog").removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $("#uni_modal").modal({
                      show:true,
                      backdrop:"static",
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='."''".',$func='."''".',$params = []){
       $("#confirm_modal #confirm").attr("onclick",$func+"("+$params.join(",")+")")
       $("#confirm_modal .modal-body").html($msg)
       $("#confirm_modal").modal("show")
    }
  })
</script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   
<!-- Vendor JS Files -->
<script src="http://localhost/php-spms/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/chart.js/chart.umd.js"></script>
<script src="http://localhost/php-spms/assets/vendor/echarts/echarts.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/quill/quill.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="http://localhost/php-spms/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="http://localhost/php-spms/assets/js/main.js"></script>  </body>
</html>';
}
else{
  echo '<script>
    window.location.href =
        "login.php";

</script>';
}
?>