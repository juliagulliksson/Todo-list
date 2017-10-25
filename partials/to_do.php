<?php

require 'database.php';

$title = $_POST['add_title'];

$query = $pdo->prepare("SELECT * FROM todo WHERE title = '$title'");
$query->execute();
$count = $query->rowCount();

if($count > 0){
    header('location: ../index.php?wrong');
}else{
    header('location: ../index.php?success');
    $statement = $pdo->prepare("INSERT INTO todo (title, createdBy)
    VALUES (:title, :createdBy)");
    $statement->execute(array(
        ":title" => $title,
        ":createdBy" => $_POST['user_name']
    ));
    $todo = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($_POST);
    
}





