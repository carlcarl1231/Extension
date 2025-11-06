<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["email_address"])) {
    header("location:../login.html");
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home</title>
  <link rel="shortcut icon" type="x-icon" href="../img/sksulogo.png">
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
    $(document).ready(function(){
        $('#dtable').dataTable({
            "aLengthMenu": [[5, 10, 15, 25, 50, 100, -1], [5, 10, 15, 25, 50, 100, "All"]],
            "iDisplayLength": 10
        });
    });
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
    #loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('sksulogo.png') 50% 50% no-repeat rgb(249, 249, 249);
      opacity: 1;
    }
  </style>

  <script src="jquery.min.js"></script>
  <script type="text/javascript">
    $(window).on('load', function() {
      setTimeout(function() {
        $('#loader').fadeOut('slow');
      });
    });
  </script>

</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
  <?php
  require_once("include/connection.php");

  $id = mysqli_real_escape_string($conn, $_SESSION['email_address']);

  $r = mysqli_query($conn, "SELECT * FROM login_user WHERE id = '$id'") or die(mysqli_error($conn));

  $row = mysqli_fetch_array($r);

  $id = $row['email_address'];
  ?>
  <!-- Start your project here-->
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-success bg-success fixed-top">
    <a class="navbar-brand" href="index.html"><img src="../img/sksulogo.png" width="33px" height="33px"> <font color="#FFFF00">SKSU EXTENSION OFFICE MANAGEMENT SYSTEM</font></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
             <font color="black">Welcome!</font> <?php echo ucwords(htmlentities($id)); ?> <i class="fas fa-user-circle"></i> Login </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item" href="history_log.php"> <i class="fas fa-chalkboard-teacher"></i> User Logged</a>
            <a class="dropdown-item" href="Logout.php"><i class="fas fa-sign-in-alt"></i> LogOut</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <!--/.Navbar -->
  <br><br><br>
  <!-- Card -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr>
        <table id="dtable" class="table table-striped" style="">
          <thead>
            <th>Filename</th>
            <th>FileSize</th>
            <th>Uploader</th>
            <th>Status</th>
            <th>Date/Time Upload</th>
            <th>Downloads</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
            require_once("include/connection.php");

            $query = mysqli_query($conn, "SELECT ID, NAME, SIZE, EMAIL, ADMIN_STATUS, TIMERS, DOWNLOAD FROM upload_files GROUP BY NAME DESC") or die(mysqli_error($conn));
            while ($file = mysqli_fetch_array($query)) {
                $id = $file['ID'];
                $name = $file['NAME'];
                $size = $file['SIZE'];
                $uploads = $file['EMAIL'];
                $status = $file['ADMIN_STATUS'];
                $time = $file['TIMERS'];
                $download = $file['DOWNLOAD'];
            ?>
            <tr>
              <td width="17%"><?php echo $name; ?></td>
              <td><?php echo floor($size / 1000) . ' KB'; ?></td>
              <td><?php echo $uploads; ?></td>
              <td><?php echo $status; ?></td>
              <td><?php echo $time; ?></td>
              <td><?php echo $download; ?></td>
              <td style="">
    <a href='../Private_Dashboard/view_file.php?file_id=<?php echo $id; ?>' title="View File" style="margin-right: 10px;">
        <i class="fas fa-eye" style="font-size:24px; color:green;"></i>
    </a>
    <a href='downloads.php?file_id=<?php echo $id; ?>' title="Download File">
        <i class="fas fa-download" style="font-size:24px; color:green;"></i>
    </a>
</td>


            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Card -->
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
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
