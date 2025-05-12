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
    $json = json_encode($tab, JSON_PRETTY_PRINT);
    file_put_contents("Spirale.json", $json);

    echo "Voire fichier \"Spirale.json\"";
    
    ?>
</body>
</html>