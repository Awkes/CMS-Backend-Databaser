<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
  <?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  ?>
  <h1>Funktioner</h1>
  <h2>Övning 1</h2>
  <p>
    <?php
      // Skapa en funktion: multiply, som tar in 2 parametrar. 
      // I funktionen, multiplicera dessa nummer med varandra och echo resultatet av multiplikationen. 
      // Du får använda vilka namn du vill på parametrarna.
      function multiply($num1,$num2) {
        return $num1 * $num2;
      }  
      // Kalla på din funktion multiply med siffrorna 8,4 som argument
      // Om du gjort rätt ska du få siffran 32.
      echo multiply(8,4);
    ?>
  </p>

  <h2>Övning 2</h2>
  <p>
    <?php
      // Skapa en funktion som heter calculate och som istället tar 3 parametrar
      // och sedan multiplicerar de två första parametrarna med varandra och
      // delar värdet med den tredje parametern, alltså: param1 * param2 / param3.
      // Funktionen ska sedan echo ut svaret.
      function calculate($num1,$num2,$num3) {
        return ($num1 * $num2) / $num3;
      }
      // Kalla sedan på din funktion med valfria värden.
      echo calculate(13,2,4);
    ?>
  </p>

  <h2>Övning 3</h2>
  <p>
    <?php
      // Skriv en funktion som heter highest_number som tar två tal som parametrar.
      function highest_number($num1,$num2) {
        // Funktionen ska sedan jämföra vilket av talet som är störst och echo det största talet.
        if (gettype($num1) !== 'integer' || gettype($num2) !== 'integer') { return false; }
        elseif ($num1 > $num2) { return $num1; }
        elseif ($num1 === $num2) { return 'Samma värde'; }
        else { return $num2; }
      }
      // Kalla på din funktion med två valfria värden.
      echo highest_number(13,7);
    ?>
  </p>

  <h2>Övning 4</h2>
  <p>
    Fixat om Övning 1-3...
    <?php
      // Refaktorera dina funktioner som du tidigare skapade:
      // De två första funktionerna (multiply och calculate) ska returnera det slutgiltiga värdet av
      // beräkningarna. Sedan måste du spara värdena för att sedan använda echo på dem.
      // Den tredje funktionen highest_number ska returnera det högsta värdet av de två värden som
      // skickas in som parametrar. Om dock värdet inte är ett nummer ska funktionen returnera false
      // och om de båda parametrarna är samma värde ska funktionen returnera "Samma värde"
    ?>
  </p>

  <h2>Övning 5</h2>
  <p>
    <?php
      // Skriv en funktion som tar in en parameter. Parametern ska vara en string. 
      // Funktionen ska sedan returnera strängens längd på detta sätt:
      // "Strängen du matade in är 14 tecken lång"

      function cnt_chr($str) {
        return 'Strängen du matade in är ' . strlen($str) . ' tecken lång.';
      }
      echo cnt_chr('Onsdag');
    ?>
  </p>

  <h2>Övning 6</h2>
  <p>
    <?php
      // Skapa en funktion som heter convert_string, funktionen ska ta två parametrar. 
      // Den första parametern ska vara en sträng som skickas med, typ: "Goodbye World".
      // Den andra parametern som skickas med ska bestämma om strängen ska konverteras till
      // bara stora bokstäver eller bara små bokstäver.
      function convert_string($str,$case='lower') {
        if ($case === 'upper') { return strtoupper($str); }
        else { return strtolower($str); }
      }
      // Till detta kan man använda hjälpfunktionen: strtolower($string) och strtoupper($string)
      echo convert_string('APAN skalar SiN BanAN!').'<br>';
      echo convert_string('APAN skalar SiN BanAN!','upper');
    ?>
  </p>

  <h2>Övning 7</h2>
  <p>
    <?php
      // Skapa en funktion som tar en parameter, argumentet som skickas in ska vara en sträng.
      // Funktionen ska sedan returnera det sista tecknet i strängen som skickas in.
      function last_chr($str) {
        return $str[-1];
      }
      echo last_chr('Gädda');
    ?>
  </p>

  <h2>Övning 8</h2>
  <p>
    <?php
      // Skriv en funktion med namnet make_paragraph som skriver ut en sträng som HTML-elementet <p>.
      // Exempel: "hej"_ ska skrivas ut som "<p>hej</p>". Funktionen ska ha en parameter, som är strängen
      // som ska skrivas ut, och den ska inte returnera något bara echoa ut.
      function make_paragraph($str) {
        echo "<p>$str</p>";
      }
      make_paragraph('Osten är slut!');
    ?>
  </p>
  
  <h2>Övning 9</h2>
  <p>
    <?php
      // Funktionen make_paragraph() är lite begränsad. Tänk om vi vill göra <h1>-taggar? Eller <h2>, <h3> osv.
      // Skriv en ny funktion med namnet make_heading. Funktionen behöver veta strängen som ska skrivas ut och
      // vilken heading det ska vara. Den behöver alltså två parametrar.
      function make_heading($str,$h=1) {
        echo "<h$h>$str</h$h>";
      }
      make_heading('Heading 1');
      make_heading('Heading 2',2);
      make_heading('Heading 3',3);
    ?>
  </p>
  
  <h2>Övning 10</h2>
  <p>
    <?php
      // Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings.
      // Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element.
      // Vi behöver en funktion som kan göra flera sorters element. 
      // Skriv en funktion make_tag som kan göra alla sorters HTML-element.
      function make_tag($str,$tag='p',$attr='') {
        return "<$tag $attr>$str</$tag>";
      }
      echo make_tag('en p tagg');
      echo make_tag('en div tagg','div','style="color: hotpink"');
      echo make_tag('en b tagg','b');
      echo make_tag('en i tagg','i');
      echo make_tag('en a tagg','a','href="http://nackademin.se"');
    ?>
  </p>
  
  <h2>Övning 11</h2>
  <p>
    Förbättring av övning 10
    <?php
      // Förbättra make_tag så att man kan ange inline styles också. (Eller href för länkar)
      // Exempel: <p style="color: hotpink;">Exempeltext</p>
    ?>
  </p>
  
  <h2>Övning 12</h2>
  <p>
    <?php
      // Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen make_tag.
      // Exempel: make_list( [1, 2] ) → "<ul> <li>1</li> <li>2</li> </ul>"
      function make_list($array) {
        $html = '<ul>';
        foreach($array as $val) {
          $html = $html . make_tag($val,'li');
        }
        $html = $html . '</ul>';
        return $html;
      }
      echo make_list(['ost','apa','gädda','sork']);
    ?>
  </p>
  
  <h2>Övning 13</h2>
  <p>
    <?php
      // Skriv en funktion som genererar en random färg
      function random_color() {
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);
        return "rgb($r,$g,$b)";
      }
      echo random_color().'<br>';
      echo random_color().'<br>';
      echo random_color().'<br>';
    ?>
  </p>
  
  <h2>Övning 14</h2>
  <p>
    <?php
      // Skriv en funktion som avrundar en float till närmaste heltal med hjälp av typecast.
      // Exempel: round(3.9) → 3, round(5.5) → 6.
      function runda($tal) {
        return (int)($tal+0.5);
      }
      echo runda(10.23).'<br>';
      echo runda(10.6);
    ?>
  </p>
  
  <h2>Övning 15</h2>
  <p>
    <?php
      // Skriv en funktion som räknar ut summan av alla tal i en array. 
      function sum_array($arr) {
        $sum = 0;        
        foreach($arr as $val) {
          $sum += $val;
        }
        return $sum;
      }
      echo sum_array([2,3,5,23,54,23,666]).'<br>';
      
      // Skriv en annan som räknar ut medelvärdet.
      function medel($arr) {
        $sum = 0;        
        foreach($arr as $val) {
          $sum += $val;
        }
        $sum /= count($arr);
        return $sum;
      }
      echo medel([3,4,3,4,6]);
    ?>
  </p>
  
  <h2>Övning 16</h2>
  <p>
    <?php
      // Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra.
      // Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7.
      // Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver.
      function weekday($day) {
        switch (strtolower($day)) {
          case 'måndag':
            return 1;
            break;
          case 'tisdag':
            return 2;
            break;
          case 'onsdag':
            return 3;
            break;
          case 'torsdag':
            return 4;
            break;
          case 'fredag':
            return 5;
            break;
          case 'lördag':
            return 6;
            break;
          case 'söndag':
            return 7;
            break;
          default:
            return null;
        }
      }
      echo weekday('Måndag');
      echo weekday('tiSdaG');
      echo weekday('LöRdaG');
      echo weekday('djsiao');
    ?>
  </p>


</body>
</html>