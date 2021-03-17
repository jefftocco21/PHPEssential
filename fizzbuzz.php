<?php
    $num = 1;

    while($num <= 100){
        if($num % 3 == 0 && $num % 5 == 0){
            echo "fizzbuzz, ";
            $num++;
        }elseif($num % 3 == 0){
            echo "fizz ";
            $num++;
        }elseif($num % 5 ==0){
            echo "buzz ";
            $num++;
        }
        echo $num . ", ";
        $num++;
    }
?>