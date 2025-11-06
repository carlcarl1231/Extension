<?php
header('Content-Type: application/json');

// include connection
include "include/connection.php"; // adjust filename (if it's connection.php)

$sql = "SELECT * FROM profiles LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode([
        "success"   => true,
        "full_name" => $row["full_name"],
        "degree1"   => $row["degree1"],
        "degree2"   => $row["degree2"],
        "imagePath" => $row["imagePath"]
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "No profile found"
    ]);
}

mysqli_close($conn);
?>
