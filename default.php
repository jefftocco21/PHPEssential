<?php
    function paint($room = "office", $color="red"){
        return "The color of the {$room} is {$color}.<br/>";
    }

    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null); //null will work bere because sending nothing is not the same as not sending anything
?>