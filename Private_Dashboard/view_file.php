<?php
require_once("include/connection.php");

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    $query = mysqli_query($conn, "SELECT * FROM upload_files WHERE ID='$id'") or die(mysqli_error($conn));
    if ($file = mysqli_fetch_array($query)) {
        $filePath = '../uploads/' . $file['NAME']; // Update this path to the actual directory

        if (file_exists($filePath)) {
            // Get the file MIME type
            $mimeType = mime_content_type($filePath);
            
            // Set headers to display the file in the browser
            header('Content-Type: ' . $mimeType);
            header('Content-Disposition: inline; filename="' . basename($filePath) . '"');
            
            // Output the file content
            readfile($filePath);
            exit;
        } else {
            echo "File not found.";
        }
    } else {
        echo "Invalid file ID.";
    }
} else {
    echo "No file ID specified.";
}
?>
