<?php

require 'database.php';

//PRIORITY: HIGH
$statement = $pdo->prepare("SELECT title, id, createdBy, priority FROM todo WHERE completed=0 AND priority='High' ORDER BY priority='High' DESC, id DESC");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

//PRIORITY: LOW
$statement = $pdo->prepare("SELECT title, id, createdBy, priority FROM todo WHERE completed=0 AND priority='Low' ORDER BY id DESC, priority='Low' DESC");
$statement->execute();
$todo_low = $statement->fetchAll(PDO::FETCH_ASSOC);

//DONE/COMPLETED
$statement = $pdo->prepare("SELECT title, id FROM todo WHERE completed=1 ORDER BY id DESC");
$statement->execute();
$todo_completed = $statement->fetchAll(PDO::FETCH_ASSOC);