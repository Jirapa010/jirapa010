<?php
include "header.php";
include "../connect.php";

if (!isset($_GET['id'])) {
    echo "<script>alert('ไม่พบข้อมูลสมาชิก'); window.location='member.php';</script>";
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

if (!$row) {
    echo "<script>alert('ไม่พบบัญชีสมาชิกในระบบ'); window.location='member.php';</script>";
    exit();
}
?>

<h3>แก้ไขข้อมูลสมาชิก</h3>

<form action="member_edit_db.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" 
               value="<?= $row['username']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Fullname</label>
        <input type="text" name="fullname" class="form-control" 
               value="<?= $row['full_name']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" 
               value="<?= $row['email']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Position</label>
        <select name="position" class="form-control">
            <option value="admin" <?= ($row['position']=="admin"?"selected":"") ?>>Admin</option>
            <option value="user" <?= ($row['position']=="user"?"selected":"") ?>>User</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">บันทึก</button>
    <a href="member.php" class="btn btn-secondary">กลับ</a>
</form>

<?php include "footer.php"; ?>
