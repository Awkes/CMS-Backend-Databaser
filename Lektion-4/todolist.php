<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
 
  // ---- Skapa en Todo-list ----
  // Testa att implementera en Todo-list med PHP-classes. Du behöver nog inte använda något arv
  // men måste få två klasser att synka med varandra, liknande SingleBookLibrary.
  // Du behöver alltså skapa minst två klasser Tasks/Todos och Task/Todo. 
  // Tasks ska hantera de olika Task och spara dessa i en array. 
  // Men alla Task ska vara en instans av klassen Task.

  class tasks {
    //Array of Task
    private $tasks = [];
    public function addTask($newTask){
      array_push($this->tasks,$newTask);
    }
    function getTasks() {
      return $this->tasks;
    }
  }

  class Task {
    private $title;
    private $createdAt;
    private $complete = false;
    public function __construct($title) {
      $this->title = $title;
      $this->createdAt = date('Y-m-d H:i');
    }
    public function getTask() {
      return $this->title .' - '. $this->createdAt;
    }
  }

  if (isset($_SESSION['todo'])) {
    $todo = unserialize($_SESSION['todo']);
  }
  else {
    $todo = new Tasks;
  }

  if (isset($_POST['todo'])) {
    $todo->addTask(new Task($_POST['todo']));
  }

  $_SESSION['todo'] = serialize($todo);

?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do List</title>
</head>
<body>
  <h1>To Do List</h1>
  <form action="todolist.php" method="POST">
    <p>New task: <input type="text" name="todo"></p>
    <p><button>Add task</button></p>
  </form>
  
  <ul>
    <?php
      $tasks = $todo->getTasks();
      foreach($tasks as $task) {
        echo '<li>'.$task->getTask().'</li>';
      }
    ?>
  </ul>
</body>
</html>
