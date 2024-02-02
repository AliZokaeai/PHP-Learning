<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variable scops</title>
</head>
<body>
    <h2>PHP variable scops</h2>

    <?php
    $x = 5; // global scope
    $y = 6; // global scope

    function myTest(){
        $GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];
    //using x iside this function will generate an error
    global $y;
    echo ("<p> Variable x inside function is :".$y."</p>");
     };

    myTest();

    echo "<p> Variable x outside function is:".$y."</p>";
    ?>
</body>
</html>