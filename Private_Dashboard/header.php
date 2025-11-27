<!DOCTYPE html>
<html lang="en">
<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['admin_user'])) {
header('Location: index.html');
}


?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CIT DEAN's OFFICE</title>
  <link rel="shortcut icon" type="x-icon" href="../img/a.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">

    <script src="js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="medias/css/dataTable.css" />
    <script src="medias/js/jquery.dataTables.js" type="text/javascript"></script>
    <!-- end table-->

    <script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
      $('#dtable').dataTable({
                "aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
                "iDisplayLength": 10
                //"destroy":true;
            });
  })
    </script>

<?php include 'style.php'; ?>


    <script src="jquery.min.js"></script>
<script type="text/javascript">
  $(window).on('load', function(){
    //you remove this timeout
    setTimeout(function(){
          $('#loader').fadeOut('slow');  
      });
      //remove the timeout
      //$('#loader').fadeOut('slow'); 
  });
</script>
</head>

<body class="grey lighten-3 bg-style">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-bg scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="#">
          <strong class="blue-text"></strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
         
            <ul class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">COLLEGE COURSES</a>

                <div class="dropdown-menu ">
                  <div class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#">BindTech/BSIT/BIT</a>
                    <div class="dropdown-menu">
                                       
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="automotive.php">Automotive</a>
                                        <a class="dropdown-item" href="civil.php">Civil Technology</a>
                                        <a class="dropdown-item" href="drafting.php">Drafting</a>
                                        <a class="dropdown-item" href="electrical.php">Electrical</a>
                                        <a class="dropdown-item" href="electronics.php">Electronics</a>
                                        <a class="dropdown-item" href="fsm.php">FSM</a>

                  </div>
                  <div class="dropdown-divider"></div>
                </div>

                   <div class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#">BTVTE/BTTE</a>
                  <div class="dropdown-menu">
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="btvte_automotive.php">Automotive</a>
                                        <a class="dropdown-item" href="btvte_civil.php">Civil Technology</a>
                                        <a class="dropdown-item" href="btvte_drafting.php">Drafting</a>
                                        <a class="dropdown-item" href="btvte_electrical.php">Electrical</a>
                                        <a class="dropdown-item" href="btvte_electronics.php">Electronics</a>
                                        <a class="dropdown-item" href="btvte_fsm.php">FSM</a>
                                     
                                    </div>
                </div>
                <div class="dropdown-divider"></div>

                  <div class="dropdown-submenu">
                  <!-- <a class="dropdown-item dropdown-toggle" href="#">NEDA</a> -->
                  <div class="dropdown-menu">
                                        <a class="dropdown-item" href="proposal_format.php">Proposal Format</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="post_format.php">Post Format</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="progress_report.php">Progress Report</a>
                                    </div>
                </div>
                  <!-- <a class="dropdown-item" href="regional.php">Regional</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Private Files</a>
                </div>
</ul>

        <ul class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Letters/Memo</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-submenu">
                            <a class="dropdown-item" href="outgoing_letters.php">Outgoing Letters</a>
                            <a class="dropdown-item" href="received_letters.php">Received Letters</a>
                        </div>
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="funded_projects.php">Funded Projects</a>
                    </div>
</ul>

              <ul class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">MOA</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="moa.php">MOA</a>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#">Budgetary</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="ppmp.php">PPMP</a>
                  </div>
                </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="others.php">Other Files</a>
                </div>
</ul>
           


          <ul class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Extension/Accreditation/COPC</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="extension.php">Extension</a>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-submenu">
                  <a class="dropdown-item" href="accreditation.php">Accreditation</a>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-submenu">
                  <a class="dropdown-item" href="copc.php">COPC</a>
          </ul> 
          <ul class="nav-item dropdown ">
           <a class="nav-link" href="faculty.php" style="color: #ffffff;" aria-expanded="false">Faculty</a>
          <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Extension AC</a> -->
          </ul> 
          </ul>

            <?php 

             require_once("include/connection.php");


               $id = mysqli_real_escape_string($conn,$_SESSION['admin_user']);


              $r = mysqli_query($conn,"SELECT * FROM admin_login where id = '$id'") or die (mysqli_error($con));

              $row = mysqli_fetch_array($r);

               $id=$row['admin_user'];
               // $fname=$row['fname'];
               // $lname=$row['lname'];

            ?>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
  <li style="margin-top: 10px; color: white;"> <?php echo ucwords(htmlentities($id)); ?></li>
  <li class="nav-item">

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" style="color: white;">
           <i class="fas fa-user-bar" ></i> Menu </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
        <a href="#" class="list-group-item list-group-item-action waves-effect"  data-toggle="modal" data-target="#modalRegisterForm">
          <i class="fas fa-user mr-3"></i>Add Admin</a>
            <a href="view_admin.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users"></i> View Admin</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#modalRegisterForm2">
          <i class="fas fa-user mr-3"></i>Add User</a>
           <a href="view_user.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users"></i>  View User</a>
          </div>
          </li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" style="color: white;">
           <i class="fas fa-user-circle" ></i> Account </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="../login.html"><i class="fas fa-user-circle"></i> Login User</a>
          <a class="dropdown-item" href="logout.php"> <i class="fas fa-chalkboard-teacher"></i> Signout</a>
        </div>
      </li>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
