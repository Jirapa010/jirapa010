<?php
include "../connect.php";

$id = $_POST['mem_id'];
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$position = $_POST['position'];

$sql = "UPDATE member SET 
        username='$username',
        fullname='$fullname',
        email='$email',
        position='$position'
        WHERE mem_id=$id";

mysqli_query($connect, $sql);

header("Location: member.php");
?>
