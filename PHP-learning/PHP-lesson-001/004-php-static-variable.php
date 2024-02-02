<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Static Varable</title>
</head>
<body>
    <h2>PHP Static variables</h2>
    <?php
        function myTest(){
            static $x = 1;
            echo "<p> you call me for ".$x." time(s)</p>";

            $x++;
        };

        myTest();
        myTest();
        myTest();
        
        

    ?>
</body>
</html>