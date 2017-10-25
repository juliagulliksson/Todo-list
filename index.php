<?php
    require 'partials/head.php';
    require 'partials/database.php';
    require 'partials/to_do_init.php';
   
    ?>

    <main>



        <div class="form">
           
                <h1>To Do List</h1>
                <div class="form-wrap">
                   <?php
                    
                   if(isset($_GET['wrong'])){
                       echo "<p>This title already exists, try again</p>";
                   }
                       
                       ?>
                    <form action="partials/to_do.php" method="POST">

                        <input type="text" name="user_name" placeholder="Type your username" autocomplete="off" required>
                        <input type="text" name="add_title" placeholder="Add a new to-do" autocomplete="off" required>
                        <input type="submit" name="submit" value="Add">

                    </form>
                </div>

        </div>


        <div class="list-items">
            <h2>To Do</h2>
            <div class="list-items-wrap">



                <?php 


                if ( isset($_GET['success'])){
                    echo "<p> Your to-do was added successfully! </p>";
                }



                foreach($todo as $todos):
                ?>
                    <ul>
                        <li>
                            <?= $todos['title'] ;?>
                            <?= $todos['id']; ?>

                            
                            <a href="partials/remove.php?id=<?= $todos['id']; ?>"><i class="fa fa-times" aria-hidden="true" title="Remove from list"></i></a>

                            <?php
                            if(!isset($_GET['edit'])): ?>
                            <a href="index.php?edit"><i class="fa fa-pencil" aria-hidden="true" title="Edit"></i></a>

                            <?php endif ?>
                            
                            <a href="partials/done.php?id=<?= $todos['id']; ?>"><i class="fa fa-check" aria-hidden="true" title="Mark as done"></i></a>
                            
                            <div class="clear"></div>

                            <?php
                            if(isset($_GET['edit'])): 
                            ?>

                                <form action="partials/edit.php?id=<?= $todos['id']; ?>" method="POST">
                                    <input type="text" name="edit_title" placeholder="Edit your to-do here" autocomplete="off">
                                    <input type="submit" name="send" value="Edit">
                                </form>

                            <?php endif;?>

                        </li>


                    </ul>

                    <?php endforeach; ?>
                
            </div>
            
        </div>





        <div class="done">
            <h2>Completed to-do's</h2>
            
            <div class="done-wrap">
                
                <?php
                $statement = $pdo->prepare("SELECT title, id FROM todo WHERE completed=1 ORDER BY id DESC");
                $statement->execute();
                $todo_completed = $statement->fetchAll(PDO::FETCH_ASSOC);

                if($todo_completed != NULL){
                    for($i = 0; $i < count($todo_completed); $i++):
                ?>

                    <ul>
                        <li>
                            <?= $todo_completed[$i]['title'];?>
                                <a href="partials/remove.php?id=<?= $todo_completed[$i]['id']; ?>"><i class="fa fa-times" aria-hidden="true" title="Remove from list"></i></a>

                        </li>
                    </ul>

                    <?php    


                    endfor; 
                }else{
                            echo "<p>You have not completed any to-do's yet</p>";
                        }

                ?>

            </div>

        </div>
        
        <!-- change pdo to :title etc
        Priority
        
        select * from tablename order by priority='High' DESC, priority='Medium' DESC, priority='Low" DESC
         
          
           
             -->

    </main>
    

<?php 
require 'partials/footer.php';
?>
