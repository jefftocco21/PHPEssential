<html>
    <head>
        <title>Casting and Juggling</title>
    </head>
<body>  
    <?php
        $count = "2";
        echo gettype($count);
        echo '<br/>';

        $count +=3;
        echo gettype($count);
        echo '<br/>';

        settype($count, "string");
        echo gettype($count);
    ?>
</body>
</html>