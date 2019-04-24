<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // ---- ACCESS MODIFIERS, PUBLIC/PRIVATE ----
  
  // 1 . Ändra klassen Book så att title och author är private i stället för public.
  // Försök att skriva ut värdet på title på samma sätt som i uppgift 1.2.
  // Du kommer att få ett felmeddelande. Vad säger meddelandet? Varför får du felet?

  class Book {
    private $title;
    private $author;

    public function __construct($title='',$author='') {
      $this->title = $title;
      $this->author = $author;
    }

    function setTitle($new_title) {
      $this->title = $new_title;
    }
    
    function getTitle() {
      return $this->title;
    }

    function setAuthor($new_author) {
      $this->author = $new_author;
    }
    
    function getAuthor() {
      return $this->author;
    }

    function printInfo() {
      echo "<p>Title: $this->title <br>Författare: $this->author</p>";
    }
  }
  
  $first_book = new Book('Främlingen','Albert Camus');

  // echo "<p>Title: $first_book->title <br>Författare: $first_book->author</p>";
  // Ger felmeddelandet "Fatal error: Uncaught Error: Cannot access private property"
  // Detta för att egenskaperna är privata och vi kan bara skriva ut dem med hjälp av en metod.
  $first_book->printInfo();


  // 2 . Skapa två metoder till klassen Book som kan användas för att ändra egenskapen title.
  // Den ena metoden ska heta getTitle och ska returnera värdet på den privata egenskapen title.
  // Den andra metoden ska heta setTitle(x) och ska ändra värdet på title till något som man skickar
  // som argument till funktionen.
  $first_book->setTitle('Gäddan är lös');
  echo '<p>'.$first_book->getTitle().'</p>';
  
  // 3 . Skapa get- och set-metoder till egenskapen author.
  $first_book->setAuthor('Kurt-Kent Gäddulfsson');
  echo '<p>'.$first_book->getAuthor().'</p>';

  // 4 . Gör alla egenskaper för klassen Car privata. Behöver du ändra något för att funktionen
  // printInfo ska fungera? SVAR: NEJ
  class Car {
    private $model;
    private $color;
    private $price;
    private $sellDate;

    static $NumberOfCars = 0;

    public function __construct($model='',$color='',$price=0) {
      $this->model = $model;
      $this->color = $color;
      $this->price = $price;
      $this->sellDate = date('Y-m-d');
      Car::$NumberOfCars++;
    }
    function printInfo() {
      echo "<p>Det här är en $this->color $this->model som kostar $this->price.</p>";
    }
    function halfPrice() {
      $this->price /= 2;
    }
    function changeCar($model='',$color='',$price=0) {
      $this->model = $model;
      $this->color = $color;
      $this->price = $price;
    }
  }

  $car_one = new Car('Volvo','röd',25000);
  $car_one->printInfo();

  // 5 . Skriv en metod med namnet changeCar. Den ska ta tre parametrar: model, color och price.
  // När man anropar den ska den ändra värdet på de privata egenskaperna.
  $car_one->changeCar('Saab','rosa',666);
  $car_one->printInfo();

  // ---- STATISKA EGENSKAPER OCH METODER ----
  // 1 . Lägg till en publik statisk variabel i klassen Car med namnet NumberOfCars som är 0.
  // Varje gång ett Car objekt skapas ska NumberOfCars räknas upp med 1. Skapa några Car-objekt
  // och kontrollera att variabeln räknas upp korrekt. PHP.net: Static Keyword
  echo '<p>'.Car::$NumberOfCars.'</p>';
  
  $car_two = new Car('Audi','grön',30000);
  echo '<p>'.Car::$NumberOfCars.'</p>';

  $car_three = new Car('Honda','blå',20000);
  echo '<p>'.Car::$NumberOfCars.'</p>';
?>