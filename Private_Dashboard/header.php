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
  <title>Extension Office</title>
  <link rel="shortcut icon" type="x-icon" href="../img/sksulogo.png">
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

  <style>
    /* styles.css */

/* Custom styles for nested dropdown */
.dropdown-submenu {
    position: relative;

}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: 0;
    display: none;
    color: white;
    
    
}

.dropdown-submenu:hover .dropdown-menu {
    display: block;
}

          select[multiple], select[size] {
    height: auto;
    width: 20px;
}
.pull-right {
    float: right;
    margin: 2px !important;
}

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
.navbar-nav {
background-color: #009a3c;
}

.dropdown-item {
  background-color: #009a3c;
  color: white;
}
.dropdown-item:hover {
  background-color: #fffe00;
  color: black;
  font-weight: 700; color: 
}

.sidebar {
  background: url('../img/side1.jpg') no-repeat;
  background-size: cover;
}
.bg-style{
  background: url('../img/bg1.avif') no-repeat;
  background-size: cover;
}
.navbar-bg {
background-color:  #009a3c;
}
.dropdown-menu {
background-color:  #009a3c;
}

.list-group-item {
background-color:  #009a3c;  
color: white;

}
.list-group-item:hover{
background-color: #fffe00;
color: black;
font-weight: 700;
}




.fontcolor-nav-top {
color: yellow;
}
#loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('../img/sksulogo.png') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
    }

  </style>

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
          <!--   <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#">About
                MDB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#">Free
                download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#">Free
                tutorials</a>
            </li> -->
            <ul class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">RD&E</a>

								<div class="dropdown-menu ">
									<a class="dropdown-item " href="manual_operations.php">*MANUAL OF OPERATIONS (SKSU)</a>
                  <div class="dropdown-submenu">
									<a class="dropdown-item dropdown-toggle" href="#">*NEDA</a>
                  <div class="dropdown-menu">
                                        <a class="dropdown-item" href="proposal_format.php">Proposal Format</a>
                                        <a class="dropdown-item" href="post_format.php">Post Format</a>
                                        <a class="dropdown-item" href="progress_report.php">Progress Report</a>
                                    </div>
                </div>
									<a class="dropdown-item" href="regional.php">*Regional</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="other_files">Other Files</a>
								</div>
</ul>

              <ul class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Agenda</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="university_agenda.php">*University Agenda</a>
                </div>
</ul>

        <ul class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Colleges</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">*Engineering</a>
                            <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="#">COE File 1</a>
                                <a class="dropdown-item" href="#">COE File 2</a> -->
                                <a class="dropdown-item" href="engineering_agenda.php">Agenda</a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Projects/Activities</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="ce_projects.php">CE</a>
                                        <a class="dropdown-item" href="cpe_projects.php">CpE</a>
                                        <a class="dropdown-item" href="ece_projects.php">ECE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">*CCS</a>
                            <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="#">CCS File 1</a>
                                <a class="dropdown-item" href="#">CCS File 2</a> -->
                                <a class="dropdown-item" href="ccs_agenda.php">Agenda</a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Projects/Activities</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="cs_projects.php">CS</a>
                                        <a class="dropdown-item" href="it_projects.php">IT</a>
                                        <a class="dropdown-item" href="is_projects.php">IS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">*NABA</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="industech_agenda.php">Agenda</a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Projects/Activities</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="fsm_projects.php">FSM/Culinary</a>
                                        <a class="dropdown-item" href="electronics_projects.php">Electronics</a>
                                        <a class="dropdown-item" href="electrical_projects.php">Electrical</a>
                                        <a class="dropdown-item" href="automotive_projects.php">Automotive</a>
                                        <a class="dropdown-item" href="drafting_projects.php">Drafting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Other Files</a>
                    </div>
</ul>

              <ul class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">MOA</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="moa.php">*MOA</a>
                  <div class="dropdown-submenu">
									<a class="dropdown-item dropdown-toggle" href="#">*Budgetary</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="ppmp.php">PPMP</a>
                  </div>
                </div>
                <div class="dropdown-submenu">
									<a class="dropdown-item dropdown-toggle" href="naba.php">*Pool of Experts</a>
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="engineering_pool.php">Engineering</a>
                  <a class="dropdown-item" href="ccs_pool.php">CCS</a>
                  <a class="dropdown-item" href="industech_pool.php">NABA</a>
              </div>
                </div>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Other Files</a>
								</div>
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
          <ul class="navbar-nav nav-flex-icons"">
  <li style="margin-top: 10px; color: white;"> <?php echo ucwords(htmlentities($id)); ?></li>
  <li class="nav-item">

<!--
    <a href="#" class="nav-link waves-effect" target="_blank" style="color: white;">
      <i class="fab fa-facebook-f"></i>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link waves-effect" target="_blank" style="color: white;">
      <i class="fab fa-twitter"></i>
    </a>
  </li>
-->
<!--
<li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><b>Account</b></a>
                    <div class="dropdown-menu">
                      <a href="logout.php" class="nav-link border border-light rounded waves-effect""><i class="far fa-user-circle"></i>Signout</a>
</li>
-->
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
        <a href="add_document.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-file-medical"></i> Add Document</a>
        <a href="view_userfile.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-folder-open"></i> View User File</a>
            <a href="admin_log.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chalkboard-teacher"></i> Admin logged</a>
              <a href="user_log.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chalkboard-teacher"></i> User logged</a>

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

    <div class="sidebar-fixed position-fixed sidebar">

      <a class="logo-wrapper waves-effect">
      
        <img src="../img/sksulogo.png" width="150px" height="200px;" class="img-fluid" alt="">
      </a>

       <div class="list-group list-group-flush">
           <a href="dashboard.php" class="list-group-item active waves-effect"><i class="fas fa-home"></i> Home</a>
           <a href="" class="list-group-item list-group-item-action waves-effect " >
           <i class="fas fa-chalkboard-teacher"></i> About</a>
           <a href="view_admin.php" class="list-group-item list-group-item-action waves-effect" > 
          <i class="fas fa-users"></i> View Admin</a>
           <a href="view_user.php" class="list-group-item list-group-item-action waves-effect" >
          <i class="fas fa-users"></i>  View User</a>
        <a href="add_document.php" class="list-group-item list-group-item-action waves-effect" >
          <i class="fas fa-file-medical"></i> Add Document</a>
        <a href="view_userfile.php" class="list-group-item list-group-item-action waves-effect" >
          <i class="fas fa-folder-open"></i> View User File</a>
            <a href="admin_log.php" class="list-group-item list-group-item-action waves-effect" >
          <i class="fas fa-chalkboard-teacher"></i> Admin logged</a>
              <a href="user_log.php" class="list-group-item list-group-item-action waves-effect" >
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
        <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">
  <a href="dashboard.php" style="color: green;"><b>SKSU ISULAN CAMPUS EXTENSION OFFICE</b></a>
  <!-- <span>/</span>
  <span>Dashboard</span> -->
</h4>

<!-- 
          <form class="d-flex justify-content-center">
       
            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form> -->

        </div>

      </div>
      
</body>
</html>