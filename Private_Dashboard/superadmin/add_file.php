<?php
session_start();
include 'header.php';
  require_once 'include/helpers.php';

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
                        <label for="subject" class="">Upload File</label>
                        <input type="file" name="myfile" id="file"> <br>
                        <br>
                        <!-- Hidden input to automatically set display option to private_files -->
                        <input type="hidden" name="display_options[]" value="private_files">
                        
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
