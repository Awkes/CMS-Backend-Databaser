<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Product</title>
</head>
<body>
  <form action="addproduct.php" method="POST">
    <p>
      <label for="maker">Maker:</label>
      <select  id="maker" name="maker">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="H">H</option>
      </select>
    </p>
    <p>
      Type:
      <input type="radio" id="type_pc" name="type" value="pc">
      <label for="type_pc">PC</label>
      <input type="radio" id="type_laptop" name="type" value="laptop">
      <label for="type_laptop">Laptop</label>
      
    </p>
    <p>
      <label for="model">Model:</label>
      <input type="text" id="model" name="model">
    </p>
    <p>
      <label for="speed">Speed:</label>
      <input type="text" id="speed" name="speed">
    </p>
    <p>
      <label for="ram">RAM:</label>
      <input type="text" id="ram" name="ram">
    </p>
    <p>
      <label for="hd">HD:</label>
      <input type="text" id="hd" name="hd">
    </p>
    <p>
      <label for="rd_screen">RD / Screen:</label>
      <input type="text" id="rd_screen" name="rd_screen">
    </p>
    <p>
      <label for="price">Price:</label>
      <input type="text" id="price" name="price">
    </p>
    <p>
      <button type="submit">Lägg till</button>
    </p>
  </form>

  <?php
    if (isset($_POST['maker']) && isset($_POST['type']) && isset($_POST['model']) &&
        isset($_POST['speed']) && isset($_POST['ram']) && isset($_POST['hd']) &&
        isset($_POST['rd_screen']) && isset($_POST['price'])) {
      
      require('connect.php');
  
      $qry1 = "INSERT INTO product VALUES (?, ?, ?)";
      $qry2 = "INSERT INTO {$_POST['type']} VALUES (?, ?, ?, ?, ?, ?)";

      $array1 = [
        $_POST['maker'],
        $_POST['model'],
        $_POST['type']
      ];
      $array2 = [
        $_POST['speed'],
        $_POST['ram'],
        $_POST['model'],
        $_POST['hd'],
        $_POST['rd_screen'],
        $_POST['price']
      ];

      $statement = $pdo->prepare($qry1); // Any SQL Query
      $statement->execute($array1); // Run the query
      
      $statement = $pdo->prepare($qry2); // Any SQL Query
      $statement->execute($array2); // Run the query
    }


  ?>

  
</body>
</html>