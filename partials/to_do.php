<?php



header('location: ../index.php');
require 'database.php';


$statement = $pdo->prepare("INSERT INTO todo (title) 
    VALUES (:title)");
$statement->execute(array(
    ":title" => $_POST['add_title'],
));
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($_POST);

