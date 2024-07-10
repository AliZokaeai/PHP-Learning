<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .body-1 {
        background-color: red;
        color:aliceblue;
        font-size: <?php echo rand(10,30);?>px;
    }

    .body-2 {
        background-color: green;
        color:yellow;
        font-size: <?php echo rand(10,30);?>px;
    }

    .body-3 {
        background-color: aqua;
        color:white;
        font-size: <?php echo rand(10,30);?>px;
    }

    .body-4 {
        background-color: yellow;
        color:red;
        font-size: <?php echo rand(10,30);?>px;
    }

    .body-5 {
        background-color: magenta;
        color:aliceblue;
        font-size: <?php echo rand(10,30);?>px;
    }

    .body-6 {
        background-color: gray;
        color:whitesmoke;
        font-size: <?php echo rand(10,30);?>px;
    }
    </style>
</head>

<body class="body-<?php echo rand(1,6);?>">
    <?php
        echo "<h1>Hello from PHP!</h1>";
    ?>


</body>

</html>