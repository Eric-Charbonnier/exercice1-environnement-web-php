<?php
// heure actuelle.
$now = new DateTime("America/Toronto");
echo $now->format('h:i'); 
echo "<br>";
$heuresJ = date("h") - 6;
$minutesI = date("i");
echo $heuresJ . " ";
echo $minutesI;
echo "<br>";
    $arr = array(); 
    for($j=0; $j<12; $j++){
        $arr[] = []; 
        for($i=0; $i<60; $i++){
            $arr[$i][$j] = "*" . ($j+1) . " " . $i. "*";            
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
</head>
<body>
    <h1>Travail Pratique 3</h1>
    <?php echo "<table>";
for ($i = 0; $i < count($arr); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo "<td>" . $arr[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
$arr[2][39] = "X";
?>   
</body>
</html>

// eco sou forme de string