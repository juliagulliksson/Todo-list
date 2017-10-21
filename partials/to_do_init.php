<?php

require 'database.php';


$statement = $pdo->prepare("SELECT title, id, createdBy FROM todo WHERE completed=0 ORDER BY id DESC"); //only select boolean=1?
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);