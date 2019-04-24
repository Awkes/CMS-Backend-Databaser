<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // ----- SKAPA OBJEKT -----
  // 1 . Skriv en klass med namnet Book. Den ska ha två (publika) egenskaper: title och author.
  class Book {
    public $title;
    public $author;

    public function __construct($title='',$author='') {
      $this->title = $title;
      $this->author = $author;
    }

    function setTitle($new_title) {
      $this->title = $new_title;
    }

    function printInfo() {
      echo "<p>Title: $this->title <br>Författare: $this->author</p>";
    }
  }

  // 2 . Skapa ett objekt av klassen Book och spara det i en variabel med namnet $first_book.
  // Sätt värdet på egenskaperna title till "Främlingen" och author till "Albert Camus".
  // Testa att du har gjort rätt genom att skriva ut värdet på egenskaperna title och author så här:  
  // echo "Titel: $first_book->title \nFörfattare: $first_book->author";

  $first_book = new Book;
  $first_book->title = 'Främlingen';
  $first_book->author = 'Albert Camus';
  echo "<p>Title: $first_book->title <br>Författare: $first_book->author</p>";

  // 3 . Skapa ett till objekt av klassen Book med title: "Harry Potter and the Philosopher's Stone"
  // och author: "J K Rowling".

  $second_book = new Book;
  $second_book->title = 'Harry Potter and the Philosopher\'s stone';
  $second_book->author = 'J K Rowling';
  echo "<p>Title: $second_book->title <br>Författare: $second_book->author</p>";
  
  // 4 . Skapa en metod i klassen som ändrar värdet av title på boken när man kallar på den.
  // Ändra det senaste objektet så att title blir "Harry Potter and the Order of the Phoenix"
  // istället för "Harry Potter and the Philosopher's Stone".
  $second_book->setTitle('Harry Potter and the Order of the Phoenix');
  echo "<p>Title: $second_book->title <br>Författare: $second_book->author</p>";
  
  // 5 . Skapa en metod i Book med namnet printInfo. Metoden ska inte ta några parametrar.
  // När den anropas ska den skriva ut bokens titel och författaren med echo, i princip som koden
  // i övning 2.
  $first_book->printInfo();
  $second_book->printInfo();
  
  // 6 . Lägg till en konstruktor till klassen Book. Konstruktorn ska ta två argument och använda dem för
  // att sätta värdet på egenskaperna title och author.
  $third_book = new Book('1984','George Orwell');
  $third_book->printInfo();

  // 7 . Skapa en klass med namnet Car. Den ska ha flera egenskaper: model, color och price. 
  // Skapa ett objekt av klassen Car och ge det lämpliga värden på egenskaperna.
  // Skapa även en konstruktor till klassen Car så man direkt kan sätta värdena när man skapar bilen.
  class Car {
    public $model;
    public $color;
    public $price;
    public $sellDate;
    public function __construct($model='',$color='',$price=0) {
      $this->model = $model;
      $this->color = $color;
      $this->price = $price;
      $this->sellDate = date('Y-m-d');
    }
    function printInfo() {
      echo "<p>Det här är en $this->color $this->model som kostar $this->price.</p>";
    }
    function halfPrice() {
      $this->price /= 2;
    }
  }

  $car_one = new Car('Volvo','Röd',25000);

  // 8 . Lägg till en metod i Car med namnet printInfo. Metoden ska inte ha några parametrar.
  // När metoden anropas ska den skriva ut information om Car-objektet. 
  // Till exempel, om model="Volvo", color="red" och price=25000 så ska funktionen skriva:
  // "Det här är en röd Volvo som kostar 25000 kr".
  $car_one->printInfo();

  // 9 . Skapa en metod i Car med namnet halfPrice. När metoden anropas ska den ändra värdet på
  // egenskapen price till hälften.
  $car_one->halfPrice();
  $car_one->printInfo();

  // 10 . Lägg till en egenskap till klassen Car, sellDate, som motsvarar när bilen såldes.
  // Konstruktorn ska sätta sellDate till dagens datum. Exempel: "2017-03-27". 
  // Tips: använd PHP.net: Date
  echo '<p>'.$car_one->sellDate.'</p>';

  // 11 . Skriv en klass med namnet SingleBookLibrary. Den ska ha egenskaper med namnet book
  // och isBorrowed. Egenskapen book ska vara ett objekt av klassen Book.
  // Lägg till en metod med namnet borrow, som ändrar värdet på isBorrowed till true.
  // Metoden ska också skriva ut med echo om det gick att låna, eller om boken redan var utlånad.
  class SingleBookLibrary {
    public $book;
    public $isBorrowed = false;
    public function __construct($book) {
      $this->book = $book;
    }
    function borrow() {
      if (!$this->isBorrowed) {
        $this->isBorrowed = true;
        echo "<p>Du kan låna boken!</p>";
      } else {
        echo '<p>Boken är redan utlånad!</p>';
      }
    }
  }
  $it = new SingleBookLibrary(new Book('It','Stephen King'));
  echo $it->book->title.', '.$it->book->author;
  $it->borrow();
  $it->borrow();
?>