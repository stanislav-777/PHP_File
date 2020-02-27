<?php
// дешифратор с использованием массива и рекурсивной функции
function cisloToSifra($cislo) {
$sifra = array();
//echo "test1";
//exit()
for ($i = 0; $i < strlen($cislo); $i++) {
//echo "testFOR";
//exit()
$sifra[] = substr($cislo, $i, 1);
}
//echo "test2";
//exit()
return $sifra;
}
$pass1 = "436";
$pass2Se = "123";
$pass1 = cisloToSifra($pass1);
$pass2Se = cisloToSifra($pass2Se);
//echo "test3";
//exit()
if ($pass1[1] > 5) {
//echo "test4";
//exit()
$pass2 = $pass2Se[0].$pass2Se[1].$pass2Se[2];
$opisanie = "\"число первого разряда из \$pass2Se\".\"число второго разряда из \$pass2Se\".\"число третьего разряда из \$pass2Se\"";
} else {
//echo "test5";
//exit()
$pass2 = $pass2Se[1].$pass2Se[2].$pass2Se[0];
$opisanie = "\"число второго разряда из \$pass2Se\".\"число третьего разряда из \$pass2Se\".\"число первого разряда из \$pass2Se\"";
}

// шифратор с использованием массива и рекурсивной функции

function cisloToSifra($cislo) {
    $sifra = array();
    for ($i = 0; $i < strlen($cislo); $i++) {
//echo "testАЩК";
//exit()
    $sifra[] = substr($cislo, $i, 1);
    }
//echo "test1";
//exit()
    return $sifra;
    }
    $pass1 = "123";
    $pass2 = "456";
    $pass1 = cisloToSifra($pass1);
    $pass2 = cisloToSifra($pass2);
    if ($pass1[1] > 5) {
//echo "test2";
//exit()
    $pass2Se = $pass2[0].$pass2[1].$pass2[2];
    } else {
//echo "test3";
//exit()
    $pass2Se = $pass2[2].$pass2[0].$pass2[1];
    }
    echo $pass2Se;
?>