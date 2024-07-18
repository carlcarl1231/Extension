<?php include 'header.php'; ?>

<!-- Heading -->
<div class="">
    <a href="add_file.php?page=ece_projects"><button type="button" class="btn btn-success"><i class="fas fa-file-medical"></i> Add File</button></a>
</div>

<hr>

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
                if (is_array($display_options) && in_array('ece_projects', $display_options)) {
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
