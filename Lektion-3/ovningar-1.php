<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulär</title>
</head>
<body>
  <h1>Formulär</h1>
  <form action="form-1.php" method="POST">
    <p>
      <label for="username">Användarnamn:</label>
      <input type="text" name="username" id="username">
    </p>
    <p>
      <label for="password">Lösenord:</label>
      <input type="password" name="password" id="password">

    </p>
    <p>
      <label for="birthdate">Födelsedatum:</label>
      <input type="date" name="birthdate" id="birthdate">
    </p>
    <p>
      <label for="css">Favorit CSS egenskap:</label>
      <input type="text" name="css">
    </p>
    <p>
      <label for="color">Välj en färg:</label>
      <input type="color" name="color">
    </p>
    <p>
      <button>Skicka</button>
    </p>
  </form>
</body>
</html>