<?php
    function say_hello_to($word){
        echo "Hello $word";
    };

    $name = "Jeff";
    say_hello_to($name);

    echo '<br/>';

    function better_hello($greeting, $target, $punc){
        echo $greeting . " " . $target . $punc . "<br/>";
    }

    better_hello("Hello", $name, ".");

?>