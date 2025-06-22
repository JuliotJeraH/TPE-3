<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 1</title>
</head>
<body>
    <h1>Lecture ligne par ligne </h1>
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

    $tableauUnidimensionnel = array();
    foreach ($copieTableau as $ligne) {
        foreach ($ligne as $valeur) {
            $tableauUnidimensionnel[] = $valeur;
        }
    }

    echo "<h1>Tableau unidimensionnel:</h1>";
    echo "<table border='1' style='border-collapse: collapse;'><tr>";
    foreach ($tableauUnidimensionnel as $valeur) {
        echo "<td style='padding: 5px; text-align: center;'>$valeur</td>";
    }
    echo "</tr></table>";
    ?>
</body>
</html>