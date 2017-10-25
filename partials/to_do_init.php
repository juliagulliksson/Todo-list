<?php

require 'database.php';


$statement = $pdo->prepare("SELECT title, id, createdBy, priority FROM todo WHERE completed=0 ORDER BY id DESC");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);


//select * from tablename order by priority='High' DESC, priority='Medium' DESC, priority='Low" DESC