<?php
//1-a
    $arr = ['a','b','c'];
    var_dump($arr);

//1-b
    echo "<br>первый элемент массива = ' ".$arr[0]." '<br>";
    echo "второй элемент массива = ' ".$arr[1]." '<br>";
    echo "третий элемент массива = ' ".$arr[2]." '<br>";

//1-c
    $arr = ['a','b','c','d'];
    echo "<br>";
    echo $arr[0]." + ".$arr[1].", ".$arr[2]." + ".$arr[3];

//1-d
    $arr = [2,5,3,9];
    $result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
    echo "<br> result = ".$result;

//1-e
    $arr=[];
    for ($i=1;$i<6;$i++){
        $arr[] = $i;
    } 
    echo "<br>";
    var_dump($arr);

//1-f
    $arr = ['a'=>1,'b'=>2,'c'=>3];
    echo "<br>".$arr['c'];

//1-g
    echo "<br>".($arr['a']+$arr['b']+$arr['c']);


//1-h
    $arr = ['Коля'=>'1000$','Вася'=>'500$','Петя'=>'200$'];
    echo "<br>"."ЗП Пети - ".$arr['Петя'].". Зп Коли - ".$arr['Коля'];

    
//1-i
    $week = ['1'=>'Пн','2'=>'Вт','3'=>'Ср','4'=>'Чт','5'=>'Пт','6'=>'Сб','7'=>'Вск'];
    echo "<br> Сегодня : ".$week['3'];


//1-j
    $week = ['1'=>'Пн','2'=>'Вт','3'=>'Ср','4'=>'Чт','5'=>'Пт','6'=>'Сб','7'=>'Вск'];
    $number = '3';
    echo "<br> Сегодня : ".$week[$number];

//1-k
    $arr = [
        'cms'=>['joomla','wordpress','drupal'],
        'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];
    echo "<br>".$arr['cms'][0]." ".$arr['cms'][2]." ".$arr['colors']['green']." ".$arr['colors']['red']; 


//1-l
    $arr=[
        'ru'=>['ПН','ВТ','СР','ЧТ','ПТ','СБ','ВСК'],
        'en'=>['Mon','Tues','Wed','Thurs','Fri','Sat','Sun']
    ];
    echo "<br>".$arr['ru'][0]." ".$arr['en'][2];


//1-m
    $lang='ru';
    $day='3';
    $arr=[
        'ru'=>['ПН','ВТ','СР','ЧТ','ПТ','СБ','ВСК'],
        'en'=>['Mon','Tues','Wed','Thurs','Fri','Sat','Sun']
    ];
    echo "<br>".$arr[$lang][$day];


//1-n
// шифратор с использованием массива и рекурсивной функции
function cisloToSifra($cislo) {
    $sifra = array();
    for ($i = 0; $i < strlen($cislo); $i++) {
    $sifra[] = substr($cislo, $i, 1);
    }
    return $sifra;
    }  
    $pass1 = "123";
    $pass2 = "456";    
    $pass1 = cisloToSifra($pass1);
    $pass2 = cisloToSifra($pass2);   
    if ($pass1[1] > 5) {
    $pass2Se = $pass2[0].$pass2[1].$pass2[2];
    } else {
    $pass2Se = $pass2[2].$pass2[0].$pass2[1];
    }   
    echo $pass2Se;

// дешифратор с использованием массива и рекурсивной функции
function cisloToSifra($cislo) {
    $sifra = array();
    for ($i = 0; $i < strlen($cislo); $i++) {
    $sifra[] = substr($cislo, $i, 1);
    }
    return $sifra;
    }
    $pass1 = "436";
    $pass2Se = "123";
    $pass1 = cisloToSifra($pass1);
    $pass2Se = cisloToSifra($pass2Se);
    if ($pass1[1] > 5) {
    $pass2 = $pass2Se[0].$pass2Se[1].$pass2Se[2];
    $opisanie = "\"число первого разряда из \$pass2Se\".\"число второго разряда из \$pass2Se\".\"число третьего разряда из \$pass2Se\"";
    } else {
    $pass2 = $pass2Se[1].$pass2Se[2].$pass2Se[0];
    $opisanie = "\"число второго разряда из \$pass2Se\".\"число третьего разряда из \$pass2Se\".\"число первого разряда из \$pass2Se\"";
    }
    
?>