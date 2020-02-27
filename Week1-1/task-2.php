<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>task-1 #1</title>
  </head>
  <body>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="task.php">задача 1</a></li>
    <li class="breadcrumb-item"><a href="#">задача 2</a></li>
    <li class="breadcrumb-item"><a href="task-3.php">задача 3</a></li>
    <li class="breadcrumb-item"><a href="task-4-a.php">задача 4</a></li>
    <li class="breadcrumb-item"><a href="task-5-a.php">задача 5</a></li>
    <li class="breadcrumb-item"><a href="task-6-a.php">задача 6</a></li>

  </ol>
</nav>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
    <?php
//Изучение PHP для начинающих | Урок #3 - Пишем "Hello World!"
    echo "Hello world! </br>"; //выводим надпись Hello world


//Изучение PHP для начинающих | Урок #4 - Комментарии в PHP
    echo "Hi!</br>"; //Эта строчка выводит Hi!
    /*
        комментарий №1
        комментарий №2
        комментарий №3
    */
    echo "Hi!</br>"; #Эта строчка выводит Hi!



//Изучение PHP для начинающих | Урок #5 - Переменные и их типы
    $myNumber = 45; //создаем переменную равную 45
    $float = -3.25; //создаем переменную равную -3.25
    $string = "Hello world"; //создаем переменную равную строке Hello world
    $bool = true; //создаем переменную равную значению истина
    echo "Переменная myNumber = $myNumber </br>"; //выводим переменную myNumber
    echo "Переменная float = $float </br>"; //выводим переменную float
    echo "Переменная string = $string </br>"; //выводим переменную string
    echo "Переменная bool = $bool </br>"; //выводим переменную bool
    $myNumber = 13; //переприсваиваем значение переменной myNumber
    echo "Переменная myNumber = $myNumber </br>"; //выводим переменную myNumber



//Изучение PHP для начинающих | Урок #6 - Константы
    echo PHP_VERSION; // выводим версию пхп
    echo "</br>"; //переход на новую строку
    define("PI", 3.14); //создаем константу PI со значеием 3.14
    echo PI; //выводим Пи которая по дефолту в пхп
    echo "</br>"; //переход на новую строку
    echo defined("PI"); //выводим Пи которая наша константа



//Изучение PHP для начинающих | Урок #7 - Арифметические операции
    $x = 32;  //создаем переменную равную 32 
    $y = 22.13; //создаем переменную равную 22.13
    $sum = $x + $y; //создаем переменную равную сумме х и у
    $diff = $x - $y; //создаем переменную равную разности х и у 
    $mult = $x * $y; //создаем переменную равную произведению х и у
    $dif = $x / $y; //создаем переменную равную делению х на у
    echo "</br>"; //переход на новую строку
    echo "Сумма из $x  и $y = $sum </br>";  // выводим сумму 
    echo "Разность из $x  и $y = $diff </br>"; // выводим разность
    echo "Умножение из $x  и $y = $mult </br>"; // выводим умножение
    echo "Деление из $x  и $y = $dif </br>"; // выводим деление
    $z = 12;  //создаем переменную равную 12
    $ostatok = $x % $z; //создаем переменную равную осатку от деления икс на зэт
    echo "Остаток от деления $x на $z = $ostatok </br>"; // выводим остаток
    $q = 400; //создаем переменную равную 400
    $q /= 10;   //переприсваиваем значение переменной равной в 10 раз меньшей своего начального значения 
    echo $q; // выводим
    echo "</br>"; //переход на новую строку
    $q = $q + 1;  //переприсваиваем значение переменной на 1 больше
    $q +=1; //переприсваиваем значение переменной на 1 больше
    $q++;//переприсваиваем значение переменной на 1 больше
    $q--;//переприсваиваем значение переменной на 1 меньше
    echo $q; //выводим 
    echo "</br>"; //переход на новую строку



//Изучение PHP для начинающих | Урок #8 - Строковые операции
    $str_1 = "<b>First stroka</b> <input type=\"text\" />"; //создаем переменую строкового типа
    $str_2 = "<i>Second stroka</i>"; //создаем переменую строкового типа
    echo $str_1." ".$str_2." \" \\".' \''; //выводим
    echo "</br>"; //переход на новую строку



