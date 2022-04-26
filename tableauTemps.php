<?php

date_default_timezone_set('America/Toronto');
$heuresJ = date("h");
$minutesI = date("i");
echo "Heure actuelle : <br>" . $heuresJ . " h " . $minutesI;
echo "<br>";
$color ="<span class=\"color\">XXXX</span>";
$arr = array(); 
for($j=0; $j<12; $j++){
    $arr[] = []; 
    for($i=0; $i<60; $i++){
        $arr[$i][$j] = ($j+1) . " h " . str_pad($i, 2, "0", STR_PAD_LEFT);          
    }            
}
for($j=0; $j<12; $j++){    
    for($i=0; $i<60; $i++){
        if ($i == $minutesI && $j == $heuresJ-1)
        $arr[$i][$j] = $color;            
    }            
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Tableau</title>
    <style>
        body {
            background-color: #fde4cf;
            text-align: center;
        }
        .color{
            color : red;
        }
        .tableStyle {
            border: 5px solid #0096c7;
            border-collapse: collapse;
            margin: auto;
        }
        .tdtrStyle {
            border: 2px solid #00b4d8;
            border-collapse: collapse;
            padding: 5px 5px;
        }

    </style>
</head>
<body>
    <h1>Travail Pratique 3</h1>
    <a href="index.html">Page d'acceuil</a>
    <?php echo '<table class="tableStyle">';
for ($i = 0; $i < count($arr); $i++) {
    echo '<tr class="tdtrStyle">';
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo '<td class="tdtrStyle">' .  $arr[$i][$j] . "</td>";        
    }
    echo "</tr>";
}
echo "</table>";
?>   
</body>
</html>