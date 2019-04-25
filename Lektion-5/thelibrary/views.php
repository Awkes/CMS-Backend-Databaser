<?php

  class BaseView {
    public static function render($heads,$body) {
      $head = '<tr>';
      foreach($heads as $heading) {
        $head .='<th>'.$heading.'</th>';
      }
      $head .= '</tr>';

      $out = '<table class="table tabe-striped table-hover">';
      $out .= '<thead>';
      $out .= $head;
      $out .= '</thead>';
      $out .= '<tbody>';
      $out .= $body;
      $out .= '</tbody>';
      $out .= '</table>';
      return $out;
    }
  }

  class BookView extends BaseView {
    public static function render($heads,$books) {
      $body = '';
      foreach($books as $book) {
        $body .= '<tr>';
        $body .= '<td>'. $book->title .'</td>';
        $body .= '<td>'. $book->author .'</td>';
        $body .= '<td>'. $book->genre .'</td>';
        $body .= '<td>'. $book->pageCount .'</td>';
        $isBorrowed = ($book->isBorrowed) ? '<i class="icon icon-check">' : '';
        $body .= '<td>'. $isBorrowed .'</td>';
        $body .= '</tr>';
      }
      echo parent::render($heads,$body);
    }
  }

  class CDView extends BaseView {
    public static function render($heads,$cds) {
      $body = '';
      foreach($cds as $cd) {
        $body .= '<tr>';
        $body .= '<td>'. $cd->title .'</td>';
        $body .= '<td>'. $cd->artist .'</td>';
        $body .= '<td>'. $cd->genre .'</td>';
        $body .= '<td>'. $cd->length .'</td>';
        $isBorrowed = ($cd->isBorrowed) ? '<i class="icon icon-check">' : '';
        $body .= '<td>'. $isBorrowed .'</td>';
        $body .= '</tr>';
      }
      echo parent::render($heads,$body);
    }
  }

  class MovieView extends BaseView {
    public static function render($heads,$movies) {
      $body = '';
      foreach($movies as $movie) {
        $body .= '<tr>';
        $body .= '<td>'. $movie->title .'</td>';
        $body .= '<td>'. $movie->director .'</td>';
        $body .= '<td>';
        foreach($movie->actors as $actor) {
          $body .= $actor.'<br>';
        }
        $body .= '</td>';
        $body .= '<td>'. $movie->genre .'</td>';
        $body .= '<td>'. $movie->length .'</td>';
        $isBorrowed = ($movie->isBorrowed) ? '<i class="icon icon-check">' : '';
        $body .= '<td>'. $isBorrowed .'</td>';
        $body .= '</tr>';
      }
      echo parent::render($heads,$body);
    }
  }

  class HomeView {
    public static function render() {
      echo '<p>Welcome to the library! Please look around for something to borrow!</p>';
    }
  }

  class PageNotFoundView {
    public static function render() {
      echo '<p>Page not found!</p>';
    }
  }

?>