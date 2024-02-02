<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String</title>
</head>
<body>
    <h2> PHP string </h2>
    <?php
        echo "Hello <br>";
        echo "Hello <br>";

        $x = "Ali Zokaeai";
        echo "Hello $x";
        echo "<br>";

        echo 'Hello $x';
        echo '<br>';

        echo strlen("Hello $x");
        echo "<br>";

        echo str_word_count("Hello $x");
        echo "<br>";

        echo strpos("Hello $x","Ali");
        echo "<br>";
        $y = strpos("Hello Ali Zokaeai","Reza");
        echo var_dump($y);

        echo "<br>";
        $x = "Hello world!";
        echo strtoupper($x);
        echo "<br>";
        echo strtolower($x);
        echo "<br>";
        echo $x;
        echo "<br>";
        $y = str_replace("wrold", "Dolly", $x);
        echo "$y";
        echo "<br>";
        echo strrev("$x");
        echo "<br>";
        $x = " Hello Ali Zokaei ";
        echo trim($x);
        $x = "This is a long string for explod. So you can see how it will exploded! ";
        $y = explode (" ", $x);
        echo "<br>";
        // Use the pring_r() function to dispaly the result:
        print_r($y);

        //String Concatenation
        echo "<br>";
        $x = "Hello";
        $y = "World";
        $z = "$x    $y";

        echo "$z";

        

        //Slicing the strings
        echo "<br>";
        $x="Hello wrold";
        echo substr($x, 6, 5);
        echo "<br>";
        $x="Hello wrold";
        echo substr($x, 6);
        echo "<br>";
        $x="Hello wrold";
        echo substr($x, -5, 3);
        echo "<br>";
        $x="Hello wrold";
        echo substr($x, 1, -1);

        //Scape Charecter
        echo "<br>";
        $x = "We are teh so-called \"Iranina Worries\" from the north";
        $y = "The price is \$ 250 for today";
        echo "$x";
        echo "<br>";
        echo "$y";

    ?>

</body>
</html>