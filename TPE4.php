<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 4</title>
</head>
<body>
    <h1>Lecture Spirale </h1>
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

    $copieTableau = array();
    for ($ligne = 0; $ligne < $taille; $ligne++) {
        for ($colonne = 0; $colonne < $taille; $colonne++) {
            $copieTableau[$ligne][$colonne] = $tableau[$ligne][$colonne];
        }   
    }

    $unidimensionnel = array();
    foreach ($copieTableau as $ligne) {
        foreach ($ligne as $valeur) {
            $unidimensionnel[] = $valeur;
        }
    }

    echo "<h1>Affichage en spirale:</h1>";
    $spirale = array();
    $haut = 0;
    $bas = $taille - 1;
    $gauche = 0;
    $droite = $taille - 1;

    while ($haut <= $bas && $gauche <= $droite) {
        // Gauche vers droite
        for ($colonne = $gauche; $colonne <= $droite; $colonne++) {
            $spirale[] = $tableau[$haut][$colonne];
        }
        $haut++;

        // Haut vers bas
        for ($ligne = $haut; $ligne <= $bas; $ligne++) {
            $spirale[] = $tableau[$ligne][$droite];
        }
        $droite--;

        // Droite vers gauche
        if ($haut <= $bas) {
            for ($colonne = $droite; $colonne >= $gauche; $colonne--) {
                $spirale[] = $tableau[$bas][$colonne];
            }
            $bas--;
        }

        // Bas vers haut
        if ($gauche <= $droite) {
            for ($ligne = $bas; $ligne >= $haut; $ligne--) {
                $spirale[] = $tableau[$ligne][$gauche];
            }
            $gauche++;
        }
    }

    echo "<table border='1' style='border-collapse: collapse;'><tr>";
    foreach ($spirale as $valeur) {
        echo "<td style='padding: 5px; text-align: center;'>$valeur</td>";
    }
    echo "</tr></table>";
    ?>
</body>
</html>