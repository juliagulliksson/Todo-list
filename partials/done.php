<?php

header('location: ../index.php');
require 'database.php';

var_dump($_GET);

$id = $_GET['id'];

$statement = $pdo->prepare("UPDATE todo SET completed = 1 WHERE id = :id");
$statement->execute(array(
":id" => $id));
