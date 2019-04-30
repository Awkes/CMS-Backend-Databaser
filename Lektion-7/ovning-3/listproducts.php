<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List Products</title>
</head>
<body>
  
  <?php
    $order = (isset($_GET['orderby'])) ? "ORDER BY {$_GET['orderby']}" : '';

    require('connect.php');
    $qry = "SELECT product.maker, product.type, laptop.model, laptop.speed, laptop.ram, laptop.price FROM laptop
            JOIN product ON product.model = laptop.model
            UNION
            SELECT product.maker, product.type, pc.model, pc.speed, pc.ram, pc.price FROM pc
            JOIN product ON product.model = pc.model
            $order
    ";
    $statement = $pdo->prepare($qry); // Any SQL Query
    $statement->execute(); // Run the query
    $returned_data = $statement->fetchAll(PDO::FETCH_ASSOC); // Assoc array

    echo '<table>';
    echo '<tr>';
    echo '<th><a href="?orderby=maker">Maker</a></th>
          <th><a href="?orderby=type">Type</a></th>
          <th><a href="?orderby=model">Model</a></th>
          <th><a href="?orderby=speed">Speed</a></th>
          <th><a href="?orderby=ram">RAM</a></th>
          <th><a href="?orderby=price">Price</a></th>
    ';
    echo '</tr>';

    foreach($returned_data as $data) {
      echo '<tr>';
      echo "<td>{$data['maker']}</td>
            <td>{$data['type']}</td>
            <td>{$data['model']}</td>
            <td>{$data['speed']}</td>
            <td>{$data['ram']}</td>
            <td>{$data['price']}</td>
      ";
      echo '</tr>';
    }

    echo '</table>';

  ?>

  
</body>
</html>