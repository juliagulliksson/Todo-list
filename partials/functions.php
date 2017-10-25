<?php

function if_edit($edit){
    if(!isset($edit)): 
    return "<a href='index.php?edit'><i class='fa fa-pencil' aria-hidden='true' title='Edit'></i></a>";

    endif;
}