<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number in PHP</title>
</head>
<body>
    <h2>Number in PHP</h2>
    <?php
    $a = 5;
    $b = 5.34;
    $c ="25";

    echo var_dump($a);
    echo "<br>";
    echo var_dump($b);
    echo "<br>";
    echo var_dump($c);
    echo "<br>";

    echo "<hr>";

    $x = 5985;

    var_dump(is_int($x));
    
    $x = 59.85;
    var_dump(is_int($x));

    echo PHP_FLOAT_MAX;
    echo "<br>";
    echo PHP_FLOAT_MIN;
    echo "<br>";
    echo PHP_FLOAT_DIG;
    echo "<br>";
    echo PHP_FLOAT_EPSILON;
    echo "<br>";

    $x = 10.365;
    echo "<br>";
    var_dump(is_float($x));

    echo "<br>";
    $x = 1.9e411;
    var_dump(is_infinite($x));

    echo "<br>";
    $x = acos(8);
    var_dump($x);

    echo "<hr>";
    // Check if hte variable is numeric

    $x = 5985;

    var_dump(is_numeric($x));

    echo "<br>";

    $x = "5958";
    var_dump(is_numeric($x));


    echo "<br>";

    $x = "59.85"+100;

    var_dump(is_numeric($x));


    echo "<br>";

    $x = "Hello ";
    var_dump(is_numeric($x));

    echo "<hr>";
    //Convert Data casting

    //cast float to int

    $x = 234.3034;
    $int_cast = (int)$x;

    echo $int_cast;

    echo "<br>";
    $x = "2344.233";
    $int_cast = (int)$x;

    echo $int_cast;





    ?>
</body>
</html>