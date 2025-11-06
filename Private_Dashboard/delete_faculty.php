<?php
require_once("include/connection.php");

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $delete = mysqli_query($conn, "DELETE FROM  profiles WHERE id='$id'");

    if ($delete) {
        echo "<script>
                alert('File has been successfully deleted!');
                window.location.href = 'faculty.php';
              </script>";
    } else {
        $error = addslashes(mysqli_error($conn)); // Escape for JavaScript safety
        echo "<script>
                alert('Error deleting file: $error');
                window.location.href = 'faculty.php';
              </script>";
    }
} else {
    echo "<script>
            alert('No file ID provided.');
            window.location.href = 'faculty.php';
          </script>";
}
?>
