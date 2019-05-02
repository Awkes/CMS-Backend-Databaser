<?php 
  class JournalView {
    public static function render() {
      // Om vi är inloggade, skriv ut journalsidan
      if (isset($_SESSION['loggedin'])) { 
        global $pdo;

        if (isset($_GET['action'])) {
          // Lägg till nytt inlägg
          if ($_GET['action'] == 'newentry') {
            
          }
          // Ta bort inlägg
          elseif ($_GET['action'] == 'delentry' && isset($_GET['id'])) {

          }
        }

        echo '<h2>Nytt inlägg</h2>';
        echo '<form id="newentry" action="?action=newentry" method="POST">';
        echo '<label for="title">Titel:</label>';
        echo '<input type="text" id="title" name="title">';
        echo '<label for="content">Innehåll:</label>';
        echo '<textarea id="content" name="content"></textarea>';
        echo '<button type="submit">Spara inlägg</button>';
        echo '</form>';

        echo '<h2>Inlägg</h2>';

        // Hämta inlägg
        $statement = $pdo->prepare('SELECT * FROM entries WHERE userID=? ORDER BY createdAt');
        $statement->execute([$_SESSION['userID']]);
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Skriv ut meddelande om användaren inte har några inlägg
        if (!$data) { 
          echo '<div class="entry">Du har inte skrivit några inlägg ännu.</div>'; 
        }
        // Annars skriv ut inläggen
        else {
          foreach ($data as $entry) {
            echo '<div class="entry">';
            echo "<h3>{$entry['title']}</h3>";
            echo "<small class=\"smallfont\">{$entry['createdAt']}</small>";
            echo '<hr>';
            echo $entry['content'];
            echo '<hr>';
            echo '<p class="right smallfont">[<a href="?action=delentry&id='.$entry['entryID'].'">Ta bort</a>]</p>';
            echo '</div>';
          }
        }
      }
      // Annars skriv ut välkomstmeddelande
      else {  
        echo '<h2>Välkommen till journalen!</h2>';
        echo '<p>Du måste logga in för att använda den här sidan.</p>';
      }
    }
  }

  class RegisterView {
    public static function render() {
      echo '<h2>Registrera ny användare</h2>';
      // Kontrollera om vi vill registera användare
      if (isset($_GET['action']) && $_GET['action'] == 'register') {
        // Kontrollera om användarnamnet finns i databasen
        global $pdo;
        $statement = $pdo->prepare('SELECT * FROM users WHERE username=?');
        $statement->execute([$_POST['username']]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        // Om användare existerar, skriv ut felmeddelande
        if ($data) {
          echo '<p class="error">';
          echo "Det finns redan en användare med namnet {$_POST['username']}. ";
          echo '[<a href="?page=register">Försök igen</a>]';
          echo '</p>';
        }
        // Annars lägg till användaren.
        else {
          $statement = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
          $statement->execute([$_POST['username'], password_hash($_POST['password'], PASSWORD_BCRYPT)]);
          echo "<p>Användaren <b>{$_POST['username']}</b> är registrerad.</p>";
          echo '<p>Var vänlig logga in.</p>';
        }
      }
      // Annars, skriv ut registeringsformulär
      else {
        echo '<form id="register" action="?page=register&action=register" method="POST">';
        echo '<label for="username">Användarnamn:</label>';
        echo '<input type="text" id="username" name="username">';
        echo '<label for="password">Lösenord:</label>';
        echo '<input type="password" id="password" name="password">';
        echo '<button type="submit">Registrera</button>';
        echo '</form>';
      }
    }
  }

  class PageNotFoundView {
    public static function render() {
      echo '<p class="error">Sidan kan inte hittas!</p>';
    }
  }
  
?>