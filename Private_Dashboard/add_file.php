<?php include 'header.php'; ?>
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
                        
                        <input type="checkbox" name="display_options[]" value="manual_operations"> Manual of Operations<br>
                        <input type="checkbox" name="display_options[]" value="proposal_format"> Proposal Format<br>
                        <input type="checkbox" name="display_options[]" value="post_format"> Post Format<br>
                        <input type="checkbox" name="display_options[]" value="progress_report"> Progress Report<br>
                        <input type="checkbox" name="display_options[]" value="regional"> Regional<br>
                        <input type="checkbox" name="display_options[]" value="university_agenda"> University Agenda<br>
                        <br>
                        <input type="checkbox" name="display_options[]" value="engineering_agenda"> Engineering Extension Agenda<br>
                        <input type="checkbox" name="display_options[]" value="ce_projects"> <b>CE</b> Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="cpe_projects"> <b>CpE</b> Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="ece_projects"> <b>ECE</b> Projects/Activities<br>
                        <br>
                        <input type="checkbox" name="display_options[]" value="ccs_agenda"> CCS Extension Agenda<br>
                        <input type="checkbox" name="display_options[]" value="cs_projects"> <b>CS</b> Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="it_projects"> <b>IT</b> Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="is_projects"> <b>IS</b> Projects/Activities<br>
                        <br>
                        <input type="checkbox" name="display_options[]" value="industech_agenda"> IndusTech Extension Agenda<br>
                        <input type="checkbox" name="display_options[]" value="electronics_projects">  BTVTE Electronics Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="electrical_projects">  BTVTE Electrical Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="fsm_projects">  BTVTE <b>FSM</b>/Culinary Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="automotive_projects"> Automotive Projects/Activities<br>
                        <input type="checkbox" name="display_options[]" value="drafting_projects"> Drafting Projects/Activities<br>
                        <br>
                        <input type="checkbox" name="display_options[]" value="moa"> <b>MOA</b><br>
                        <input type="checkbox" name="display_options[]" value="ppmp"> <b>PPMP</b><br>
                        <br>
                        <label for="display_options" class=""><b>Pool of Experts:</b></label><br>
                        <input type="checkbox" name="display_options[]" value="ccs_pool"> CCS<br>
                        <input type="checkbox" name="display_options[]" value="engineering_pool"> Engineering<br>
                        <input type="checkbox" name="display_options[]" value="industech_pool"> Industrial Technology<br>

                        
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
