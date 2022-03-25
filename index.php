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
        $saut = "<br>";
    ?>

    <?php /*                                                      // Créer des variables et les afficher 
        $nbr = 5;
        echo $nbr,$saut;
        echo gettype($nbr),$saut;

        $text = "Axel";
        echo $text,$saut;

        $bool = false;
        echo gettype($bool),$saut;
    ?>

    <br>

    <?php                                                       // Additionner 2 variables 
        $a = 12;
        $b = 10;
        $total = $a + $b;
        echo $total,$saut;
    ?>

    <br>

    <?php                                                       // Même chose avec 3 variables
        $a = 5;
        $b = 3;
        $c = $a+$b;
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
    ?>
    
    <br>

    <?php                                                       // Fonction qui teste si un nombre est positif ou négatif
        function test($nbr){
            if($nbr < 0){
                echo "le nombre est négatif";
            }else if($nbr == 0){
                echo "$nbr est null";
            }else{
                echo "le nombre est positif";
            }
        }
        echo test(-1),$saut;
        echo test(1);
    ?>

    <br>

    <?php                                                       // Fonction qui permet de savoir quelle est la plus grande valeur
        function grand($nbr1,$nbr2,$nbr3){
            if($nbr1 >= $nbr2 && $nbr1 >= $nbr3){
                echo "$nbr1 est le plus grand chiffre";
            }
            else if($nbr2 >= $nbr1 && $nbr2 >= $nbr3){
                echo "$nbr2 est le plus grand chiffre";
            }
            else{
                echo "$nbr3 est le plus grand chiffre";
            }
        }
        echo grand(10,23,8);
    ?>

    <br>

    <?php
        function petit($nbr1,$nbr2,$nbr3){                      // Fonction qui permet de savoir quelle est la plus petit valeur
            if($nbr1 <= $nbr2 && $nbr1 <= $nbr3){
                echo "$nbr1 est le plus petit chiffre";
            }else if($nbr2 <= $nbr1 && $nbr2 <= $nbr3){
                echo "$nbr2 est le plus petit chiffre";
            }else{
                echo "$nbr3 est le plus petit chiffre";
            }
        }
        echo petit(1,1,8);
    ?>

    <br>
    
    <?php
        function categorie($age){                               // Fonction qui permet dans quelle catégorie selon l'âge de la personne
            if($age <= 5){
                echo "Vous n'avez pas l'âge requis";
            }else if($age >= 6 && $age <= 7){
                echo "Poussin";
            }else if($age >= 8 && $age <= 9){
                echo "Pupille";
            }else if($age >= 10 && $age <= 11){
                echo "Minime";
            }else{
                echo "Cadet";
            }
        }
        echo categorie(6)
    ?>

    <br>

    <?php
        function categorieSwitch($age){                          // Même chose que l'exercice au dessus mais avec "switch/case" au lieu de if/else
            switch ($age) {
                case $age >=6 && $age <= 7:
                    echo "Poussin";
                    break;
                case $age >=8 && $age <= 9:
                    echo "Pupille";
                    break;
                case $age >=10 && $age <= 11:
                    echo "Minime";
                    break;
                case $age > 12:
                    echo "Cadet";
                    break;
                default:
                    echo "Vous n'avez pas l'âge requis";
                break;
        }
    }
    categorieSwitch(9);
    */?>

    <br>

    <?php                                                       // Boucle
        for($i = 0; $i <= 5; $i++){
            echo $i,$saut;
        }
    ?>

    <br>

    <?php                                                       // Boucle dans une fonction 
        function script($nbr){
            $saut = "<br>";
            for($i = 1; $i < 10; $i++){
                $nbr++;
                echo $nbr,$saut;
            }
        }
        script(5)
    ?>
</body>
</html>