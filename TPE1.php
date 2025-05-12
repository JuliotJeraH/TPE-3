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

    echo "<h1>Tableau unidimensionnel:</h1>";
    echo "<table border='1' style='border-collapse: collapse;'><tr>";
    foreach ($unidimensional as $value) {
        echo "<td style='padding: 5px; text-align: center;'>$value</td>";
    }
    echo "</tr></table>";
    
    
    ?>
</body>
</html>