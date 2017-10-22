<?php


header('location: ../index.php');
require 'database.php';
require 'to_do_init.php';


$id = $_GET['id'];

var_dump($id);



$statement = $pdo->prepare("DELETE FROM todo WHERE id = $id");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
