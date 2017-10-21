<?php

//header('location: ../index.php');
require 'database.php';

var_dump($_GET);



//UPDATE ONLY UNIQUE ID
$statement = $pdo->prepare("UPDATE todo SET completed = 1 WHERE id = ");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);