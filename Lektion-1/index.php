<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  
  <?
    $name = 'Andreas';
  ?>

  <h1><?php echo 'Hello World';?></h1>
  <p>
    My name is <?=$name;?>
  </p>

  <h1>If/else</h1>
  <?php
    $has_header = 'is_a_header';
    if ($has_header) {
      echo '<h2>It\'s a heading!</h2>';
    } 
    else {
      echo '<p>It\'s a paragraph!</p>';
    }
  ?>

  <h1>Iteration</h1>
  <h2>FOR</h2>
  <?php
    for ($i = 0; $i < 10; $i++) {
      echo $i;
    }
  ?>
  <h2>WHILE</h2>
  <?php
    $num = 0;
    while ($num < 10){
      echo $num;
      $num++;
    }
  ?>

  <h2>Text och variabler</h2>
  <?php
    $message = 'Hello World';
    for ($i = 0; $i < 10; $i++) {
      echo $message . ' ' . $i .'<br>';
    }
  ?>
</body>
</html>