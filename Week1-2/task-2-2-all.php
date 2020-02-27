<?php
//2-b
function debet_kredit($i,$bank){
    $sum = 0;
    for ($j=0;$j<5;$j++){
        $sum += $bank[$i][$j];
    }
    return $sum;
}
$spisokSum = array();
$bank = array();
for ($i = 0; $i<5; $i++){
    for($j=0;$j<5;$j++){
        $bank[$i][$j] = rand(-100000,100000);
    }
}
for ($i = 0; $i<5; $i++){
    for($j=0;$j<5;$j++){
      echo  $bank[$i][$j]." | ";
    }
    echo "<br>";
}
for ($i=0;$i<5;$i++){
    $spisokSum[$i] = debet_kredit($i,$bank);
}
sort($spisokSum);
for ($i=5;$i>=0;$i--){
  echo "<br>".$spisokSum[$i]." ";
}

//2-c
function prostChisla($diaposone,$i){
    $k = 0;
    $boole = false; 
    for ($j=2;$j<=(round(sqrt($i)));$j++){
        if (($i % $j) == 0) $k++;
    }
    if ($k<1) $boole = true;
    return $boole;
}
echo "<br>";
$prostye = array();
$sostavnye = array();
$diaposone = array();
for ($i = 1;$i<101;$i++){
    $diaposone[$i] = $i;
}
for  ($i = 1;$i<101;$i++){
    if (prostChisla($diaposone,$i)) array_push($prostye,$i);
    else array_push($sostavnye,$i);
}
echo "<br>Простые числа<br>";
for ($i=0;$i<count($prostye);$i++){
    echo $prostye[$i]." ";
}
echo "<br>Составные числа<br>";
for ($i=0;$i<count($sostavnye);$i++){
    echo $sostavnye[$i]." ";
}
?>