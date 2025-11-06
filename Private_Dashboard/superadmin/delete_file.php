<?php
require_once("include/connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['file_id'])) {
    $file_id = intval($_POST['file_id']);
    $query = "DELETE FROM private_files WHERE ID = $file_id";
    if (mysqli_query($conn, $query)) {
        header("Location: private_files.php?msg=deleted");
    } else {
        echo "Error deleting file.";
    }
}
?>
