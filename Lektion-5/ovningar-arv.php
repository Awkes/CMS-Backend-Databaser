<?php
  // --- ARV ---
  // 1 . Skriv minst 2 klasser som motsvarar olika djur. Alla djur ska ha Animal som basklass.
  // Se till att djuren ärver från Animal. Vilka egenskaper eller funktioner skulle vi kunna skapa
  // som är gemensamt för VARENDA djur? Finns det några?
  abstract class Animal implements MatingInterface {
    public $name = 'Unnamed animal';
    function __construct($name) {
      $this->name = $name;
    }
    function walk() {
      echo "<p>$this->name is walking.</p>";
    }
    function sleep() {
      echo "<p>$this->name sleeps.</p>";
    }
    function drink() {
      echo "<p>$this->name drinks water.</p>";
    }
  }

  class Giraffe extends Animal {
    function speak() {
      echo "<p>$this->name makes a giraffe-sound!</p>";
    }
    function fight() {
      echo "<p>$this->name fights with it's horns!</p>";
    }
    function matingCall() {
      echo "<p>$this->name makes a mating call!</p>";
    }
  }

  class Duck extends Animal {
    function speak() {
      echo "<p>$this->name sais meep meep!</p>";
    }
    function fly() {
      echo "<p>$this->name flies!</p>";
    }
    function matingCall() {
      echo "<p>$this->name makes a mating call!</p>";
    }
  }

  $giraffe = new Giraffe('Ralf');
  $duck = new Duck('Arne');

  $giraffe->walk();
  $giraffe->speak();
  $giraffe->fight();
  $duck->sleep();
  $duck->fly();
  $duck->speak();
  $giraffe->drink();
  
  
  // 2 . Om vi har metoden matingCall() på klassen Animal, hur skulle vi skriva den implementationen?
  // Vad skulle den funktionen echoa ut eller returnera? Var skulle vi annars kunna lägga den?

  // Svar:
  // Animal makes a mating call.
  // eller
  // lägga den under varje enskilt djur så dem får egna läten.

  // 3 . Eftersom vi aldrig egentligen ska skapa ett objekt av typen Animal så kan vi göra om det till
  // en abstrakt klass, en klass som aldrig ska skapas, som bara ska ärvas ifrån. Gör klassen Animal
  // till abstrakt och gör metoden matingCall till abstrakt.

  $giraffe->matingCall();
  $duck->matingCall();

  // 4 . Tänk att vi nu har Dog och Cat som klasser, nu kommer även en till klass in i bilden Android.
  // En android är en robot, men det är inget djur. Dock har även en Android ett matingCall.
  // Det betyder att den ska ha samma funktion som Animal men inte ärva utifrån Animal. För detta måste
  // vi ha ett Interface. Skapa ett interface MatingInterface som gör att båda klasserna kan ha metoden
  // matingCall.
  interface MatingInterface {
    function matingCall();
  }
  class Android implements MatingInterface {
    public $name = 'Unnamed robot';
    function matingCall() {
      echo "<p>$this->name makes a mating call!</p>";
    }
  }
  $robot = new Android;
  $robot->name = 'Terminator';
  $robot->matingCall();

  echo '<hr>';

  // 5 . Skapa klasserna Planet, Earth och Mars. Planet ska ha en metod som heter visit() som ska
  // skriva ut "Welcome to $this->name! A lap around the sun takes: $this->orbitDays"
  // Alla planeter ska alltså ha egenskaperna name samt orbitDays, dessa egenskaper ska själva klassen 
  // Planet ha. Utifrån Planet ska man kunna skapa Earth och Mars som två nya klasser som ärver från Planet.

  class Planet {
    public $name;
    public $orbitDays;
    function visit() {
     echo "<p>Welcome to $this->name! A lap around the sun takes $this->orbitDays ";
    }
    function __construct($name,$orbitDays) {
      $this->name = $name;
      $this->orbitDays = $orbitDays;
    }
  }

  // Earth och Mars ska bara ta in ett argument i konstruktorn: population. Men när man skapar 
  // ett Earth-objekt så måste även name och orbitDays sättas, detta görs i konstruktorn. Detta betyder
  // att du måste kalla på förälderns konstruktor SAMT den egna konstruktorn. 
  
  class Earth extends Planet {
    public $population;
    function __construct($population) {
      parent::__construct('Earth',365);
      $this->population = $population;
    }
    function visit() {
      parent::visit();
      echo " and population is $this->population.</p>";
    }
  }
  
  class Mars extends Planet {
    public $population;
    function __construct($population) {
      parent::__construct('Mars',687);
      $this->population = $population;
    }
    function visit() {
      parent::visit();
      echo " and population is $this->population.</p>";
    }
  }

  $earth = new Earth(7.5);
  echo "<p>$earth->name</p>";
  echo "<p>$earth->orbitDays</p>";
  $mars = new Mars(0);
  echo "<p>$mars->name</p>";
  echo "<p>$mars->orbitDays</p>";
  
  // När man kallar på visit() på Earth så ska den både kalla på visit() från basklassen samt kalla på
  // visit från den nya subklassen och skriva ut:
  // Welcome to $this->name! A lap around the sun takes: $this->orbitDays" and population is : 
  // $this->population";

  $earth->visit();
  $mars->visit();

  echo '<hr>';

  // 6 . Implementera Vehicle-klassen från tidigare slides och dess subbklasser. Du ska ha klasserna
  // Vehicle, Bicycle, Boat, Car, Motorboat och Sail. Vehicle ska ha en metod som heter goTo, som tar
  // en parameter. 
  // Funktionen ska skriva ut "Färdas till [parametern]" med echo. Skapa ett objekt av 
  // varje klass och anropa goTo med ditt favoritresmål. T.ex. "Färdas till Borås". Du ska alltså bara
  // skapa funktionen goTo en gång.
  class Vehicle {
    function goTo($destination) {
      echo "<p>Färdas till $destination ";
    }
  }
  class Bicycle extends Vehicle {        
  }
  class Boat extends Vehicle {        
  }
  class Car extends Vehicle {        
  }
  class Motorboat extends Vehicle {        
  }
  class Sail extends Vehicle {        
  }

  $bicycle = new Bicycle;
  $bicycle->goTo('Los Angeles');
  $boat = new Boat;
  $boat->goTo('New Orleans');
  $car = new Car;
  $car->goTo('Stockholm');
  $motorboat = new Motorboat;
  $motorboat->goTo('Gävle');
  $sail = new Sail;
  $sail->goTo('Säffle');
  
  
  // Går det att skapa subklasser till Vehicle, går det t.ex. att gruppera vissa fordon efter gemensamma
  // egenskaper? Vilka subklasser kan du komma på som man kan skapa?

  // Svar: Ja..
  // WaterVehicle, LandVehicle, SkyVehicle

?>