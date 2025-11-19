<?php
session_start();
require_once 'include/connection.php';

$entered = $_POST['password'] ?? '';

// Fetch password from DB
$sql = "SELECT value FROM settings WHERE setting = 'private_files_password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$correct = $row ? $row['value'] : '';

if ($entered === $correct) {
    $_SESSION['private_access_granted'] = true;
    echo "OK";
} else {
    echo "NO";
}
