
    <?php
    require 'partials/database.php';
    require 'partials/to_do_init.php';
    require 'partials/head.php';
    
    ?>
    
    <main>
       
       <div class="list-items">
        <h1>To Do List</h1>

        <?php
        for($i = 0; $i < count($todo); $i++){
        ?>
            
            <ul>
                <li>
                    <?= $todo[$i]['title']; ?>
                    <a href="partials/done.php"><i class="fa fa-check" aria-hidden="true" title="Mark as done"></i></a>
                    <a href="partials/remove.php"><i class="fa fa-times" aria-hidden="true" title="Remove from list"></i></a>
                </li>
                
                
            </ul>
            
       <?php } ?>

        </div>
        <div class="form">
       <form action="partials/to_do.php" method="POST">

           <input type="text" name="add_title" placeholder="Add a new item here" autocomplete="off" required>
           <input type="submit" name="submit" value="Add">

       </form>
       
       </div>
       
       <div class="done">
       <h2>Done</h2>
       
       <!-- For loop where boolean = 0 -->
       
       </div>
   
   </main>
<?php 
require 'partials/footer.php';

?>