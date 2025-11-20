<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2;
            font-family: 'Prompt', sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
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
        .text-center a {
            color: #ff1493;
            text-decoration: none;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>เข้าสู่ระบบ</h2>
        <form method="POST" action="login_check.php">
            <div class="mb-3">
                <label class="form-label">ชื่อผู้ใช้ (Username)</label>
                <input type="text" name="username" class="form-control" placeholder="กรอกชื่อผู้ใช้" required>
            </div>
            <div class="mb-3">
                <label class="form-label">รหัสผ่าน (Password)</label>
                <input type="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน" required>
            </div>
            <button type="submit" class="btn btn-pink w-100">เข้าสู่ระบบ</button>
        </form>

        <div class="text-center mt-3">
            <p>ยังไม่มีบัญชี?  
                👉 <a href="register_form.php">สมัครสมาชิกที่นี่</a>
            </p>
        </div>
    </div>
</body>
</html>
