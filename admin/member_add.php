<?php include "header.php"; ?>

<h3>เพิ่มสมาชิก</h3>

<form action="member_add_save.php" method="POST">
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Fullname</label>
        <input type="text" name="fullname" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>ตำแหน่ง</label>
        <select name="position" class="form-control">
            <option value="admin">admin</option>
            <option value="user">user</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-success">บันทึก</button>
</form>

<?php include "footer.php"; ?>
