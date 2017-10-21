<?php


//header('location: ../index.php');
require 'database.php';
require 'to_do_init.php';
echo 'Removed items go here';

var_dump($_GET);

//nånting sånhär:
/*$statement = $pdo->prepare("DELETE title FROM todo WHERE id = 18 ");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
   */