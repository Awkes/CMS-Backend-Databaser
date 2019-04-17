<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Övning 3</title>
</head>
<body>
  <p>
    <?php
      $sum = 0;
      for($i = 0; $i < 10; $i = $i + 1){
        $sum += $i;
      }
      echo $i;
    ?>
  </p>
  <p>
    <?php
      for($i = 0; $i < 10; $i = $i + 2){
        echo $i;
      }
    ?>
  </p>
  <p>
    <?php
      for($i = 10; $i > 0; $i--){
        echo $i;
      }
      ?>
  </p>
  <p>
    <?php
      for($i = 0; $i < 10; $i++){
        if ($i % 2 === 0) { echo $i; }
      }
    ?>
  </p>
  <p>
    <?php
      $i = 0;
      while ($i < 10) {
        if ($i % 2 === 0) { echo $i; }
        $i++;
      }
    ?>
  </p>
  <p>
    <?
      // Första loopen skriver inte ut något för att $num är 0 från början
      $num = 0;
      while($num < 0){
          echo $num;
          $num++;
      }
      // Andra loopen skriver ut $num en gång, därför att villkoret kommer efter att loppen körts en gång
      $num = 0;
      do{
          echo $num;
          $num++;
      }while($num < 0);
    ?>
  </p>
  <p>
    <?php
      $numberOfSheep = 4;
      $monthNumber = 1;
      $monthsToPrint = 12;

      // while ($monthNumber <= $monthsToPrint) {
      //   $numberOfSheep *= 4;
      //   echo 'There will be '.$numberOfSheep.' sheep after '.$monthNumber.' month(s).<br>';
      //   $monthNumber++;
      // }

      for ($monthNumber; $monthNumber <= $monthsToPrint; $monthNumber++) {
        $numberOfSheep *= 4;
        echo 'There will be '.$numberOfSheep.' sheep after '.$monthNumber.' month(s).<br>';
      }
    ?>
  </p>
  <p>
    <?php
      $tal = 7;
      if ($tal > 0) {
        for ($i = 0; $i <= $tal; $i++) {
          echo 'Mjau! ';
        }
      }
      else {
        echo '😾';
      }
    ?>
  </p>

</body>
</html>