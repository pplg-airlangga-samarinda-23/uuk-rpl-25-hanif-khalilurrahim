<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'kader') {
    header("Location: login.php");
    exit();
}
include 'login.php';
?>

<h2>Masukkan Data Bayi</h2>
<form method="POST" action=".php">
    <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
    <input type="text" name="tinggi" placeholder="tinggi" required><br>
    <input type="text" name="berat" placeholder="berat" required><br>
    <button type="submit">Kirim</button>
</form>