<?php
  require('partials/session.php');
  require('partials/connect.php');
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Journal</title>
  <link href="style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bangers%7cRoboto" rel="stylesheet">
</head>
<body>
  <header>
    <h1><a href="index.php">📖&nbsp;Journal</a></h1>
    <hr>
    <?php require('partials/login.php'); ?>
    <hr>
  </header>

  <main>   
    <?php require('partials/router.php'); ?>
  </main>

  <footer class="smallfont">
    <hr>
    <p>Copyright &copy; Andreas Åkerlöf 2019</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>