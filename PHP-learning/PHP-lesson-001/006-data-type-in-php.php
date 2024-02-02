<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data type in PHP</title>
</head>
<body>
    <h2>Data type in PHP</h2>

    <?php
        $x = 5;
        print var_dump($x);
        echo "<br>";

        $x = "Hello World!";
        $y = 'Hello World!';

        print var_dump($x);
        echo "<br>";
        print var_dump($y);

        echo "<br>";

        $x = 1363;
        var_dump($x);
        
        echo "<br>";
        $x = 20.12;
        var_dump($x);

        echo "<br>";
        $x = true;
        var_dump($x);

        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);

        echo"<br>";

        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {   
                $this->color = $color;
                $this->model = $model;
        }

        public function message() {
            return "My car is a ".$this->color ." ".$this->model."!";
        }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar);

    $x = "Hello World!";
    $x = null;
    echo "<br>";
    var_dump($x);
    
    echo "<hr>";
    $x = 5;
    var_dump($x);

    echo "<br>";
    $x ="Hello";
    var_dump($x);

    echo "<br>";

    $x = 5;
    $x = (string) $x;
    var_dump($x);
    
    ?>
</body>
</html>