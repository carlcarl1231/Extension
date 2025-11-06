<?php
session_start();
require_once("include/connection.php");

$sql = "SELECT value FROM settings WHERE setting='private_files_password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$private_password = $row ? $row['value'] : '';

if (isset($_GET['logout'])) {
    unset($_SESSION['private_access_granted']);
    header("Location: private_files.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Private Files</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">
    <style>
        #passwordModal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #D8FFB1;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        #passwordBox {
            background-color: #111;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px #0f0;
            text-align: center;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }
        #passwordBox h2 {
            margin-bottom: 20px;
        }
        #passwordInput {
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            margin-bottom: 15px;
        }
        #submitPassword {
            background-color: #0f0;
            color: #000;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        #submitPassword:hover {
            background-color: #00cc00;
        }
        #errorMsg {
            color: red;
            margin-top: 10px;
            display: none;
        }
        #mainContent {
            display: <?= isset($_SESSION['private_access_granted']) ? 'block' : 'none' ?>;
        }
        table td {
            white-space: nowrap;
        }
    </style>
</head>
<body>

<?php if (!isset($_SESSION['private_access_granted'])): ?>
<!-- Password Modal -->
<div id="passwordModal">
    <div id="passwordBox">
        <h2>Enter Password</h2>
        <input type="password" id="passwordInput" placeholder="Password">
        <br>
        <button id="submitPassword">Submit</button>
        <div id="errorMsg">Incorrect password. Try again.</div>
    </div>
</div>
<?php endif; ?>

<!-- Main Content -->
<div id="mainContent">
    <?php include 'header.php'; ?>

    <div class="container mt-4">
        <a href="add_file.php?page=private_files" class="btn btn-success"><i class="fas fa-file-medical"></i> Add File</a>
        <a href="edit_password.php" class="btn btn-warning">Edit Password</a>
        <a href="lock.php" class="btn btn-danger float-right">Lock</a>

        <hr>

        <div class="col-md-12 table-responsive">
            <table id="dtable" class="table table-striped table-bordered dt-responsive nowrap">
                <thead class="thead-dark">
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
                    $query = mysqli_query($conn, "SELECT * FROM private_files ORDER BY CAST(SUBSTRING_INDEX(NAME, ' ', -1) AS UNSIGNED) DESC") or die(mysqli_error($conn));
                    while ($file = mysqli_fetch_array($query)) {
                        $display_options = !empty($file['display_options']) ? unserialize($file['display_options']) : [];
                        if (is_array($display_options) && in_array('private_files', $display_options)) {
                            $id = $file['ID'];
                            $name = $file['NAME'];
                            $size = $file['SIZE'];
                            $uploads = $file['EMAIL'];
                            $status = $file['ADMIN_STATUS'];
                            $time = $file['TIMERS'];
                            $download = $file['DOWNLOAD'];
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($name); ?></td>
                        <td><?= floor($size / 1000) . ' KB'; ?></td>
                        <td><?= htmlspecialchars($uploads); ?></td>
                        <td><?= htmlspecialchars($status); ?></td>
                        <td><?= date("M-d-Y h:i A", strtotime($time)); ?></td>
                        <td><?= htmlspecialchars($download); ?></td>
                        <td>
                            <a href='view_file.php?file_id=<?= $id ?>' class="btn btn-sm btn-outline-info" target="_blank">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href='downloads.php?file_id=<?= $id ?>' class="btn btn-sm btn-outline-primary"><i class="fa fa-download"></i></a>
                            <button type="button" class="btn btn-sm btn-outline-danger" data-id="<?= $id ?>" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <form method="POST" action="delete_file.php">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <input type="hidden" name="file_id" id="deleteFileId">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this file?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php include 'footer.php'; ?>
</div>

<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

<script>
    const correctPassword = "<?= $private_password ?>";

    document.getElementById("submitPassword")?.addEventListener("click", function () {
        const entered = document.getElementById("passwordInput").value;
        if (entered === correctPassword) {
            // Store access session by calling PHP backend
            fetch("grant_access.php", { method: "POST" })
                .then(() => {
                    // Hide modal and show content
                    document.getElementById("passwordModal").style.display = "none";
                    document.getElementById("mainContent").style.display = "block";
                    if (!$.fn.DataTable.isDataTable('#dtable')) {
                        $('#dtable').DataTable({ responsive: true });
                    }
                });
        } else {
            document.getElementById("errorMsg").style.display = "block";
        }
    });

    document.getElementById("passwordInput")?.addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
            document.getElementById("submitPassword").click();
        }
    });

    // Set file ID in delete modal
    $(document).on('click', 'button[data-target="#deleteModal"]', function () {
        const fileId = $(this).data('id');
        $('#deleteFileId').val(fileId);
    });

    // If session allows access, show content and initialize DataTable
    $(document).ready(function () {
        const hasAccess = <?= isset($_SESSION['private_access_granted']) ? 'true' : 'false' ?>;
        if (hasAccess) {
            document.getElementById("passwordModal").style.display = "none";
            document.getElementById("mainContent").style.display = "block";

            if (!$.fn.DataTable.isDataTable('#dtable')) {
                $('#dtable').DataTable({ responsive: true });
            }
        }
    });
</script>
</body>
</html>
