<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] == 'admin') {
        header("Location: input_akun.php");
    } else {
        header("Location: input_bayi.php");
    }
} else {
    echo "Login gagal!";
}
?>