<?php 
include "header.php"; 
include "../connect.php";  // เชื่อมฐานข้อมูล

$sql = "SELECT id, username, full_name, email, position FROM users ORDER BY id ASC";
$query = mysqli_query($conn, $sql);
?>

<h3>สมาชิก</h3>

<a href="member_add.php" class="btn btn-success mb-3">เพิ่มสมาชิก</a>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Position</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td>
                <a href="member_edit.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">แก้ไข</a>
                <a href="member_delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
                   onclick="return confirm('ยืนยันการลบ?');">ลบ</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php include "footer.php"; ?>
