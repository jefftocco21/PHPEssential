<?php
    for($count=0; $count<=10; $count++){
        if($count == 5){
            continue; //continue just tells the loop to continue earler and skips the remaining statements
        }
        echo $count . ", ";
    }
?>