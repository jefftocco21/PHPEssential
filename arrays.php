<html>
    <head>
        <title>Strings</title>
    </head>
<body>
    <?php
        $numbers = array(1,2,3,4);
        echo $numbers[1]; //returns the index [1] of array
        echo '<br/>';

        $mixed = array(6, "jeff", "tocco", array("x", "y", "z"));
        
        echo '<pre>';
        echo print_r($mixed); 
        echo '</pre>';

        echo '<br/>';
        echo $mixed[3][1]; //multi array reference
        echo '<br/>';
        $mixed[2] = "Cat"; //rewriting existed element
        $mixed[4] = "dog"; //new element since there was no element 4
    ?>
</body>
</html>