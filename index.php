<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nbr = 5;
        echo $nbr;
        echo '<br>';
        echo gettype($nbr);
        echo '<br>';

        $text = "Axel";
        echo '<br>';
        echo $text;
        echo '<br>';

        $bool = false;
        echo '<br>';
        echo gettype($bool);
    ?>

    <?php
        $a = 12;
        $b = 10;
        $total = $a + $b;
        echo "<br>";
        echo $total;
    ?>
</body>
</html>