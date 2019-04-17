<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Övning 1</title>
</head>
<body>
  <?php
    $firstName = 'Andreas';
    $secondName = 'Åkerlöf';
    $age = 35;

    echo '<p>Programming</p>';
    echo '<div style="background-color: lightcoral; width: 200px; height: 200px;"></div>';
    echo '<h1>' . $firstName . ' ' . $lastName . '</h1>';
    echo 'I\'ve seen things you people wouldn\'t believe.<br>
          Attack ships on fire off the shoulder of Orion.<br>
          I watched C-beams glitter in the dark near the Tannhauser gate.<br>
          All those moments will be lost in time... like tears in rain...<br>
          Time to die.';

    echo '<p>Din ålder i hundår är ' . $age * 7 . '</p>';

  ?>
</body>
</html>