<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
  <h1>Datatyper</h1>
  <h2>Övning 1</h2>
  <?php
    $firstName = '13Andreas';
    $lastName = 'Åkerlöf';
    $age = '35';
    $z_index = 999;
    $is_human = true;
    $is_a_chair = false;
    // Multiplicera $age med $z_index
    echo '<p>$age * $z-index = ' . $age * $z_index . '</p>';
    // Dividera $z_index med $is_a_chair;
    echo '<p>$z-index / $is_a_chair = ' . $z_index / $is_a_chair . '</p>';
    // Dividera $z_index med $is_human;
    echo '<p>$z-index / $is_human = ' . $z_index / $is_human . '</p>';
    // Multiplicera $is_human med $z_index;
    echo '<p>$is_human * $z_index = ' . $is_human * $z_index . '</p>';
    // Addera $lastName med $age;
    echo '<p>$lastName + $age = ' . ($lastName + $age) . '</p>';
    // Addera $firstName med $z_index;
    echo '<p>$firstName + $z_index = ' . ($firstName + $z_index) . '</p>';
    // Multiplicera $lastName med $is_human;
    echo '<p>$lastName + $is_human = ' . ($lastName + $is_human) . '</p>';
  ?>

  <h2>Övning 2</h2>
  <p>
    Vilka av nedanstående alternativ sparar en sträng på rätt sätt och varför? Varför funkar inte de alternativ som inte fungerar?:  
    <code>
      $_message = 'These are not the potatotes you're looking for';<br>
      $1message = "These are not the potatoes you're looking for";<br>
      $message = "These are not the potatoes you're looking for";<br>
      $jävla_skit = "These are not the potatoes you're looking for";<br>
      $Message1 = 'These are not the potatoes you\'re looking for';
    </code>
    <p>
      Svar: <br>
      $_message fungerar inte för att PHP tror att strängen slutar efter you  pga av apostrofen.<br>
      $1message fungerar inte för att PHP tror att vi får inte börja ett variabelnamn med en siffra.<br>
      $message fungerar.<br>
      $jävla_skit fungerar.<br>
      $Message1 fungerar tack vara escapecharacter innan '.
    </p>
  </p>

  <h2>Övning 3</h2>
  <?php
    // Skriv ett PHP-program där du har ett valfritt tal.
    // Du ska med echo skriva ut vad resten blir från talet när du delar talet med 2.
    // Resten av divisionen fås när talet beräknas med modulo 2 (%).
    // Lagra resultatet i en ny variabel $result och skriv ut denna variabel enligt exemplet nedan:
    // exempel på hur det ska skrivas ut
    // Värde: 10 Resten av talet % 2 är: 0 Värde: 5 Resten av talet % 2 är: 1

    $tal = 13;
    $result = $tal % 2;
    echo "Värde: $tal, resten av talet % 2 är: $result";
  ?>
  
</body>
</html>