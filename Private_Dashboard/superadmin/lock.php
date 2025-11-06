<?php
session_start();
unset($_SESSION['private_access_granted']);
header("Location: ../add_document.php");
exit;
