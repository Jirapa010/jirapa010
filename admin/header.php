<?php
session_start();

// ป้องกันผู้ใช้ที่ไม่ใช่ admin
if (!isset($_SESSION['position']) || $_SESSION['position'] !== 'admin') {
    echo "คุณไม่มีสิทธิ์เข้าถึงหน้านี้";
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* 🎀 โทนสีชมพู */
        .navbar-pink {
            background: #ff5fa2; /* ชมพูสด */
        }

        .navbar-pink .nav-link,
        .navbar-pink .navbar-brand {
            color: white !important;
            font-weight: 500;
        }

        .navbar-pink .nav-link:hover {
            color: #ffe6f0 !important;
        }

        body {
            background: #ffeef7; /* พื้นหลังชมพูอ่อน */
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-pink">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">🌸 Admin Panel</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">🏠 Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="member.php">👥 Members</a>
                </li>
            </ul>

            <span class="navbar-text text-white me-3">
                <?= $_SESSION['fullname']; ?> (Admin)
            </span>

            <a href="../logout.php" class="btn btn-light btn-sm">
                Logout
            </a>
        </div>
    </div>
</nav>

<div class="container mt-4">
