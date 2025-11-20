<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สมัครสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2;
            font-family: 'Prompt', sans-serif;
        }
        .register-container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(255, 105, 180, 0.3);
        }
        h2 {
            text-align: center;
            color: #ff1493;
            margin-bottom: 20px;
        }
        .btn-pink {
            background-color: #ff69b4;
            color: white;
        }
        .btn-pink:hover {
            background-color: #ff85c1;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>สมัครสมาชิก</h2>
        <form method="POST" action="register_save.php">
            <div class="mb-3">
                <label class="form-label">ชื่อผู้ใช้ (Username)</label>
                <input type="text" name="username" class="form-control" placeholder="กรอกชื่อผู้ใช้" required>
            </div>
            <div class="mb-3">
                <label class="form-label">อีเมล (Email)</label>
                <input type="email" name="email" class="form-control" placeholder="กรอกอีเมล" required>
            </div>
            <div class="mb-3">
                <label class="form-label">ชื่อ-นามสกุล (Full Name)</label>
                <input type="text" name="full_name" class="form-control" placeholder="กรอกชื่อ-นามสกุล" required>
            </div>
            <div class="mb-3">
                <label class="form-label">รหัสผ่าน (Password)</label>
                <input type="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน" required>
            </div>
            <div class="mb-3">
                <label class="form-label">ยืนยันรหัสผ่าน (Confirm Password)</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="ยืนยันรหัสผ่าน" required>
            </div>
            <button type="submit" class="btn btn-pink w-100">สมัครสมาชิก</button>
        </form>
    </div>
</body>
</html>
