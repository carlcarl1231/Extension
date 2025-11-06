<html>
<body>
  

<?php include 'header_2.php'; ?>
  
<!-- Heading -->
<div class="">
    <a href="add_file.php?page=engineering_pool"><button type="button" class="btn btn-success"><i class="fas fa-file-medical"></i> Add File</button></a>
</div>
<div class="">
     <?php
         require_once("include/connection.php");
            $full_names="22";
           
            $query="SELECT * FROM profiles WHERE id='$full_names'";
            $result=mysqli_query($conn,$query);
            while($rs=mysqli_fetch_array($result)){
              $id =  $rs['id'];
               $full_name=$rs['full_name'];
               $degree1=$rs['degree1'];
               $degree2=$rs['degree2'];
               $profile_image=$rs['profile_image'];
          ?>       
    
<form id="profileForm" enctype="multipart/form-data">
  <div class="card custom-card">
    <div class="card-header">

   <img id="profileImg" 
     src=" <?php echo $rs['profile_image'] ?>" 
     alt="Profile Picture"
     style="width:120px; height:120px; border-radius:50%; object-fit:cover;">

      <h1 id="nameDisplay" class="name-display"><?php echo $full_name; ?></h1>
    </div>

    <div class="two-columns">
      <div class="column" id="detailsDisplay">
        <h2>Personal Details</h2>
        <p id="degree1Text"><?php echo $degree1; ?></p>
        <p id="degree2Text"><?php echo $degree2; ?></p>
        <p class="title">CEO & Founder, Magicarp</p>
    <p>Sultan Kudarat State University</p>
        <td align='center'><a href="#modalRegisterFormsss?id=<?php echo $id;?>">
        <i class="fas fa-user-edit" data-toggle="modal" data-target="#modalRegisterFormsss"></i> </a> | <a href="delete_admin.php?id=<?php echo htmlentities($rs['id']); ?>"><i class='far fa-trash-alt'></i></a></td>
      </div>
    </div>
    
  </div>
</form>
    <?php } ?>

<!-- files section -->

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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require_once("include/connection.php");
            $query = mysqli_query($conn, "SELECT * FROM upload_files") or die(mysqli_error($conn));
            while ($file = mysqli_fetch_array($query)) {
                $display_options = !empty($file['display_options']) ? unserialize($file['display_options']) : [];
                if (is_array($display_options) && in_array('kadatuan_annie', $display_options)) {
                    $id = $file['ID'];
                    $name = $file['NAME'];
                    $size = $file['SIZE'];
                    $uploads = $file['EMAIL'];
                    $status = $file['ADMIN_STATUS'];
                    $time = $file['TIMERS'];
                    $download = $file['DOWNLOAD'];
            ?>
            <tr>
                <td width="20%"><?php echo $name; ?></td>
                <td><?php echo floor($size / 1000) . ' KB'; ?></td>
                <td><?php echo $uploads; ?></td>
                <td><?php echo $status; ?></td>
                <td><?php echo $time; ?></td>
                <td><?php echo $download; ?></td>
                  <td>
                    <a href='view_file.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
                    <a href='downloads.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-primary"><i class="fa fa-download"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-id="<?php echo $id; ?>" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <?php } } ?>
        </tbody>
    </table>
</div>

<hr>
<div class="footer-copyright py-3">
    <p>All right Reserved &copy; <?php echo date('Y'); ?> Developed By:Tundag & Franco</p>
</div>

    <!--/.Copyright-->

<div>
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <!--/.Footer-->

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


<div class="modal fade" id="modalRegisterFormsss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
    <?php 

require_once("include/connection.php");
 
$full_names = "22"; #change name if want to change user profile
$q = mysqli_query($conn, "SELECT * FROM profiles WHERE id= '$full_names' LIMIT 1") 
     or die(mysqli_error($conn));

// fetch the row
if ($rs1 = mysqli_fetch_assoc($q)) {
    $id1       = $rs1['id'];
    $full_name1= $rs1['full_name'];
    $degree11  = $rs1['degree1'];
    $degree21  = $rs1['degree2'];
} else {
    echo "No profile found for $full_name";
}

?>

  <div class="modal-dialog" role="document">
    <form method="POST" enctype="multipart/form-data" >  
    
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-edit"></i> Edit User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body mx-3">
           <div class="md-form mb-5">
            <input type="hidden" class="form-control" name="id" value="<?php echo $id1;?>"><br>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="full_name" value="<?php echo $full_name1;?>" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-4 text-center">
  <input type="file" id="orangeForm-file" name="profile_image" class="form-control">
</div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="degree1" value="<?php echo $degree11;?>" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Degree1</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="degree2" value="<?php echo $degree21;?>" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Degree2</label>
        </div>
          <!-- <div class="md-form mb-4">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="status" value = "Employee" class="form-control validate" readonly="">
          <label data-error="wrong" data-success="right" for="orangeForm-name">User Status</label>
        </div> -->
      
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" name="edit2">UPDATE</button>
      </div>
    </div>
  </div>
</div>
</form>

  <!--modal--->
 <?php 

 require_once("include/connection.php");


if (isset($_POST['edit2'])) {
    $id        = mysqli_real_escape_string($conn, $_POST['id']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $degree1   = mysqli_real_escape_string($conn, $_POST['degree1']);
    $degree2   = mysqli_real_escape_string($conn, $_POST['degree2']);

    // just save file name/path in DB
    $file_name = $_FILES['profile_image']['name'];
    $target    = "img/" . $file_name; // relative path stored in DB
 $uploadDir =  "img/" . $file_name; // actual server path


    if (!empty($file_name)) {
        // update WITH new image path
      if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadDir)) {
            // update WITH new image path
            $sql = "UPDATE profiles 
                    SET full_name='$full_name', 
                        degree1='$degree1', 
                        degree2='$degree2', 
                        profile_image='$target'
                    WHERE id='$id'";
        } else {
            echo "<script>alert(' Failed to upload image!');</script>";
            exit;
        }
    } else {
        // update WITHOUT changing image
        $sql = "UPDATE profiles 
                SET full_name='$full_name', 
                    degree1='$degree1', 
                    degree2='$degree2'
                WHERE id='$id'";
    }

    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    echo "<script>alert('✅ Profile updated successfully!');document.location='pasinag_jester.php';</script>";
}

 


//        //  $user_status = mysqli_real_escape_string($conn,$_POST['status']);

//      mysqli_query($conn,"UPDATE `profiles` SET `full_name` = '$full_name', `degree1` = '$degree1', `degree2` = '$degree2' where id='$id'") or die (mysqli_error($conn));
  
//   echo "<script type = 'text/javascript'>alert('Success Edit User/Employee!!!');document.location='kadatuan_annie.php'</script>";

// }

?>


</div>


<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this file?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" id="confirmDelete" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    var deleteId;

    $('#deleteModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      deleteId = button.data('id');
    });

    $('#confirmDelete').click(function() {
      window.location.href = 'delete.php?ID=' + deleteId;
    });
  });
</script>

<?php include 'footer.php'; ?>


</body>
</html>
