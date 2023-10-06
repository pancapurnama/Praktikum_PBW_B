<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    
    $lines = file("users.txt");
    foreach ($lines as $line) {
        list($stored_email, $stored_password) = explode("|", trim($line));
        
        if ($email == $stored_email && $password == $stored_password) {
            $_SESSION["email"] = $email;
            setcookie("email", $email, time() + (86400 * 30), "/");
            header("Location: anggota.php");
            exit();
        }
    }
    
    echo "Login failed";
}
?>
