<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

// เตรียมคำสั่ง SQL ปลอดภัย (Prepared Statement)
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // ตรวจสอบรหัสผ่านที่เข้ารหัสไว้ด้วย password_verify
    if (password_verify($password, $row['password'])) {

        // ตั้งค่า session
        $_SESSION['mem_id'] = $row['id'];
        $_SESSION['fullname'] = $row['full_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['position'] = $row['position'];   // ⭐ สำคัญมาก!

        // ส่งเข้าหน้าตามสิทธิ์
        if ($row['position'] == 'admin') {
            echo "<script> window.location='admin/index.php'; </script>";
        } elseif ($row['position'] == 'user') {
            echo "<script> window.location='profile.php'; </script>";
        }
        exit();
    } else {
        echo "<script>alert('รหัสผ่านไม่ถูกต้อง'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('ไม่พบบัญชีผู้ใช้นี้'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
