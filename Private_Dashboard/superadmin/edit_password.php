<?php
session_start();
require_once("./include/connection.php");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    // Fetch the current password from the database
    $sql = "SELECT value FROM settings WHERE setting='private_files_password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['value'] === $current_password) {
        // Update password in the database
        $sql = "UPDATE settings SET value='$new_password' WHERE setting='private_files_password'";
        if (mysqli_query($conn, $sql)) {
            // Password updated successfully, redirect to private_files.php
            header("Location: private_files.php");
            exit();
        } else {
            $message = "Error updating password: " . mysqli_error($conn);
        }
    } else {
        $message = "Current password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .password-form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .password-form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #343a40;
        }
        .password-form-container .form-group {
            margin-bottom: 20px;
        }
        .password-form-container .btn {
            width: 100%;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="password-form-container col-md-4">
        <h2>Edit Password</h2>
        <?php if (isset($message)) { ?>
            <div class="alert alert-info" role="alert">
                <?php echo $message; ?>
            </div>
        <?php } ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" name="current_password" id="current_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" name="new_password" id="new_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
