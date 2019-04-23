<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulär</title>
</head>
<body style="background-color: <?=$_POST['color'];?>">
  <h1>Formulär</h1>
  <p>
    <?php

      function oldEnough($date) {
        $years = (strtotime('now') - strtotime($date)) /60/60/24/356;
        if ($years > 25) { return true; }
        else { return false;}
      }


      if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['birthdate']) && isset($_POST['css'])) {
        if ($_POST['password'] === 'gädda' && oldEnough($_POST['birthdate'])) {
          echo "Hej {$_POST['username']}, du är född {$_POST['birthdate']}. Din favorit CSS-egenskap är {$_POST['css']}.";
        }
        else {
          echo '<img src="https://media.giphy.com/media/3ohzdQ1IynzclJldUQ/giphy.gif" alt="Fel lösenord!">';
        }
      }
      else {
        echo 'Någonting har gått fel!';
      }
    ?>
  </p>
</body>
</html>