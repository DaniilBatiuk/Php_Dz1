<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    $colors = array("red", "blue", "green", "yellow", "orange", "purple", "pink", "brown", "black", "white");

    $randomColors = array();
    while (count($randomColors) < 4) {
        $randomColor = $colors[array_rand($colors)];
        if (!in_array($randomColor, $randomColors)) {
            $randomColors[] = $randomColor;
        }
    }

    foreach ($randomColors as $color) {
        echo "<div style='width: 100%; height: 100px; background-color: $color;'></div>";
    }

    ?>
</body>

</html>