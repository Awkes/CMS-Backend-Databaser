<?php
  // Kontrollera om användaren vill logga in eller ut
  if (isset($_GET['action'])) {
    // Om valet är login, försök logga in
    if ($_GET['action'] == 'login') {
      // Hämta användaren från databas
      $statement = $pdo->prepare('SELECT * FROM users WHERE username=?');
      $statement->execute([$_POST['username']]);
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      
      // Om lösenordet stämmer logga in
      if (password_verify($_POST['password'], $data['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['userID'] = $data['userID'];
      }
      // Annars skriv ut felmeddelande 
      else {
        echo '<p class="error smallfont">Felaktigt användarnamn eller lösenord! Försök igen</p>';
      }
    }
    // Om valet är logout, unset alla sessions-variabler (logga ut)
    elseif ($_GET['action'] == 'logout') {
      session_unset();
    }
  }
  
  // Om vi inte är inloggade, visa inloggningsformulär
  if (!isset($_SESSION['loggedin'])) {
    echo '<form id="login" class="smallfont" action="?action=login" method="POST">';
    echo '<label for="username">Användarnamn:</label>';
    echo '<input type="text" id="username" name="username">';
    echo '<label for="password">Lösenord:</label>';
    echo '<input type="password" id="password" name="password">';
    echo '<button type="submit">Logga in</button>';
    echo '<div>[ <a href="?page=register">Ny användare</a> ]</div>';
    echo '</form>';
  }
  // Annars visa vem som är inloggad och utloggningslänk
  else {
    echo '<p class="smallfont right">Du är inloggad som <b>'.$_SESSION['username'].'</b>. [<a href="?action=logout">Logga ut</a>]</p>';
  }
?>