<?php
// connect to the database
require_once("include/connection.php");

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $user = $_POST['email'];
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    // get display options
    $display_options = isset($_POST['display_options']) ? $_POST['display_options'] : [];

    if (!in_array($extension, ['pdf', 'docx', 'jpg'])) {
        echo '<script type="text/javascript">
                alert("Your file extension must be .pdf, .docx, or .jpg");
                window.location = "add_file.php";
              </script>';
    } elseif ($_FILES['myfile']['size'] > 80000000) { // file shouldn't be larger than 5 Megabytes
        echo '<script type="text/javascript">
                alert("File too large!");
                window.location = "add_file.php";
              </script>';
    } else {
        $query = mysqli_query($conn, "SELECT * FROM `upload_files` WHERE `name` = '$filename'") or die(mysqli_error($conn));
        $counter = mysqli_num_rows($query);

        if ($counter == 1) {
            echo '<script type="text/javascript">
                    alert("File already exists");
                    window.location = "add_document.php";
                  </script>';
        } else {
            date_default_timezone_set("Asia/Manila");
            $time = date("M-d-Y h:i A", strtotime("+0 HOURS"));

            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($file, $destination)) {
                // Serialize display options array for storage in the database
                $display_options_serialized = serialize($display_options);

                $sql = "INSERT INTO upload_files (name, size, download, timers, admin_status, email, display_options) 
                        VALUES ('$filename', $size, 0, '$time', 'Admin', '$user', '$display_options_serialized')";
                if (mysqli_query($conn, $sql)) {
                    echo '<script type="text/javascript">
                            alert("File uploaded successfully");
                            window.location = "add_document.php";
                          </script>';
                }
            } else {
                echo '<script type="text/javascript">
                        alert("Failed to upload file!");
                        window.location = "add_file.php";
                      </script>';
            }
        }
    }
}
?>