//Изучение PHP для начинающих | Урок #9 - Логические операции
    $x = 12;  //создаем переменную равную 12
    $y = 14; //создаем переменную равную 14
    $z = 4.25; //создаем переменную равную 4.25
    $bool_1 = $x != $z; //создаем переменную равную истине или ложно, в данном случае истина
    echo $bool_1; //выводим
    echo "</br>"; //переход на новую строку
    $bool_2 = $x < $y; //создаем переменную равную истине или ложно, в данном случае истина
    echo $bool_1."</br>".$bool_2; //выводим
    $bool_3 = !($x != $y); //создаем переменную равную истине или ложно, в данном случае ложно
    echo "</br>"; //переход на новую строку
    echo $bool_3; //выводим
    echo "</br>"; //переход на новую строку
    $bool_4 = $x == $y || $z < $y; //создаем переменную равную истине или ложно, в данном случае истина
    echo $bool_4; //выводим
    echo "</br>"; //переход на новую строку
    $bool_5 = $z != $y && $x < $y;  //создаем переменную равную истине или ложно, в данном случае истина
    echo $bool_5;  //выводим
    echo "</br>"; //переход на новую строку
    $bool_6 = $z != $x ^ $y > $z;  //создаем переменную равную истине или ложно, в данном случае ложно 
    echo $bool_6; //выводим
    echo "</br>"; //переход на новую строку
    $bool = !($x != $y && $z < $x) || !($x == $y); //создаем переменную равную истине или ложно, в данном случае истина
    echo $bool; //выводим
    echo "</br>"; //переход на новую строку
    echo "$bool = !($x != $y && $z < $x) || !($x == $y)"; //выводим



//Изучение PHP для начинающих | Урок #10 - Оператор эквивалентности
    $string = "Example"; //создаем переменную 
    $num = 0;  //создаем переменную 
    $bool_1 = $string == true;  //создаем переменную 
    echo "</br>"; //переход на новую строку
    echo $bool_1; //выводим
    $bool_2 = $num == "";  //создаем переменную 
    echo "</br>"; //переход на новую строку
    echo $bool_2; //выводим
    $bool_3 = $string === true;  //создаем переменную 
    echo "</br>"; //переход на новую строку
    echo $bool_3; //выводим
    $bool_4 = $num === "";  //создаем переменную 
    echo "</br>"; //переход на новую строку
    echo $bool_4; //выводим



//Изучение PHP для начинающих | Урок #11 - Условные операторы
$x = 10;  //создаем переменную 
$y = 5;  //создаем переменную  

if($x==$y && $x != 12 && $y == 5 && ($x + 5) == 15) //проверяем условие
    echo "yra!"; //выводим
else if ($x == 15 || $y != 7){  
    $num = 5;  //создаем переменную  
    echo "Число № ".$num; //выводим
}    
else if ($x == 15 || $y != 7){ //иначе если то выполняется этот блок
    $num = 5; //переприсваиваем переменную  
    echo "Число № ".$num; //выводим
}
else { //иначе  выполняется этот блок
    echo "<br />";//выводим
    echo "все сработало!"; //выводим
}

if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15)  //проверяем условие
echo "yra"; //выводим

$x == $y ? $string = "Da" : $string = "Net"; //проверяем условие кратко
echo "<br>".$string; //выводим

echo "<br>"; //переход на новую строку

//Изучение PHP для начинающих | Урок #13 - Циклы For, While и Do While
for ($i = 100; $i >= 80; $i-=2){ //цикл 
    if ($i % 5 == 0) continue; // если выполняется услвоеи переходим к следующей итерации 
    if ($i<=87) break;  // если выполняется услвоеи выход из цикла
    echo "Цикл под номером № $i<br>"; //выводим
}
echo "<br>";//переход на новую строку

$x = 1;
while ($x <= 10){ //цикл
    echo "Итерация под номером № $x <br>"; //выводим
    if ($x == 7) //проверяем условие
        for ($y=0; $y<5;$y+=3) //цикл
            echo "еще одна итерация  - $y <br>"; //выводим
        $x++; //инкремент
}
$z = 10;
echo "<br>";//переход на новую строку

do {
    echo "операция выполнилась только один раз"; //выводим
    $z++;
}
while ($z < 11);
    ?>
