<?php


header('location: ../index.php');
require 'database.php';


$id = $_GET['id'];


$statement = $pdo->prepare("DELETE FROM todo WHERE id = :id");
$statement->execute(array(
":id" => $id));
