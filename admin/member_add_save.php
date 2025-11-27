<?php
include "../connect.php";

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$position = $_POST['position'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO member(username, fullname, email, position, password)
        VALUES ('$username', '$fullname', '$email', '$position', '$password')";
mysqli_query($connect, $sql);

header("Location: member.php");
?>
