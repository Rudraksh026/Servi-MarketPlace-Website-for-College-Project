<!DOCTYPE html>
<html lang="en">
<?php
include "../dp.php";
session_start();
if (isset($_SESSION["username"])) {
  echo '<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Service Provider Management System</title>
    <link href="http://localhost/php-spms/assets/img/favicon.png" rel="icon">
    <link href="http://localhost/php-spms/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
    <script src="http://localhost/php-spms/assets/js/script.js"></script>
    <script src="http://localhost/php-spms/dist/js/script.js"></script>
  </head>  <body>
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="adminIndex.php" class="logo d-flex align-items-center">
      <img src="../img/icon.png" alt="System Logo">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="http://localhost/php-spms/uploads/avatars/1.png?v=1678760026" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">admin</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Adminstrator Admin</h6>
            <span>Administrator</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
     <style>
  button{
    width: 100%;
    border: none;
  }
  .sidebar-nav .nav-content a i {
    font-size: .9rem;
}
.hidden{
    display: none;
}
</style>
<aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item">
    <a class="nav-link collapsed" href="adminIndex.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " data-bs-target="#services-nav" data-bs-toggle="collapse" href="#" data-bs-collapse="true">
      <i class="bi bi-menu-button-wide"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="services-nav" class="nav-content collapse show " data-bs-parent="#sidebar-nav">
    <li>
    <a href="list.php">
      <i class="bi bi-circle"></i><span>All List</span>
    </a>
  </li>
      <li>
        <a href="inList.php" class="active">
          <i class="bi bi-circle"></i><span>Inactive List</span>
        </a>
      </li>
      <li>
        <a href="acList.php">
          <i class="bi bi-circle"></i><span>Active List</span>
        </a>
      </li>
    </ul>
</ul>
</aside>
      <main id="main" class="main">
        <div class="pagetitle">
          <h1>Services</h1>
          <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="adminIndex.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Services</li>
                              </ol>
          </nav>
        </div>
        <div id="msg-container">
        </div>
        <div class="card card-outline rounded-0 card-navy">
	<div class="card-header ">
		<div class="card-tools d-flex justify-content-end">
			<a href="create.php" id="create_new" class="btn btn-flat btn-primary bg-gradient-teal border-0 rounded00"><span class="fas fa-plus"></span>  Create New</a>
		</div>
	</div>
	<div class="card-body">
        <div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-sm table-hover table-striped table-bordered" id="list">
					<colgroup>
						<col width="5%">
						<col width="20%">
						<col width="20%">
						<col width="30%">
						<col width="15">
						<col width="10%">
					</colgroup>
					<thead>
						<tr>
							<th>#</th>
							<th>Email</th>
							<th>Name</th>
							<th>Service</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
          ';
  $sql = "SELECT * FROM `service_details` WHERE `active` = 0 ;";
  $result = mysqli_query($conn, $sql);
  $i = 1;
  while ($row = mysqli_fetch_array($result)) {
    echo '<tr>
								<td class="align-items-center text-center">
                <form action = "view.php" method="post">
                <input name="sno" type="text" value="' . $row['sno'] . '" style="display:none">
                <button class="button button1">View</button>
                </form>
                </td>
								<td class="align-items-center">' . $row['email'] . '</td>
								<td class="align-items-center">' . $row['name'] . '</td>
								<td class="align-items-center">
                                ' . $row['service'] . '
								</td>
								<td class="align-items-center text-center">';
    echo '<span class="badge bg-danger px-3 rounded-pill">InActive</span>';
    echo '									</td>
								<td class="align-items-center" align="center">
									<form action="edit.php" method="post">
                                        <input class="hidden" type="number" name="edit" value="' . $row['sno'] . '"">
                                        <button>Edit</button>
                                    </form>
								</td>
							</tr>';
  }
  echo '</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$(".delete_data").click(function(){
			_conf("Are you sure to delete this service permanently?","delete_service",[$(this).attr("data-id")])
		})
	})
	function delete_service($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_service",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.","error");
				end_loader();
			},
			success:function(resp){
				if(typeof resp== "object" && resp.status == "success"){
					location.reload();
				}else{
					alert_toast("An error occured.","error");
					end_loader();
				}
			}
		})
	}
</script>      </main>
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
      var t = $src.split(' . ')
      t = t[1]
      if(t =="mp4"){
        var view = $("<video src="src" controls autoplay></video>")
      }else{
        var view = $("<img src="src" />")
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
    window.uni_modal = function($title = "" , $url="",$size=""){
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
                    if($size != ""){
                        $("#uni_modal .modal-dialog").addClass($size+"  modal-dialog-centered")
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
    window._conf = function($msg="",$func="",$params = []){
       $("#confirm_modal #confirm").attr("onclick",$func+"("+$params.join(",")+")")
       $("#confirm_modal .modal-body").html($msg)
       $("#confirm_modal").modal("show")
    }
  })
</script>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="http://localhost/php-spms/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/chart.js/chart.umd.js"></script>
<script src="http://localhost/php-spms/assets/vendor/echarts/echarts.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/quill/quill.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="http://localhost/php-spms/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="http://localhost/php-spms/assets/vendor/php-email-form/validate.js"></script>
<script src="http://localhost/php-spms/assets/js/main.js"></script> ';
} else {
  echo '<script>
    window.location.href =
        "login.php";

</script>';
}
?>
</body>

</html>