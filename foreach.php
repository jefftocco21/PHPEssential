<?php
    /** 
    $array = [1,2,3,4,5];

    foreach($array as $value){
        echo "$value" . ", ";
    }
    */

    //below is a foreach loop with associative array

    $person = array(
        "first" => "Jeff",
        "last" => "Tocco",
        "zip" => "02360"
    );

    foreach($person as $attribute => $data){
        echo "$attribute: $data<br/>";
    }
?>