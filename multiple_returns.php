<?php
/** 
    function add_sub($val1, $val2){
        $add = $val1 + $val2;
        $sub = $val1 - $val2;
        return array($add, $sub);
    }

    $result =  add_sub(10, 5);
    echo $result[0] . "  " . $result[1]; 
*/
function add_sub($val1, $val2){
    $add = $val1 + $val2;
    $sub = $val1 - $val2;
    return array($add, $sub);
}

list($add_result, $sub_result) = add_sub(10, 5);
echo $add_result . " " . $sub_result;
?>