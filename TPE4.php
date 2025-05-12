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
    $n=5;
     $tab=array(array());
    echo "<h1>Tableau bidimensionnel:</h1>";
     for($i=0;$i<$n;$i++){
         for($j=0;$j<$n;$j++){
             $tab[$i][$j]=rand(0,10);
         }   
     }
 
    echo "<table border='1' style='border-collapse: collapse;'>";
    foreach($tab as $i){
        echo "<tr>";
        foreach($i as $r){
            echo "<td style='padding: 5px; text-align: center;'>$r</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    $tab2=array();
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $tab2[$i][$j]=$tab[$i][$j];
        }   
    }
    $unidimensional = array();
    foreach ($tab2 as $i) {
        foreach ($i as $r) {
            $unidimensional[] = $r;
        }
    }

    echo "<h1>Affichage en spirale:</h1>";
    $spirale = array();
    $top = 0;
    $bottom = $n - 1;
    $left = 0;
    $right = $n - 1;

    while ($top <= $bottom && $left <= $right) {
        // Traverse from left to right
        for ($i = $left; $i <= $right; $i++) {
            $spirale[] = $tab[$top][$i];
        }
        $top++;

        // Traverse from top to bottom
        for ($i = $top; $i <= $bottom; $i++) {
            $spirale[] = $tab[$i][$right];
        }
        $right--;

        // Traverse from right to left
        if ($top <= $bottom) {
            for ($i = $right; $i >= $left; $i--) {
                $spirale[] = $tab[$bottom][$i];
            }
            $bottom--;
        }

        // Traverse from bottom to top
        if ($left <= $right) {
            for ($i = $bottom; $i >= $top; $i--) {
                $spirale[] = $tab[$i][$left];
            }
            $left++;
        }
    }

    echo "<table border='1' style='border-collapse: collapse;'><tr>";
    foreach ($spirale as $value) {
        echo "<td style='padding: 5px; text-align: center;'>$value</td>";
    }
    echo "</tr></table>";
    
    
    ?>
</body>
</html>