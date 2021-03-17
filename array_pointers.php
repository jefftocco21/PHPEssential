<?php
    $ages = array(1,2,3,4,5);

    echo "1: " . current($ages) . '<br/>'; 
    next($ages);
    echo "2: " . current($ages) . '<br/>';
?>