<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and Pring in PHP</title>
</head>
<body>
    <h2>Echo and Pring in PHP</h2>
    <?php
        echo "<h2> PHP is fun!</h2>";
        echo "<p>Hello world!</p>";
        echo "<p>I'm about to learn PHP!</p>";
        echo "<br><p>","This ","sting ","was ","made ","With mutliple parameters.","</p>";

        echo "<hr>";

        $txt1 ="Learn PHP";
        $txt2 = "W3Schools.com";

        $x = 5;
        $y = 4;

        echo "<h2>".$txt1 ."</h2>";
        echo "<p>Study PHP at ". $txt2 . "</p><br>";
        echo $x + $y;

        echo "<hr>";

        print "<h2> PHP is Fun! </h2>";
        print "<p>Hello world! </p>";
        print "I'm about to learn PHP!";


        print "<h2>". $txt1. "</h2>";
        print "<p>Study PHP at ".$txt2 ."</p><br>";
        print "<br><p>"."This "."sting "."was "."made "."With mutliple parameters."."</p>";

        print $x+$y;
    ?>
</body>
</html>