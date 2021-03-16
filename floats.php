<html>
    <head>
        <title>Floating Points Numbers</title>
    </head>
<body>
    <?php
        $float = 3.14;
        echo $float + 8;

        //rounding
        round($float, 1); //how many places to round
        floor($float); //round down
        ceil($float); //round up

        //is_int(), is_float(), is_numeric() return true of false just to see if a variable is evaluated as an integer 
?>
</body>
</html>