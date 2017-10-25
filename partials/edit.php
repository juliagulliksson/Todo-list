<?php

header('location: ../index.php');
require 'database.php';

$new_title = $_POST['edit_title'];
$id = $_GET['id'];

$statement = $pdo->prepare("UPDATE todo SET title = '$new_title' WHERE id = $id");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);


