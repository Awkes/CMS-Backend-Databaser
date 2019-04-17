<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Övning 2</title>
</head>
<body>
  <?php
    $has_header = true;
    if ($has_header) {
      echo '<h1>This is a header</h1>';
    }
    else {
      echo '<p>This is not a header</p>';
    }

    $age = 35;
    if ($age < 18) {
      echo '<p>Den där energidrycken är bara för vuxna unge man!<p>';
    }
    else {
      echo '<p>500 kr, tack!</p>';
    }
  ?>
  <p>
    <?php
      $water = 59;
      if ($water >= 100) {
        echo 'Vattnet kokar!';
      }
      else if ($water >= 50) {
        echo 'Det är halvvägs nu!';
      }
      else {
        echo 'Vattnet kokar inte!';
      }
    ?>
  </p>
  <p>
    <?php
      $water = true;
      $waterTmp = 32;

      if ($water) {
        if ($waterTmp > 30) {
          echo 'Det går att bada!';
        }
        else {
          echo 'Det går inte att bada!';
        }
      }
    ?>
  </p>
  <p>
    <?php
      $weekend = true;
      $vacation = false;
      if ($weekend || $vacation) {
        echo 'Vi tar sovmorgon!';
      }
    ?>
  </p>
  <p>
    <?php
      $age = 35;
      if ($age >= 18 && $age < 65) {
        echo 'Gå upp, jobba, jobba, jobba, äta lunch!';
      }
      else if ($age < 18) {
        echo 'Efterfest!';
      }
      else {
        echo 'Mmmm, finska pinnar!';
      }
    ?>
  </p>

  <p>
    <?php
      $age = 35;
      $weight = 75;

      if ($age < 12) {
        echo 'Du är för ung för att tävla!';
      }
      else {
        if ($weight <= 30) {
          echo 'A-ponny';
        }
        else if ($weight <= 50) {
          echo 'B-ponny';
        }
        else if ($weight <= 65) {
          echo 'C-ponny';
        }
        else {
          echo 'Du är för fet för alla ponnyer!';
        }
      }
    ?>
  </p>

</body>
</html>