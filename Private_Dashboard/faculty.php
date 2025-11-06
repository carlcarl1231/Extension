<html>
<body>

<?php include 'header_2.php'; ?>
  
<div class="">
    <a href="#modalRegisterFormsss?id=<?php echo $id;?>" data-toggle="modal" data-target="#modalRegisterFormsss" class="name-display-viewfiles btn btn-sm mt-2">
     Add Faculty </a> 
</div>
<br>
    
<div>
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
 
$q = mysqli_query($conn, "SELECT * FROM profiles WHERE id= '$full_names' LIMIT 1") 
     or die(mysqli_error($conn));

?>

  <div class="modal-dialog" role="document">
    <form method="POST" enctype="multipart/form-data" >  
    
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-edit"></i> Add Faculty</h4>
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
          <input type="text" id="orangeForm-name" name="full_name"  class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-4 text-center">
  <input type="file" id="orangeForm-file" name="profile_image" class="form-control">
</div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="degree1"  class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Degree1</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="degree2"  class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Degree2</label>
        </div>
         
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="degree3"  class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Degree3</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="degree4"  class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Degree4</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="degree5"  class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Degree5</label>
        </div>
      
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" name="edit2">Add</button>
      </div>
    </div>
  </div>
</div>
</form>

 <?php 

 require_once("include/connection.php");


if (isset($_POST['edit2'])) {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $degree1   = mysqli_real_escape_string($conn, $_POST['degree1']);
    $degree2   = mysqli_real_escape_string($conn, $_POST['degree2']);
    $degree3   = mysqli_real_escape_string($conn, $_POST['degree3']);
    $degree4   = mysqli_real_escape_string($conn, $_POST['degree4']);
    $degree5   = mysqli_real_escape_string($conn, $_POST['degree5']);
    // just save file name/path in DB
    $file_name = $_FILES['profile_image']['name'];
    $target    = "img/" . $file_name; // relative path stored in DB
 $uploadDir =  "img/" . $file_name; // actual server path


   if (!empty($file_name)) {
    if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadDir)) {
        // ✅ Insert with image
        $sql = "INSERT INTO profiles 
                   (full_name, degree1, degree2, degree3, degree4, degree5, profile_image)
                VALUES 
                   ('$full_name', '$degree1', '$degree2', '$degree3', '$degree4', '$degree5'," .
                   ($target ? "'$target'" : "NULL") . ")";
    } else {
        echo "<script>alert('❌ Failed to upload image!');</script>";
        exit;
    }
} else {
    // ✅ Insert without new image
    $sql = "INSERT INTO profiles 
               (full_name, degree1, degree2, degree3, degree4, degree5,  profile_image)
            VALUES 
               ('$full_name', '$degree1', '$degree2', '$degree3', '$degree4', '$degree5', NULL)";
}

mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo "<script>alert('✅ Profile added successfully!');document.location='faculty.php';</script>";

}


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



<div class="container-fluid">
  <div class="row">
    <?php
      require_once("include/connection.php");
      $query="SELECT * FROM profiles";
      $result=mysqli_query($conn,$query);

      while($rs=mysqli_fetch_array($result)){
        $id =  $rs['id'];
        $full_name=$rs['full_name'];
        $degree1=$rs['degree1'];
        $degree2=$rs['degree2'];
        $degree3=$rs['degree3'];
        $degree4=$rs['degree4'];
        $degree5=$rs['degree5'];
        $profile_image=$rs['profile_image'];
    ?>
      <!-- Each profile in 4 columns -->
      <div class="col-md-3 mb-4"> 
        <div class="card custom-card h-100">
          <div class="card-header text-center">
            <img id="profileImg" 
              src="<?php echo $rs['profile_image']; ?>" 
              alt="Profile Picture"
              style="width:120px; height:120px; border-radius:100%; object-fit:cover;">
              <h6 class="mt-2 name-display"><?php echo $full_name; ?></h6>
          </div>

          <div class="card-body">
            <h6>Personal Details</h6>
            <p><?php echo $degree1; ?></p>
            <p><?php echo $degree2; ?></p>
            <p><?php echo $degree3; ?></p>
            <p><?php echo $degree4; ?></p>
            <p><?php echo $degree5; ?></p>
          </div>
<?php
// Break name into words
$nameParts = explode(" ", trim($full_name));
$nameParts = array_values(array_filter($nameParts)); // clean up spaces

$firstNameParts = [];
$lastName = strtolower(end($nameParts)); // Always last word = Lastname

for ($i = 0; $i < count($nameParts) - 1; $i++) {
    $part = $nameParts[$i];

    // Skip middle initials like "L."
    if (strlen($part) == 2 && strpos($part, ".") !== false) {
        continue;
    }

    $firstNameParts[] = strtolower($part);
}

$firstName = implode("", $firstNameParts);

// Build filename
$filename = $lastName . "_" . $firstName . ".php";
?>


</a>
          <div class="card-footer text-center ">
            <a href="view.php?id=<?php echo $id; ?>" class="name-display-viewfiles btn btn-sm mt-2">
  View Files
</a>


          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>






</body>
</html>

<?php include 'footer.php'; ?>