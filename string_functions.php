<html>
    <head>
        <title>String Functions</title>
    </head>
    <body>

    <?php
        $first = "The quick brown fox";
        $second = " jumped over the lazy dog";

        $third = $first;
        $third .= $second; //shorthand string concatenation
        echo $third;
    ?>
    <br/>
    Lowercase: <?php echo strtolower($third); ?><br/> <!--lowercase everything-->
    Uppercase: <?php echo strtoupper($third); ?><br/> <!--uppercase everything-->
    Uppercase first: <?php echo ucfirst($third); ?><br/> <!--first letter of first word uppercase-->
    Uppercase words: <?php echo ucwords($third); ?><br/> <!--first letter of every word uppercase-->
    Length: <?php echo strlen($third); ?><br/> <!--length of inputted string-->
    Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br/> <!--remove leading or trailing white space-->
    Find: <?php echo strstr($third, "brown");?><br/><!--finding a string within a string, will return everything thereafter-->
    Replace by string: <?php echo str_replace("quick", "super-fast", $third) . "E"; ?><br/> <!--first letter of every word uppercase, takes three parameters-->
    Repeat: <?php echo str_repeat($third, 2); ?><br/> <!--first arg is the string, second is how many time string repeats-->
    Make substring: <?php echo substr($third, 5, 10); ?><br/><!--make a substring from 2nd arg to 3rd arg-->
    Find position: <?php echo strpos($third, "brown"); ?><br/><!--get the position of 2nd arg-->
    Find character: <?php echo strchr($third, "z"); ?><br/><!--finds where 2nd arg then returns everything from it going forward-->

    </body>
</html>