<?php

header('location: ../index.php?success');
require 'database.php';


$statement = $pdo->prepare("INSERT INTO todo (title, createdBy)
    VALUES (:title, :createdBy)");
$statement->execute(array(
    ":title" => $_POST['add_title'],
    ":createdBy" => $_POST['user_name']
));
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);



