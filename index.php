<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php /*                                                      // Créer des variables et les afficher 
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

    <br>

    <?php                                                       // Additionner 2 variables 
        $a = 12;
        $b = 10;
        $total = $a + $b;
        echo "<br>";
        echo $total;
        echo "<br>"; 
    ?>

    <br>

    <?php                                                       // Même chose avec 3 variables
        $a = 5;
        $b = 3;
        $c = $a+$b;
        $saut = "<br>";
        echo $a,$saut,$b,$saut,$c,$saut;
        $a = 2;
        echo $a,$saut;
        $c = $b - $a;
        echo $a,$saut,$b,$saut,$c,$saut;
    ?>

    <br>

    <?php                                                       // Intervertir les variables "a" et "b"  
        $a = 15;
        $b = 23;
        $saut = "<br>";
        echo $a,$saut,$b,$saut;
        $c = $a;
        $a = $b;
        $b = $c;
        echo $a,$saut,$b,$saut;
    ?>

    <br>

    <?php                                                       // Calculer Prix TTC grâce à une fonction 
        function calcule($prixHt,$nbrArticle,$tva){
            $prixTTC = ($prixHt * $nbrArticle) * $tva;
            return $prixTTC;
        }
        echo calcule(25,8,0.2);
    */?>
    
    <br>

    <?php                                                       // Fonction qui teste si un nombre est positif ou négatif
        function test($nbr){
            if($nbr < 0){
                echo "le nombre est négatif";
            }else{
                echo "le nombre est positif";
            }
        }
        echo test(-1);
        echo "<br>";
        echo test(1);
    ?>
</body>
</html>