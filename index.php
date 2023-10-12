<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <div>
            <h2>Know your Healthful foods!</h2>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Input a food</label>
            <input type="text" name="food">
        </div>
        <div>
            <a href="?food=almond">
                <button type="button" name="food">Almond</button>
            </a>
            <a href="?food=oatmeal">
                <button type="button" name="food">Oatmeal</button>
            </a>
            <a href="?food=broccoli">
                <button type="button" name="food">Broccoli</button>
            </a>
            <a href="?food=apple">
                <button type="button" name="food">Apple</button>
            </a>
            <a href="?food=avocados">
                <button type="button" name="food">Avocados</button>
            </a>
            <a href="?food=chicken">
                <button type="button" name="food">Chicken</button>
            </a>
        </div>
    </form>

    <?php
    include "php/stocks.php";
    ?>


</body>

</html>