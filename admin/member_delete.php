<?php
include "../connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM member WHERE mem_id = $id";
mysqli_query($connect, $sql);

header("Location: member.php");
?>
