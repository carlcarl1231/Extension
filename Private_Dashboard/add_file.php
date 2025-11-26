<?php include 'header.php'; 
      require 'include/helpers.php';
      
      $csrf = new CSRF();

?>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Upload File Form</strong>
                </h5>
                <div class="card-body px-lg-5 pt-0">
                    <form action="fileprocess.php" method="post" enctype="multipart/form-data">
                      <?php echo $csrf->input(); ?>
                        <div class="col-md-11">
                        </div>
                        <!-- <div class="md-form mb-0">
                                <input type="hidden" name="email" value="<?php echo ucwords(htmlentities($name)); ?>" class="form-control" readonly="">
                                <input type="text" value="<?php echo ucwords(htmlentities($admin_status)); ?>" class="form-control" readonly="">
              </div> -->
                        <label for="subject" class="">Upload File</label>
                        <input type="file" name="myfile" id="file"> <br>
<br>
                        <!-- New section for display options -->
                        <label for="display_options" class=""><b>Select Where to Upload:</b></label><br>
              
                         <label for="display_options" class="">------</b></label><br>
                        <input type="checkbox" name="display_options[]" value="automotive"> BindTech Automotive<br>
                        <input type="checkbox" name="display_options[]" value="civil"> BindTech Civil Technology<br>
                        <input type="checkbox" name="display_options[]" value="drafting"> BindTech  Drafting<br>
                        <input type="checkbox" name="display_options[]" value="electrical"> BindTech  Electrical<br>
                        <input type="checkbox" name="display_options[]" value="electronics"> BindTech  Electronics <br>
                        <input type="checkbox" name="display_options[]" value="fsm"> BindTech  FSM<br>
                        <br>
                        <input type="checkbox" name="display_options[]" value="btvte_automotive"> BTVTE Automotive<br>
                        <input type="checkbox" name="display_options[]" value="btvte_civil"> BTVTE Civil Technology <br>
                        <input type="checkbox" name="display_options[]" value="btvte_drafting"> BTVTE Drafting<br>
                         <input type="checkbox" name="display_options[]" value="btvte_electrical"> BTVTE Electrical<br>
                         <input type="checkbox" name="display_options[]" value="btvte_electronics"> BTVTE Electronics<br>
                        <input type="checkbox" name="display_options[]" value="btvte_fsm"> BTVTE FSM<br>
                        <br> 

                         <label for="display_options" class="">Faculty:</b></label><br>


                         <?php
require_once("include/connection.php");

