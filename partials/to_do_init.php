<?php

require 'database.php';


$statement = $pdo->prepare("SELECT title FROM todo"); //only select boolean=1?
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);