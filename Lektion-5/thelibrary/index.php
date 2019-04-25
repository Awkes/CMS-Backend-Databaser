<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Library</title>
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
</head>
<body>
  <h1>The Library</h1>
  <hr>
  
  <?php
    
    if(!isset($_GET['page'])) {
      $page = 'home';
    } 
    else {
      $page = $_GET['page'];
    }
    
    require('nav.php');
    require('router.php');
  ?>


</body>
</html>