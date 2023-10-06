<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    
    $data = "$email|$password\n";
    
    file_put_contents("users.txt", $data, FILE_APPEND);
    header("Location: login.php");
}
?>
