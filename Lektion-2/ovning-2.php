<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
  <h1>Arrayer</h1>
  <h2>Övning 1</h2>
  <p>
    <?php
      // Vi ska börja med att skriva ut olika värden i en array. Om vi har en array som denna:
      $your_array = array(23, 45, 54, 12, 77);
      // Skriv ut det första och sista värdet (23 & 77) i denna array med hjälp av echo
      echo $your_array[0] . ' ' . $your_array[4];
      // Vilka index ligger värdena på?
      // Svar: 0 och 4;
    ?>
  </p>

  <h2>Övning 2</h2>
  <p>
    <?php
      // Om vi redan har en array som den ovan kan vi även direkt ändra på ett visst värde på samma sätt som när vi tilldelar en variabel ett värde med =.
      // Ändra sista värdet i $your_array genom att tilldela det nya värdet 1.
      $your_array[4] = 1;
      // echoa arrayen efter att du har lagrat det nya värdet för att se att värdet verkligen har ändrats.
      echo print_r($your_array);
    ?>
  </p>

  <h2>Övning 3</h2>
  <p>
    <?php
      // För att komma åt alla värden i en array vill vi ju inte skriva in varenda index,
      // speciellt inte om vi inte vet hur lång arrayen är, alltså hur många värden som finns
      // inuti den. Vi kan inte bara skriva ut hela innehållet i arrayen med echo $my_array heller,
      // det kommer bara att skriva ut hela arrayen och inte alla värden för sig. Tur att loopar finns.

      // Du har denna array:
      $best_array = array(1, 2, 3, 4, 5);

      // Nu ska du loopa igenom arrayen och skriva ut varje värde i arrayen. 
      // Tänk på att längden av en array kan man ta ut med count($best_array)
      // samt att varje värde i en array har ett index som man kommer åt värdet ifrån.
      // Indexet är då detsamma som det nuvarande värdet på räknaren i loopen.
      for($i = 0; $i < count($best_array); $i++) {
        echo $i . ' = ' . $best_array[$i] . '<br>';
      }
    ?>
  </p>

  <h2>Övning 4</h2>
  <p>
    <?php
      // Använd samma array som tidigare. Nu ska du dock loopa igenom arrayen och multiplicera 
      // varje värde i arrayen med summan av det föregående värdet. D.v.s, 1 * 2 * 3.. etc.
      // Spara värdet i en $sum och skriv sedan ut denna variabel efter att loopen har körts klart
      for($i = 0; $i < count($best_array); $i++) {
        if ($i == 0) { $sum = $best_array[$i]; }
        else { $sum *= $best_array[$i]; }
      }
      echo $sum;
    ?>
  </p>

  <h2>Övning 5</h2>
  <p>
    <?php
      // Du ska utgå från följande array:
      $ok_array = array("fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here");
      // Du ska loopa igenom arrayen och skriv ut dess värden.
      // Dock ska din loop inte skriva ut strängar som är längre än 5 tecken.
      // "fine", "FINE", "good" och "sweet" ska alltså skrivas ut men inte "whatisthisstuff?"
      //  och "i don't even live here".
      foreach($ok_array as $val) {
        if (strlen($val) < 6) {
          echo $val . ' ';
        }
      }

    ?>
  </p>

  <h2>Övning 6</h2>
  <p>
    <?php
      $worst_array_yet = array("string", true, 42, "another string", 54, true, 1);

      // För att få ut vilket värde en variabel är kan vi använda is_string() t.e.x. 
      // som returnerar true eller false baserat på om värdet är en sträng. 
      // Detta kan vi sedan använda i en if-sats.
      
      // Du ska loopa igenom arrayen $worst_array_yet och ska sedan echoa ut varje sträng 
      // som förekommer i arrayen. Men om värdet i arrayen är något annat ska det värdet 
      // läggas till i $sum; för att sedan efter att loopen är klar echoa ut.

      foreach($worst_array_yet as $val) {
        if (is_string($val)) { echo $val . '<br>'; }
        else { $summa += $val; }
      }
      echo 'Summa: ' . $summa;

    ?>
  </p>
  
</body>
</html>