$query = "SELECT id, full_name FROM profiles ORDER BY full_name ASC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $nameParts = explode(" ", trim($row['full_name']));
    $nameParts = array_values(array_filter($nameParts));
    $firstNameParts = [];
    $lastName = strtolower(end($nameParts));

    for ($i = 0; $i < count($nameParts) - 1; $i++) {
        $part = $nameParts[$i];
        if (strlen($part) == 2 && strpos($part, ".") !== false) continue; // skip initials
        $firstNameParts[] = strtolower($part);
    }

    $firstName = implode("", $firstNameParts);
    $slug = $lastName . "_" . $firstName;

    echo '<input type="checkbox" name="display_options[]" value="'.$slug.'"> '.$row['full_name'].'<br>';
}
?>

          
                        <!-- <input type="checkbox" name="display_options[]" value="accad_abraham"> Accad, Abraham S.<br>
                         <input type="checkbox" name="display_options[]" value="accad_mildred"> Accad, Mildred F. <br>
                        <input type="checkbox" name="display_options[]" value="arrivas_michael"> Arrivas, Michael C. <br>
                        <input type="checkbox" name="display_options[]" value="arrivas_debbiejoy"> Arrivas, Debbie Joy L.<br>
                        <input type="checkbox" name="display_options[]" value="berina_randy"> Berina, Randy T.<br>
                        <input type="checkbox" name="display_options[]" value="binag_irene"> Binag, Irene A.<br>
                        <input type="checkbox" name="display_options[]" value="bravante_lemuel"> Bravante, Lemuel<br>
                        <input type="checkbox" name="display_options[]" value="domingo_cyriljohn"> Domingo, Cyril John A.<br>
                        <input type="checkbox" name="display_options[]" value="evangelista_cirilio"> Evangelista, Cirilio C.<br>
                        <input type="checkbox" name="display_options[]" value="valerio_jenamae"> Valerio, Jena Mae <br>
                        <input type="checkbox" name="display_options[]" value="guinsan_jusoe"> Guinsan, Josue V.<br>
                        <input type="checkbox" name="display_options[]" value="maghanoy_charlie"> Maghanoy, Charlie J.<br>
                        <input type="checkbox" name="display_options[]" value="kadatuan_annie"> Kadatuan, Annie M.<br>
                        <input type="checkbox" name="display_options[]" value="pahunar_realyn"> Pahunar, Realyn<br>
                        <input type="checkbox" name="display_options[]" value="recopuerto_rommel"> Recopuerto, Romel M.<br>

                        <input type="checkbox" name="display_options[]" value="talua_glenn"> Talua, Glenn S.<br>
                        <input type="checkbox" name="display_options[]" value="arendain_rolando"> Arendain, Rolando F.<br>
                        <input type="checkbox" name="display_options[]" value="cabanal_kristianjay"> Cabanal, Kristian Jay O.<br>
                        <input type="checkbox" name="display_options[]" value="caribaga_shelmer"> Caribaga, Shelmer D.<br>
                        <input type="checkbox" name="display_options[]" value="jainar_kingr"> Jainar, Kirk Jing<br>
                        <input type="checkbox" name="display_options[]" value="pasinag_jester"> Pasinag, Jester L.<br>
                        <input type="checkbox" name="display_options[]" value="valdez_jonathan"> Valdez, Jonathan<br>
                        <input type="checkbox" name="display_options[]" value="armada_amy"> Armada, Amy<br>
                        <input type="checkbox" name="display_options[]" value="moya_nora"> Moya, Nora M.<br>
                        <input type="checkbox" name="display_options[]" value="tapot_mayflor"> Tapot, May Flor<br>
                        <input type="checkbox" name="display_options[]" value="wawa_sheiluamor"> Wawa, Sheilu Amor<br>
                        <input type="checkbox" name="display_options[]" value="almanon_lebilyn"> Almanon, Lebilyn<br>
                        <input type="checkbox" name="display_options[]" value="bernardino_rheajayne"> Bernardino, Rheay Jayne<br>
                        <input type="checkbox" name="display_options[]" value="castro_donnagin"> Castro, Donna Gin<br>
                        <input type="checkbox" name="display_options[]" value="daza_dave"> Daza, Dave<br>
                        <input type="checkbox" name="display_options[]" value="fuentes_maryrollane"> Fuentes, Mary Rollane<br>
                        <input type="checkbox" name="display_options[]" value="juezan_marilyn"> Juezan, Marilyn<br>
                        <input type="checkbox" name="display_options[]" value="derije_angelfaye"> Derije, Angel Faye<br>
                        <input type="checkbox" name="display_options[]" value="landero_daryll"> Landero, Daryll<br>
<br> -->
                        <input type="checkbox" name="display_options[]" value="outgoing_letters"> Outgoing Letters<br>
                        <input type="checkbox" name="display_options[]" value="received_letters"> Received Letters<br>

<br>

                        <input type="checkbox" name="display_options[]" value="moa"> MOA <br> 
                        <input type="checkbox" name="display_options[]" value="ppmp"> PPMP<br>
                        <input type="checkbox" name="display_options[]" value="extension"> Extension<br>
                        <input type="checkbox" name="display_options[]" value="accreditation"> Accreditation<br>
                        <input type="checkbox" name="display_options[]" value="copc"> COPC<br>
                        <input type="checkbox" name="display_options[]" value="others"> Other Files<br>
                                                <button type="submit" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="save">UPLOAD</button>
                        <footer style="font-size: 12px"><b>File Type:</b><font color="red"><i> .pdf, .docx, .jpg</i></font></footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="footer-copyright py-3">
    <p>All right Reserved &copy; <?php echo date('Y'); ?> Developed By:Tundag & Franco</p>
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
  $("#Alert").on("click", function () {
    uservalidate();
    userfile();
    if (uservalidate() === true && userfile() === true) {
    }
  });

  function uservalidate() {
    if ($('#categ').val() == '') {
      $('#categ').css('border-color', '#dc3545');
      return false;
    } else {
      $('#categ').css('border-color', '#dc3545');
      return true;
    }
  }

  function userfile() {
    if ($('#file').val() == '') {
      $('#file').css('border-color', '#dc3545');
      return false;
    } else {
      $('#file').css('border-color', '#dc3545');
      return true;
    }
  }
</script>
<?php include 'footer.php'; ?>

</body>
</html>
