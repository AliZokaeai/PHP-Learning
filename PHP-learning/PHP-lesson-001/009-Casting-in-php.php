<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting in PHP</title>
</head>
<body>
    <h1>Casting in PHP</h1>
    <?php
        $a =5;
        $b = 5.3;
        $c = "Hello";
        $d = true;
        $e = NULL;

        $a = (string)$a;
        $b = (string)$b;
        $c = (string)$c;
        $d = (string)$d;
        $e = (string)$e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);


        echo "<p> <b> Note:</b> when you casting a boolean into string it gets the value \"1\", and when you casting \"NULL\" into strting it is converted into an empty string \"\".</p>";
        

        // Cast to integer

        $a = 5;
        $b = 5.43;
        $c = "25 kilometers";
        $d =" Kilometers 25";
        $e = "hello";
        $f = true;
        $g = NULL;

        $a = (int)$a;
        $b = (int)$b;
        $c = (int)$c;
        $d = (int)$d;
        $e = (int)$e;
        $f = (int)$f;
        $g = (int)$g;


        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);

        echo "<p>Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function convert strings into the number 0.</p>";
        echo "<hr>";
        $a = 5;
        $b = 5.43;
        $c = "25 kilometers";
        $d =" Kilometers 25";
        $e = "hello";
        $f = true;
        $g = NULL;

        $a = (float)$a;
        $b = (float)$b;
        $c = (float)$c;
        $d = (float)$d;
        $e = (float)$e;
        $f = (float)$f;
        $g = (float)$g;


        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);


        echo "<p>Note that when casting a string that starts with a number, the (float) function uses that number. If it does not start with a number, the (float) function convert strings into the number 0.</p>
        ";

        echo "<hr>";

        $a = 5;
        $b = 5.43;
        $c = "25 kilometers";
        $d =" Kilometers 25";
        $e = "hello";
        $f = true;
        $g = NULL;

        $a = (bool)$a;
        $b = (bool)$b;
        $c = (bool)$c;
        $d = (bool)$d;
        $e = (bool)$e;
        $f = (bool)$f;
        $g = (bool)$g;


        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);


        echo "<p>If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.</p>";

        echo "<hr>";

        $a = 5;
        $b = 5.43;
        $c = "25 kilometers";
        $d =" Kilometers 25";
        $e = "hello";
        $f = true;
        $g = NULL;

        $a = (array)$a;
        $b = (array)$b;
        $c = (array)$c;
        $d = (array)$d;
        $e = (array)$e;
        $f = (array)$f;
        $g = (array)$g;


        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);

        echo "<hr>";

        $a = 5;
        $b = 5.43;
        $c = "25 kilometers";
        $d =" Kilometers 25";
        $e = "hello";
        $f = true;
        $g = NULL;

        $a = (object)$a;
        $b = (object)$b;
        $c = (object)$c;
        $d = (object)$d;
        $e = (object)$e;
        $f = (object)$f;
        $g = (object)$g;


        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);

        echo "<hr>";

        $a = array("Volvo","BMW", "Toyota");
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        $a = (object) $a;
        $b = (object) $b;
        echo "<pre>";
        var_dump($a);
        echo "</pre>";
        echo "<pre>";
        var_dump($b);
        echo "</pre>";
    ?>
    

    


</body>
</html>