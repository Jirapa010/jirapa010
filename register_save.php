<?php
include 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // กรองข้อมูลจากฟอร์ม
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $full_name = trim($_POST['full_name'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // ✅ ตรวจสอบค่าว่าง
    if (empty($username) || empty($email) || empty($full_name) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('กรุณากรอกข้อมูลให้ครบทุกช่อง'); window.location='register_form.php';</script>";
        exit;
    }

    // ✅ ตรวจสอบรูปแบบ username และ email
    if (!preg_match('/^[A-Za-z0-9_.-]{3,20}$/', $username)) {
        echo "<script>alert('ชื่อผู้ใช้ต้องเป็นภาษาอังกฤษหรือตัวเลข 3-20 ตัวอักษร'); window.location='register_form.php';</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('อีเมลไม่ถูกต้อง'); window.location='register_form.php';</script>";
        exit;
    }

    // ✅ ตรวจสอบรหัสผ่านตรงกัน
    if ($password !== $confirm_password) {
        echo "<script>alert('รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน'); window.location='register_form.php';</script>";
        exit;
    }

    // ✅ ตรวจสอบความยาวรหัสผ่าน
    if (strlen($password) < 8) {
        echo "<script>alert('รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร'); window.location='register_form.php';</script>";
        exit;
    }

    // ✅ เข้ารหัสรหัสผ่าน
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ✅ ใช้ prepared statement ป้องกัน SQL Injection
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        echo "<script>alert('ชื่อผู้ใช้หรืออีเมลนี้มีอยู่แล้วในระบบ'); window.location='register_form.php';</script>";
        exit;
    }

    // ✅ บันทึกข้อมูลอย่างปลอดภัย
    $insert_stmt = $conn->prepare("INSERT INTO users (username, email, full_name, password) VALUES (?, ?, ?, ?)");
    $insert_stmt->bind_param("ssss", $username, $email, $full_name, $hashed_password);

    if ($insert_stmt->execute()) {
        echo "<script>alert('สมัครสมาชิกสำเร็จ!'); window.location='login_form.php';</script>";
    } else {
        error_log("SQL Error: " . $insert_stmt->error); // log แทนการโชว์
        echo "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่ภายหลัง'); window.location='register_form.php';</script>";
    }

    // ✅ ปิด statement และ connection
    $insert_stmt->close();
    $check_stmt->close();
    $conn->close();
    
} else {
    echo "<script>alert('ไม่สามารถเข้าหน้านี้โดยตรงได้'); window.location='register_form.php';</script>";
}
?>
  