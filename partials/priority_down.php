<?php

header('location: ../index.php');
require 'database.php';

var_dump($_GET);

$id = $_GET['id'];

$statement = $pdo->prepare("UPDATE todo SET priority = 'Low' WHERE id = $id");
$statement->execute();

