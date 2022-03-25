<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "" method="POST">
        <p>Saisir le prix d'un article : </p>
        <input type="text" name="nbr1">
        <p>Saisir le nombre d'article : </p>
        <input type="text" name="nbr2">
        <p>Saisir le taux de TVA : </p>
        <input type="text" name="nbr3">
        <br>
        <br>
        <input type="submit" value="Calculer">
    </form>
    <?php
        // if(isset($_GET["nbr1"]) AND isset($_GET["nbr2"]) AND $_GET["nbr1"] != "" AND $_GET["nbr2"] != ""){
        //     $nombre1 = $_GET["nbr1"];
        //     $nombre2 = $_GET["nbr2"];
        //     $total = $nombre1 + $nombre2;
        //     echo "le résultat de $nombre1 + $nombre2 est égale à $total";
        // }else{
        //     echo "Veuillez Remplir les champs";
        // }
    ?>
    <?php
        if(isset($_POST["nbr1"]) AND isset($_POST["nbr2"]) AND isset($_POST["nbr3"])
        AND $_POST["nbr1"] != "" AND $_POST["nbr2"] != "" AND $_POST["nbr3"] != ""){
            function calcule($prixHt,$nbrArticle,$tva){
                $prixTTC = $prixHt*$nbrArticle*(($tva/100)+1);
                return $prixTTC;
            }
            echo " le prix de votre article HT en prix TTC est égale à ";
            echo calcule($_POST["nbr1"],$_POST["nbr2"],$_POST["nbr3"]);
        }else{
                echo "Veuillez saisir les information";
        }
    ?>
</body>
</html>