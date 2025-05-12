<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE 2</title>
</head>
<body>
    <h1>Lecture colonne par colonne</h1>
    <?php 
    $n = 5;
    $tab = array();

    echo "<h1>Tableau bidimensionnel:</h1>";
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $tab[$i][$j] = rand(0, 10);
        }   
    }


    echo "<table border='1' style='border-collapse: collapse;'>";
    foreach ($tab as $i) {
        echo "<tr>";
        foreach ($i as $r) {
            echo "<td style='padding: 5px; text-align: center;'>$r</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    $unidimensional = array();
    for ($j = 0; $j < $n; $j++) {
        for ($i = 0; $i < $n; $i++) {
            $unidimensional[] = $tab[$i][$j];
        }
    }


    echo "<h1>Tableau unidimensionnel (par colonnes):</h1>";
    echo "<table border='1' style='border-collapse: collapse;'><tr>";
    foreach ($unidimensional as $value) {
        echo "<td style='padding: 5px; text-align: center;'>$value</td>";
    }
    echo "</tr></table>";
    ?>
</body>
</html>
