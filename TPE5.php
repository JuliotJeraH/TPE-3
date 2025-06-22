<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 5</title>
</head>
<body>
    <h1>Lecture Spirale à l'envers</h1>
    <?php 
    $taille = 5;
    $tableau = array(array());
    echo "<h1>Tableau bidimensionnel:</h1>";
    for ($ligne = 0; $ligne < $taille; $ligne++) {
        for ($colonne = 0; $colonne < $taille; $colonne++) {
            $tableau[$ligne][$colonne] = rand(0, 10);
        }   
    }

    echo "<table border='1' style='border-collapse: collapse;'>";
    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td style='padding: 5px; text-align: center;'>$valeur</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Fonction pour lecture en spirale inversée
    function lectureSpiraleInversee($tableauBidimensionnel) {
        $taille = count($tableauBidimensionnel);
        $spirale = array();
        $haut = 0;
        $bas = $taille - 1;
        $gauche = 0;
        $droite = $taille - 1;

        while ($haut <= $bas && $gauche <= $droite) {
            // Bas vers haut
            if ($gauche <= $droite) {
                for ($ligne = $bas; $ligne >= $haut; $ligne--) {
                    $spirale[] = $tableauBidimensionnel[$ligne][$gauche];
                }
                $gauche++;
            }

            // Droite vers gauche
            if ($haut <= $bas) {
                for ($colonne = $droite; $colonne >= $gauche; $colonne--) {
                    $spirale[] = $tableauBidimensionnel[$bas][$colonne];
                }
                $bas--;
            }

            // Haut vers bas
            if ($gauche <= $droite) {
                for ($ligne = $haut; $ligne <= $bas; $ligne++) {
                    $spirale[] = $tableauBidimensionnel[$ligne][$droite];
                }
                $droite--;
            }

            // Gauche vers droite
            if ($haut <= $bas) {
                for ($colonne = $gauche; $colonne <= $droite; $colonne++) {
                    $spirale[] = $tableauBidimensionnel[$haut][$colonne];
                }
                $haut++;
            }
        }

        return $spirale;
    }


    $spiraleInversee = lectureSpiraleInversee($tableau);
    echo "<h1>Affichage en spirale à l'envers:</h1>";
    echo "<table border='1' style='border-collapse: collapse;'><tr>";
    foreach ($spiraleInversee as $valeur) {
        echo "<td style='padding: 5px; text-align: center;'>$valeur</td>";
    }
    echo "</tr></table>";
    ?>
</body>
</html>
