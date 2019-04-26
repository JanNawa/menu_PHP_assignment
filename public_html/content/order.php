<?php
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    
    $foods = $_GET["food"];
    $drinks = $_GET["drink"];
    
    $payment = $_GET["payment"];
    
    $sum=0;
    foreach($foods as $key => $value){
        $sum+=$value; 
    }
    foreach($drinks as $key => $value){
        $sum+=$value; 
    } 
?>
<html>
    <head>
        <title>Assignment 4 : Order</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/phpStyle.css"/>
    </head>
    <body>
        <div id="container">
            <h1>Restaurant Menu</h1>
        </div>
        <main>
            <h2>Order Summary</h2>
            <h3>Customer's Name: <?= $firstname." ".$lastname ?></h3>
            <h3>Order Summary:</h3>
            <h3>Food:</h3>
            <p>
                <? foreach($foods as $key => $value){echo $key." - $".$value; echo "<br>";} ?>
            </p>
            <h3>Drink:</h3>
            <p>
                <? foreach($drinks as $key => $value){echo $key." - $".$value; echo "<br>";} ?>
            </p>
            <h3>Total Price: <?= $sum ?></h3>
            <h3>Payment Method: <?= $payment ?></h3>
        </main>
    </body>
</html>