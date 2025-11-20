<?php
session_start();

if (!isset($_SESSION['mem_id'])) {
    echo "กรุณาล็อกอิน<br>";
    echo "<a href='login_form.php'>ไปหน้าล็อกอิน</a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>โปรไฟล์สมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            text-align: center;
            background-color: #fff9fb;
            margin: 0;
            padding-top: 80px; /* เว้นช่องว่างให้เนื้อหาไม่ถูก navbar ทับ */
        }

        /* 🌸 Navbar สีชมพูพาสเทล */
        .navbar-pastel {
            background-color: #ffd6e7 !important;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        /* ตรึง Navbar ไว้ด้านบน */
        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
        }

        /* 📨 ปรับข้อความอีเมลไม่ให้ตกขอบ */
        .user-email {
            display: block;
            font-size: 0.9rem;
            color: #555;
            max-width: 200px;
            margin: 0 auto;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* 🖤 ชื่อผู้ใช้สีดำ */
        .username-display {
            color: #000 !important;
            font-weight: 600;
        }

        /* 🌸 ปุ่มออกจากระบบ */
        .logout-btn {
            background-color: #ffc0cb;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            color: black;
            font-weight: 500;
        }

        .logout-btn:hover {
            background-color: #ffb6c1;
        }
    </style>
</head>
<body>

    <!-- 🌸 Navbar -->
    <nav class="navbar navbar-expand-lg navbar-pastel navbar-fixed">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">MyProfile</a>

            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="#">หน้าแรก</a></li>
                <li class="nav-item"><a class="nav-link" href="#">เกี่ยวกับ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">ติดต่อ</a></li>
                <li class="nav-item d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                         class="bi bi-person-circle me-1" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd"
                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7
                              a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805
                              10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0
                              8 1"/>
                    </svg>
                    <span class="nav-link username-display">
                        <?php echo htmlspecialchars($_SESSION['fullname']); ?>
                    </span>
                </li>
            </ul>
        </div>
    </nav>

    <!-- เนื้อหาหลัก -->
    <div class="container mt-4">
        <p class="user-email"><?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <hr>
        <a href="logout.php" class="logout-btn">ออกจากระบบ</a>
    </div>

</body>
</html>
