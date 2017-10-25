<?php


    $statement = $pdo->prepare("SELECT title, id FROM todo WHERE completed=1 ORDER BY id DESC");
    $statement->execute();
    $todo_completed = $statement->fetchAll(PDO::FETCH_ASSOC);

function if_completed($a, $b, $c){
    

    if($a != NULL){
        for($i = 0; $i < count($a); $i++):
    ?>

        <ul>
            <li>
                <?= $b; ?>
                        <a href="partials/remove.php?id=<?= $c; ?>"><i class="fa fa-times" aria-hidden="true" title="Remove from list"></i></a>

            </li>
        </ul>

    <?php

        endfor; 
        
    }else{
        echo "<p>You have not completed any to-do's yet</p>";
    }

}





?>