<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 3</title>
</head>
<body>
    <h1> Générateur de spirale </h1>
    <?php 
    extract($_GET);
    $tableau = array(array());
    echo "<h1>Tableau bidimensionnel:</h1>";
    for ($ligne = 0; $ligne < $n; $ligne++) {
        for ($colonne = 0; $colonne < $n; $colonne++) {
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
    $json = json_encode($tableau, JSON_PRETTY_PRINT);
    file_put_contents("Spirale.json", $json);

    echo "Voir fichier \"Spirale.json\"";
    
    ?>
</body>
</html>