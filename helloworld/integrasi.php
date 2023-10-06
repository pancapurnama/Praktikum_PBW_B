 <!DOCTYPE html>
  <html>
  <head>
     <title>Praktikum PHP Dasar</title>
 </head>
 <body>
   
 <h1>Integrasi PHP dengan HTML</h1>
 <?php
    echo "<p>Ini adalah paragraf yang dihasilkan oleh PHP.</p>";
 ?>
 
 <h1>Global Variabel</h1>
 <?php
     $globalVar = "Ini adalah variabel global.";
     function test() {
         global $globalVar;
        echo "<p>$globalVar</p>";
     }
     test();
 ?>
  
 <h1>Query Parameter</h1>
 <a href="query.php?subject=PHP&web=W3Schools">Tes Query Parameter</a>
  
 </body>
 </html>
