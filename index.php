<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <header class="index_main_header">
    <ul class="index_main_unorderdlist">
      <li><a href="#">Home</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="profil.php">      
      <?php
      session_start();
      echo "Hallo , " . $_SESSION['username'] . '<img class= "settingImage" src="settings.png" width = "20px" height = "20px" alt="">';
      ?></a>
    </ul>
  </header>
  

<script src="profilebutton.js"></script>
</body>
</html>