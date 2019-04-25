<?php
  require('views.php');
  require('models.php');

  switch($page) {
    case 'home':
      HomeView::render();
      break;
    case 'books':
      $heads = ['Title','Author','Genre','Pages','Borrowed?'];
      $data = [
        new BookModel('The Alchemist','Paulo Coelho','Adventure',163,true),
        new BookModel('The Da Vinci Code','Dan Brown','Mystery',689),
        new BookModel('Twilight','Stephenie Meyer','Romance',498)
      ];
      BookView::render($heads,$data);
      break;
    case 'cds':
      $heads = ['Title','Artist','Genre','Length','Borrowed?'];
      $data = [
        new CDModel('Condolences','Wednesday 13','Horrormetal',56),
        new CDModel('Appetite for Destruction','Guns N Roses','Sleaze/Glam',49,true),
        new CDModel('Women and Children Last','Murderdolls','Horrormetal',45)
      ];
      CDView::render($heads,$data);
      break;
    case 'movies':
      $heads = ['Title','Director','Actors','Genre','Length','Borrowed?'];
      $data = [
        new MovieModel('Jurassic Park','Stephen Spielberg',['Sam Neill','Laura Dern','Jeff Goldblum'],'Adventure','2h 27m'),
        new MovieModel('Dawn of the Dead','George A Romero',['David Emge','Ken Foree','Scott H Reiniger'],'Horror','2h 7m',true),
        new MovieModel('Dumb and Dumberer','Peter Farrelly, Bobby Farrelly',['Jim Carrey','Jeff Daniels','Lauren Holly'],'Comedy','1h 47m',true)
        
      ];
      MovieView::render($heads,$data);
      break;
    default :
      PageNotFoundView::render();
  }
?>