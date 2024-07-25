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
    <p>
        
    <?php 
        $randNum = rand(0,1);
        if ($randNum == 1){
            echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsam dicta iste, delectus culpa aliquid vel qui quae repellat unde, expedita, minus aspernatur. Praesentium exercitationem, adipisci corrupti quis numquam ipsum?
        Facere ratione, corrupti repellat numquam sequi dolorum aliquam iste alias, libero officia consectetur, porro quia eaque nostrum. Labore hic consequatur soluta perferendis quibusdam, repellendus et praesentium nam id beatae sed.";
        }else {
            echo "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        }
    ?>
    </p>

</body>

</html>