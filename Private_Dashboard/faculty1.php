<?php include 'header_2.php'; ?>

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
        $profile_image=$rs['profile_image'];
    ?>
      <!-- Each profile in 4 columns -->
      <div class="col-md-3 mb-4"> 
        <div class="card custom-card h-100">
          <div class="card-header text-center">
            <img id="profileImg" 
              src="<?php echo $rs['profile_image']; ?>" 
              alt="Profile Picture"
              style="width:80px; height:80px; border-radius:50%; object-fit:cover;">
              <h6 class="mt-2 name-display"><?php echo $full_name; ?></h6>
          </div>

          <div class="card-body">
            <h6>Personal Details</h6>
            <p><?php echo $degree1; ?></p>
            <p><?php echo $degree2; ?></p>
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
            <a href="<?php echo $filename; ?>" class="name-display-viewfiles btn btn-sm mt-2">
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
