<?php
    $nums = [1,2,4,5];

    echo $num_string = implode("&", $nums);
    echo '<br>';
    print_r(explode("&", $num_string));
?>