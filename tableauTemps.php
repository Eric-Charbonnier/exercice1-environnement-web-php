<?php
    // heure actuelle.
$now = new DateTime("America/Toronto");
echo $now->format('h:i'); 
echo "<br>";
$heuresJ = date("h") - 7;
$minutesI = date("i");
echo $heuresJ . " ";
echo $minutesI;
echo "<br>";
$arr = array(); 
for($j=0; $j<12; $j++){
    $arr[] = []; 
    for($i=0; $i<60; $i++){
        $arr[$i][$j] = " " . ($j+1) . " h " . $i. " ";            
    }            
}
for($j=0; $j<12; $j++){    
    for($i=0; $i<60; $i++){
        if ($i == $minutesI && $j == $heuresJ)
        $arr[$i][$j] = "XXXX";            
    }            
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page D'acceuil</title>
    <style>
        .tableStyle {
        border-collapse: collapse;
        background: rgb(245, 239, 223);
        border: 1px solid ;
        border-collapse: collapse;
        margin: auto;
        }

    </style>
</head>
<body>
    <h1>Travail Pratique 3</h1>
    <?php echo '<table class=tableStyle>';
for ($i = 0; $i < count($arr); $i++) {
    echo '<tr class=tableStyle>';
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo '<td class=tableStyle>' . $arr[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>   
</body>
</html>