<?php
session_start();
session_unset();
session_destroy();

// Redirect to login page
header("Location: loginlibrary.php");
exit(); // Always include this after header redirects
?>
