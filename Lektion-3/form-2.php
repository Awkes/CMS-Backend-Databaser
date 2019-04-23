<?php
  if (isset($_POST['username']) && isset($_POST['password']) && 
    $_POST['username'] === 'andreas' && $_POST['password'] === 'password') {
    // Skicka svar
    $user_data = [
      'username' => 'andreas',
      'age' => 36,
      'job' => 'utvecklare'
    ];
    echo json_encode($user_data);
  }
  elseif (messages) {
    $msgs = ['Du är en gädda!','Min cykel är grön!','Ostbollarna är slut!','En fisk gick sönder igår!'];
    echo json_encode($msgs);
  }
  else {
    // Skicka svar att access is denied
    http_response_code(403);
  }
?>