
    <?php
    require 'partials/database.php';
    require 'partials/to_do_init.php';
    require 'partials/head.php';
    require 'partials/isset_title.php';
    
    ?>
    
    <main>
      
      
       
       <div class="list-items">
        <h1>To Do List</h1>

   
        
        <?php foreach($todo as $todos):
           ?>
             <ul>
                <li>
                    <?= $todos['title'];?>
                    <?= $todos['id']; ?>
                    
                    <a href="partials/done.php?id=<?= $todos['id']; ?>"><i class="fa fa-check" aria-hidden="true" title="Mark as done"></i></a>
                    <a href="partials/remove.php?id=<?= $todos['id'];; ?>"><i class="fa fa-times" aria-hidden="true" title="Remove from list"></i></a>
                </li>
                
                
            </ul>
            
<?php endforeach; ?>
           
           

        </div>
        <div class="form">
       <form action="partials/to_do.php" method="POST">

           <input type="text" name="user_name" placeholder="Type your username" autocomplete="off" required>
           <input type="text" name="add_title" placeholder="Add a new to-do" autocomplete="off" required>
           <input type="submit" name="submit" value="Add">

       </form>
       
       </div>
       
       <div class="done">
       <h2>Completed to-do's</h2>
    
        <?php
           
    
        for($i = 0; $i < count($todo); $i++):
           
           $statement = $pdo->prepare("SELECT title, id, createdBy FROM todo WHERE completed=1 ORDER BY id DESC");
            $statement->execute();
            $todo = $statement->fetchAll(PDO::FETCH_ASSOC);
           
           if($todo != NULL){
        ?>
            
            <ul>
                <li>
                    <?= $todo[$i]['title'];?>
                    <?= $todo[$i]['id']; ?>
                </li>
                
                
            </ul>
            
       <?php 
           }else{
               echo "You have not completed any to-do's yet";
           }
           
           endfor; ?>
       
       
       
       
       
       
       <!-- For loop where boolean = 0 
       
       Message after succesful to do
       Delete and Done
       
       
       -->
       
       </div>
   
   </main>
<?php 
require 'partials/footer.php';

?>