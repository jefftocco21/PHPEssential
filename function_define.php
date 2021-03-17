<?php
    function say_hello(){
        echo 'Hello World' . '<br/>';
    }

    say_hello();
    
    function say_hello_to($word){
        echo "Hello $word<br/>";
    }

    say_hello_to("World");

    //functions no longer have to be declard before being defined
?>