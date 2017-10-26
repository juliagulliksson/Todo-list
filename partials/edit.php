<?php

header('location: ../index.php');
require 'database.php';

$new_title = $_POST['edit_title'];
$id = $_GET['id'];

$statement = $pdo->prepare("UPDATE todo SET title = :newTitle WHERE id = :id");
$statement->execute(array(
":newTitle" => $new_title,
":id" => $id));
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);


