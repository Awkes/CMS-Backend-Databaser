<?php
  $page = (!isset($_GET['page'])) ? 'home' : $_GET['page'];

  require('partials/views.php');

  // Kontrollera vilken sida vi vill besöka och rendera den.
  switch($page) {
    case 'home':
      JournalView::render();
      break;
    case 'register':
      RegisterView::render();
      break;
    default:
      PageNotFoundView::render();
  }
?>