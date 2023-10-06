<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $subject = $_GET['subject'];
        $web = $_GET['web'];
         echo "Subject adalah $subject dan website adalah $web.";
    }
 ?>