<style>
  /* Top-level nav link hover */
.navbar-nav .nav-link {
    position: relative;
    color: #fff;
    transition: color 0.3s ease;
}

/* Hover underline animation */
.navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #00ffff; /* highlight color */
    transition: width 0.3s;
}

.navbar-nav .nav-link:hover::after,
.navbar-nav .nav-link:focus::after {
    width: 100%;
}

/* Change color on hover */
.navbar-nav .nav-link:hover {
    color: #00ffff; /* text highlight */
}

/* Dropdown items hover effect */
.dropdown-menu .dropdown-item {
    transition: background-color 0.3s, color 0.3s;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #00ffff; /* cyan highlight */
    color: black; /* readable text */
}

.nav-link dropdown-toggle .nav-link dropdown-toggle:hover {
    background-color: #00ffff; /* cyan highlight */
    color: black; /* readable text */
}
/* Optional: active dropdown indicator for open menu */
.nav-item.show > .nav-link,
.nav-link dropdown-toggle > .nav-link,
.nav-item.show > .nav-link:hover {
    color: #00ffff;
}

.nav-item.show > .nav-link::after {
    width: 100%; /* keeps underline when dropdown is open */
}

</style>

    <div class="sidebar-fixed position-fixed sidebar">

      <a class="logo-wrapper waves-effect">
      
        <img src="../img/aaa.png" class="img-fluid full-size-img" alt="Logo">
    </a>


       <div class="list-group list-group-flush">
           <a href="superadmin/private_files.php" class="list-group-item active waves-effect" style="background-color: red;" onclick="checkPassword()">
          <i class="fas fa-lock"></i> Private Files</a>
           <a href="dashboard.php"  class="list-group-item active waves-effect"><i class="fas fa-home"></i> Home</a>
           
           <a href="" class="list-group-item list-group-item-action waves-effect " >

           <i class="fas fa-chalkboard-teacher"></i> About</a>
        <a href="add_document.php"  class="list-group-item list-group-item-action waves-effect" >
          <i class="fas fa-file-medical"></i> All Documents</a>
            <a href="admin_log.php"  class="list-group-item list-group-item-action waves-effect" >
          <i class="fas fa-chalkboard-teacher"></i> Admin logged</a>
              <a href="user_log.php"  target="_blank" class="list-group-item list-group-item-action waves-effect" >
          <i class="fas fa-chalkboard-teacher"></i> User logged</a>

      </div>

    </div>
  <!--Add admin-->
   <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="create_Admin.php" method="POST">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-plus"></i> Add Admin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <div class="md-form mb-5">
          <input type="hidden" id="orangeForm-name" name="status" value = "Admin" class="form-control validate">
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="name" class="form-control validate" required="">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" name="admin_user" class="form-control validate" required="">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name="admin_password" class="form-control validate" required="">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-info" name="reg">Sign up</button>
      </div>
    </div>
  </div>
</div>
</form>
<!--end modaladmin-->
  <!--Add user-->
   <div class="modal fade" id="modalRegisterForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="create_user.php" method="POST">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-plus"></i> Add User Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <div class="md-form mb-5">
          <input type="hidden" id="orangeForm-name" name="status" value = "Employee" class="form-control validate" required="">
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" name="email_address" class="form-control validate" required="">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name="user_password" class="form-control validate" required="">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-info" name="reguser">Sign up</button>
      </div>
    </div>
  </div>
</div>
</form>
<!--end modaluser-->

  </header>
  <!--Main Navigation-->
 <div id="loader"></div>
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-center">
  <h4 class="mb-2 mb-sm-0 pt-1">
    <a href="dashboard.php" style="color: green;"><b>CIT DEAN's OFFICE</b></a>
  </h4>
</div>

      </div>
      
</body>
</html>