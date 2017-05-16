<?php

require 'task.php';
require 'functions.php';

$pdo = connectToDb();

function fetchAllTasks($pdo) {

  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

require 'index.view.php';
