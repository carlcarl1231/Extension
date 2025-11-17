<?php
session_start();
unset($_SESSION['private_access_granted']);
header("Location: ../dashboard.php");
exit;
