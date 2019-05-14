<?php
  // Load everything needed
  require __DIR__ . '/../vendor/autoload.php';

  // Start a session here
  session_start();

  // Get settings and instantiate the app
  $settings = require __DIR__ . '/../src/settings.php';
  $app = new \Slim\App($settings);

  // Register our dependencies through our container
  $dependencies = require __DIR__ . '/../src/container.php';
  $dependencies($app);

  // Start adding routes
  // $app->get('/user/{id}', function ($request, $response, $args) {
  //   $userID = $args['id'];

  //   $statement = $this->db->prepare("SELECT * FROM users WHERE userID = :userID");
  //   $statement->execute([
  //     ':userID' => $userID
  //   ]);
  //   $user = $statement->fetch(PDO::FETCH_ASSOC);

  //   return $response->withJson($user);
  // });

  // Rot-route
  $app->get('/', function () { echo 'Welcome!'; });

  // Skapa en GET route som hämtar alla användare (tänk på att INTE visa password-fältet)
  $app->get('/users', function ($request, $response) {
    $statement = $this->db->prepare('SELECT userID, userName FROM users');
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $response->withJson($users);
  });

  // Skapa en GET route som hämtar en enskild användare (tänk på att INTE visa password-fältet )
  $app->get('/user/{id}', function ($request, $response, $args) {
    $statement = $this->db->prepare('SELECT userID, userName FROM users WHERE UserID=?');
    $statement->execute([$args['id']]);
    $users = $statement->fetch(PDO::FETCH_ASSOC);
    return $response->withJson($users);
  });

  // Skapa en GET route som hämtar alla inlägg
  $app->get('/entries', function ($request, $response) {
    $s = $this->db->prepare("SELECT * FROM entries");
    $s->execute();
    $entries = $s->fetchAll(PDO::FETCH_ASSOC);
    return $response->withJson($entries);
  });

  // Skapa en GET route som hämtar de X senaste inläggen
  $app->get('/entries/latest', function ($request, $response) {  
    
    $qryString = $request->getQueryParams();
    $limit = isset($qryString['limit']) ? 'LIMIT '.$qryString['limit'] : '';

    $s = $this->db->prepare("SELECT * FROM entries ORDER BY createdAt $limit");
    $s->execute();
    $entries = $s->fetchAll(PDO::FETCH_ASSOC);
    return $response->withJson($entries);
  });

  // Skapa en GET route som hämtar de X första inläggen
  $app->get('/entries/oldest', function ($request, $response) {  

    $qryString = $request->getQueryParams();
    $limit = isset($qryString['limit']) ? 'LIMIT '.$qryString['limit'] : '';

    $s = $this->db->prepare("SELECT * FROM entries ORDER BY createdAt DESC $limit");
    $s->execute();
    $entries = $s->fetchAll(PDO::FETCH_ASSOC);
    return $response->withJson($entries);
  });

  // Skapa en GET route som hämtar alla inlägg som är skrivna av en specifik användare
  $app->get('/entries/user/{id}', function ($request, $response, $args) {
    $s = $this->db->prepare('SELECT * FROM entries WHERE userID=?');
    $s->execute([$args['id']]);
    $entries = $s->fetchAll(PDO::FETCH_ASSOC);
    return $response->withJson($entries);
  });

  // Skapa en GET route som hämtar de X senaste inläggen som är skrivna av en specifik användare
  $app->get('/entries/user/{id}/latest', function ($request, $response, $args) {  

    $qryString = $request->getQueryParams();
    $limit = isset($qryString['limit']) ? 'LIMIT '.$qryString['limit'] : '';

    $s = $this->db->prepare("SELECT * FROM entries WHERE userID=? ORDER BY createdAt $limit");
    $s->execute([$args['id']]);
    $entries = $s->fetchAll(PDO::FETCH_ASSOC);
    return $response->withJson($entries);
  });

  // Skapa en GET route som hämtar de X första inläggen som är skrivna av en specifik användare
  $app->get('/entries/user/{id}/oldest', function ($request, $response, $args) {  

    $qryString = $request->getQueryParams();
    $limit = isset($qryString['limit']) ? 'LIMIT '.$qryString['limit'] : '';

    $s = $this->db->prepare("SELECT * FROM entries WHERE userID=? ORDER BY createdAt DESC $limit");
    $s->execute([$args['id']]);
    $entries = $s->fetchAll(PDO::FETCH_ASSOC);
    return $response->withJson($entries);
  });

  // Run app
  $app->run();
