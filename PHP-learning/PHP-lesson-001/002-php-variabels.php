<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variables</title>
</head>
<body>
    <h2>The PHP variables</h2>
    <?php
    $x = 5;
    $y = "Ali";
    $txt = "PHP programming language.";
    echo "<p>I love ". $txt . " a lot ! </p>";

    $z= "2";

    $q = $x+$z;
    echo ("<p>".$q."</p>");

    echo ("<p>". var_dump($x)."</p>");
    echo ("<p>". var_dump($txt)."</p>");
    echo ("<p>". var_dump($q)."</p>");
    echo ("<p>". var_dump($y)."</p>");
    echo ("<p>". var_dump(Null)."</p>");

    $x = $y = $z = 5;

    echo ("<p>". var_dump($x)."</p>");
    echo ("<p>". var_dump($y)."</p>");
    echo ("<p>". var_dump($z)."</p>");
    echo ("<p>". var_dump($x+$y+$z)."</p>");


    ?>
    
</body>
</html>