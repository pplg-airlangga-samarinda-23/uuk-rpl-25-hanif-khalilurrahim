<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'kader') {
    header("Location: login.php");
    exit();
}

include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];

    $sql = "INSERT INTO data_bayi (nama, tinggi, berat) VALUES (?, ?, ?)";
    $row = $conn->execute_query($sql, [$nama, $tinggi, $berat]);

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>input_bayi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form class="bayi-form" method="POST" action="data_bayi.php">
        <h2>Masukkan Data Bayi</h2>
        <input type="text" name="nama" placeholder="nama" required><br>
        <input type="text" name="tinggi" placeholder="tinggi" required><br>
        <input type="text" name="berat" placeholder="berat" required><br>
        <button type="submit">Kirim</button>
    </form>

</body>
</html>