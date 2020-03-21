<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <!-- Tabuada do cinco em PHP--->
    <?php
        $a = 5;
        while ($a <= 5) {
            for ($i=0; $i <= 10; $i++) { 
                echo "$a * $i = ".$a * $i;
                echo "<br>";           
            }
            echo "<br>";
            $a++;
        }
        ?>
    </body>
</html>
