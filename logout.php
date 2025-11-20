<?php
session_start();
session_unset();
session_destroy();

// กลับไปหน้า login
header('Location: login_form.php');
exit();
?>
