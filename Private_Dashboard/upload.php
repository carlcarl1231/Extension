<?php
header('Content-Type: application/json');

// include connection
include "include/connection.php";

$full_name = $_POST['full_name'] ?? '';
$degree1   = $_POST['degree1'] ?? '';
$degree2   = $_POST['degree2'] ?? '';
$imagePath = "";

// 🔹 Handle image upload
if (!empty($_FILES['profile_picture']['name'])) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $fileName = time() . "_" . basename($_FILES["profile_picture"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFilePath)) {
        $imagePath = $targetFilePath;
    }
}

// 🔹 Update first profile (id=1 for now)
$sql = "UPDATE profiles 
        SET full_name=?, degree1=?, degree2=?, imagePath=? 
        WHERE id=1";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $full_name, $degree1, $degree2, $imagePath);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode([
        "success"   => true,
        "full_name" => $full_name,
        "degree1"   => $degree1,
        "degree2"   => $degree2,
        "imagePath" => $imagePath
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => mysqli_error($conn)
    ]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
