<?php

return function ($app) {
  // Register auth middleware
  $auth = require __DIR__ . '/../middlewares/auth.php';

  // Skapa en GET route som hämtar alla inlägg
  // Skapa en GET route som hämtar de X senaste/första inläggen
  // Skapa en GET route som hämtar alla inlägg som är skrivna av en specifik användare
  // Skapa en GET route som hämtar de X senaste inläggen som är skrivna av en specifik användare
  // Skapa en GET route som hämtar de X första inläggen som är skrivna av en specifik användare

  // Utan qrystrings hämtas alla inlägg.
  // Med limit hämtas begränsat antal
  // Med order ASC eller DESC sorteras de efter första/sista
  // Med user hämtas inlägg från specifikt userID

  $app->get('/entries', function ($request, $response) {  
    $entry = new Entry($this->db);
    // Läs in eventuella qrystrings
    $qryString = $request->getQueryParams();
    // Begränsa antalet
    $limit = (isset($qryString['limit']) && is_numeric($qryString['limit'])) 
      ? 'LIMIT '.$qryString['limit'] : '';
    // Välj order
    $order = (isset($qryString['order']) && $qryString['order'] == 'desc') 
      ? 'DESC' : 'ASC';
    // Hämta från specifik user
    $user = (isset($qryString['user']) && is_numeric($qryString['user'])) 
      ? 'WHERE userID = '.$qryString['user'] : '';
    return $response->withJson($entry->getEntries($user,$order,$limit));
  });

};
