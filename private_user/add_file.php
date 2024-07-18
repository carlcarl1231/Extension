<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["email_address"])) {
    header("location:../login.html");
    exit();
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery-1.8.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="media/css/dataTable.css" />
  <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#dtable').dataTable({
            "aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
            "iDisplayLength": 10
        });
    })
  </script>
  <style type="text/css">
    select[multiple], select[size] {
      height: auto;
      width: 20px;
    }
    .pull-right {
      float: right;
      margin: 2px !important;
    }
    input[type=file] {
      border: 2px dotted #999;
      border-radius: 10px;
      margin-left: 9px;
      width: 231px!important;
    }  
    .map-container {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }
    .md-form .form-control:disabled, .md-form .form-control[readonly] {
      border-bottom: 1px solid #bdbdbd;
      background-color: transparent;
      width: 215px !important;
    }
    #loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('sksulogo.png') 50% 50% no-repeat rgb(249,249,249);
      opacity: 1;
    }
  </style>
  <script src="jquery.min.js"></script>
  <script type="text/javascript">
    $(window).on('load', function() {
        setTimeout(function() {
            $('#loader').fadeOut('slow');  
        }, 1000);
    });
  </script>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
<?php 
  require_once("include/connection.php");
  $id = mysqli_real_escape_string($conn, $_SESSION['email_address']);
  $r = mysqli_query($conn, "SELECT * FROM login_user where id = '$id'") or die(mysqli_error($conn));
  $row = mysqli_fetch_array($r);
  $email_address = $row['email_address'];
  $user_status = $row['user_status'];
  $name = $row['name'];
?>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color fixed-top">
  <a class="navbar-brand" href="#"><img src="js/img/Files_Download.png" width="33px" height="33px"> <font color="#F0B56F">F</font>ile <font color="#F0B56F">M</font>anagement <font color="#F0B56F">S</font>ystem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <font color="black">Welcome!,</font> <?php echo ucwords(htmlentities($email_address)); ?> <i class="fas fa-user-circle"></i> Login </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="history_log.php"> <i class="fas fa-chalkboard-teacher"></i> User Logged</a>
          <a class="dropdown-item" href="Logout.php"><i class="fas fa-sign-in-alt"></i> LogOut</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<main class="pt-5 mx-lg-5">
  <div class="container">
    <div class="card mb-4 wow fadeIn">
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <div class="d-flex justify-content-center pull-right">
            <a href="home.php">
              <button class="btn btn-warning pull-right"><i class="far fa-file-image"></i> View File</button>
            </a>
          </div>
        </h4>
      </div>
      <hr>
    </div>
    <div id="loader"></div>
    <center>
      <div class="text-center col-md-4">
        <div class="card">
          <h5 class="card-header info-color white-text text-center py-4">
            <strong>Upload File Form</strong>
          </h5>
          <div class="card-body px-lg-5 pt-0">
            <div class="container">
              <div class="row"><br>
                <form action="add_file.php" method="post" enctype="multipart/form-data">
                  <div class="col-md-11">
                    <div class="md-form mb-0">
                      <input type="hidden" name="uploader" value="<?php echo ucwords(htmlentities($name)); ?>" class="form-control" readonly="">
                      <input type="text" value="<?php echo ucwords(htmlentities($user_status)); ?>" class="form-control" readonly="">
                    </div>
                  </div>
                  <label for="subject" class="">Upload File</label>
                  <input type="file" name="file" id="file"> <br>
                  <button type="submit" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="save">UPLOAD</button>
                  <footer style="font-size: 11px"><b>File Type:</b><font color="red"><i>.docx .doc .pptx .ppt .xlsx .xls .pdf .odt</i></font></footer>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
    <div class="footer-copyright py-3">
      <p>All right Reserved &copy; <?php echo date('Y');?> Developed By:Tundag & Franco</p>
    </div>
  </div>
</main>
<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>   
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>
</body>
</html>
