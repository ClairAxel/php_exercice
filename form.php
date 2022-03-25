<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "" method="GET">
        <p>saisir un premier nombre : </p>
        <input type="text" name="nbr1">
        <p>saisir un second nombre : </p>
        <input type="text" name="nbr2">
        <br>
        <br>
        <input type="submit" value="Calculer">
    </form>
    <?php
        if(isset($_GET["nbr1"]) AND isset($_GET["nbr2"])){
            $nombre1 = $_GET["nbr1"];
            $nombre2 = $_GET["nbr2"];
            $total = intval($nombre1 + $nombre2);
            echo "le résultat de la somme est de $total";
        }
    ?>
</body>
</html>