<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
    header('Location: index.html');
    exit(); // Ensures that no further code is executed
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
  <link href="css/style.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="js/jquery-3.4.0.min.js"></script>
  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
  <!-- DataTables JS -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
  <!-- DataTables Responsive CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css">
  <!-- DataTables Responsive JS -->
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>

  <style>
    /* Custom styles */
    .map-container {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }
    .map-container iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
    .pull-right {
      float: right;
      margin: 2px !important;
    }
  </style>

  <script type="text/javascript">
    $(document).ready(function() {
      // DataTable initialization
      $('#dtable').dataTable({
        "aLengthMenu": [[5, 10, 15, 25, 50, 100, -1], [5, 10, 15, 25, 50, 100, "All"]],
        "iDisplayLength": 10
      });
    });
  </script>

  <script type="text/javascript">
    $(window).on('load', function() {
      $('#loader').fadeOut('slow'); // Hide loader when page is fully loaded
    });
  </script>
</head>

<body class="grey lighten-3">

  <!-- Main Navigation -->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
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
            <!-- Placeholder for any additional menu items -->
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li style="margin-top: 10px;">Welcome!, <?php echo ucwords(htmlentities($_SESSION['admin_user'])); ?></li>
            <li class="nav-item">
              <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link border border-light rounded waves-effect">
                <i class="far fa-user-circle"></i> Sign Out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
      <a class="logo-wrapper waves-effect">
        <img src="sksulogo.png" width="150px" height="200px;" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i> Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#modalRegisterForm">
          <i class="fas fa-user mr-3"></i> Add Admin
        </a>
        <a href="view_admin.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users"></i> View Admin
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect" data-toggle="modal" data-target="#modalRegisterForm2">
          <i class="fas fa-user mr-3"></i> Add User
        </a>
        <a href="view_user.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users"></i> View User
        </a>
        <a href="add_document.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-file-medical"></i> Add Document
        </a>
        <a href="view_userfile.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-folder-open"></i> View User File
        </a>
        <a href="admin_log.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chalkboard-teacher"></i> Admin logged
        </a>
        <a href="user_log.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chalkboard-teacher"></i> User logged
        </a>
      </div>
    </div>
    <!-- Sidebar -->

    <!-- Add admin modal -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <input type="hidden" id="orangeForm-name" name="status" value="Admin" class="form-control validate">
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
      </form>
    </div>
    <!-- End add admin modal -->

    <!-- Add user modal -->
    <div class="modal fade" id="modalRegisterForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <input type="hidden" id="orangeForm-name" name="status" value="Employee" class="form-control validate" required="">
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
      </form>
    </div>
    <!-- End add user modal -->

  </header>
  <!-- Main Navigation -->

  <!-- Loader -->
  <div id="loader"></div>

  <!-- Main layout -->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">
        <!-- Card content -->
        <div class="card-body d-sm-flex justify-content-between">
          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="dashboard.php">Home Page</a>
            <span>/</span>
            <span>Dashboard</span>
          </h4>
        </div>
      </div>
      <!-- Heading -->

      <!-- Add file button -->
      <div class="">
        <a href="add_file.php">
          <button type="button" class="btn btn-success"><i class="fas fa-file-medical"></i> Add File</button>
        </a>
      </div>
      <hr>

      <!-- Table -->
      <div class="col-md-12">
        <table id="dtable" class="table table-striped">
          <thead>
            <tr>
              <th>Filename</th>
              <th>FileSize</th>
              <th>Uploader</th>
              <th>Status</th>
              <th>Date/Time Upload</th>
              <th>Downloads</th>
              <th>NABA</th>
              <th>CCS</th>
              <th>COE</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once("include/connection.php");

            $query = mysqli_query($conn, "SELECT DISTINCT ID, NAME, SIZE, EMAIL, ADMIN_STATUS, TIMERS, DOWNLOAD, NABA, CCS, COE FROM upload_files GROUP BY NAME DESC") or die(mysqli_error($conn));

            while ($file = mysqli_fetch_array($query)) {
              $id = $file['ID'];
              $name = $file['NAME'];
              $size = $file['SIZE'];
              $uploads = $file['EMAIL'];
              $status = $file['ADMIN_STATUS'];
              $time = $file['TIMERS'];
              $download = $file['DOWNLOAD'];
              $naba = $file['NABA'];
              $ccs = $file['CCS'];
              $coe = $file['COE'];
            ?>
              <tr>
                <td width="20%"><?php echo $name; ?></td>
                <td><?php echo floor($size / 1000) . ' KB'; ?></td>
                <td><?php echo $uploads; ?></td>
                <td><?php echo $status; ?></td>
                <td><?php echo $time; ?></td>
                <td><?php echo $download; ?></td>
                <td><?php echo $naba; ?></td>
                <td><?php echo $ccs; ?></td>
                <td><?php echo $coe; ?></td>
                  <td>
                    <a href='view_file.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
                    <a href='downloads.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-primary"><i class="fa fa-download"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-id="<?php echo $id; ?>" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- End table -->

      <!-- Footer -->
      <hr>
      <div class="footer text-center py-3">
        <p>All rights reserved &copy; <?php echo date('Y'); ?> Developed By: Tundag & Franco</p>
      </div>
      <!-- End Footer -->

    </div>
  </main>
  <!-- End main layout -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>
