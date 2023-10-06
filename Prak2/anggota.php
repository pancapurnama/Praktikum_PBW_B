<?php
session_start();

if (!isset($_SESSION["email"]) && !isset($_COOKIE["email"])) {
    header("Location: login.php");
    exit();
} else {
    $email = $_SESSION["email"] ?? $_COOKIE["email"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Anggota</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $email; ?></h1>
    <p>Ini adalah halaman anggota.</p>
</body>
</html>
