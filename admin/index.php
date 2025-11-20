<?php
session_start();

if (!isset($_SESSION['mem_id'])) {
    echo "กรุณาล็อกอิน<br>";
    echo "<a href='login_form.php'>ไปหน้าล็อกอิน</a>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<H1>Hello Admin
<span class="nav-link username-display">
    <?php echo htmlspecialchars($_SESSION['fullname']); ?>
</span>
</H1>
</body>
</html>
