<html>
    <head>
        <title>Floating Points Numbers</title>
    </head>
<body>
    <?php
        $count = 0;
        while($count <= 10){

            if($count==5){

                echo "FIVE ";

            }else{

            echo $count . ", ";
            
            }
            $count++;
        }
        echo '<br/>';
        echo "Count: $count";

    ?>
</body>
</html>