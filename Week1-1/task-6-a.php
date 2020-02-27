<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>task-1 #1</title>
  </head>
<body>
    <div class="wrapper">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="task.php">задача 1</a></li>
    <li class="breadcrumb-item"><a href="task-2.php">задача 2</a></li>
    <li class="breadcrumb-item"><a href="task-3.php">задача 3</a></li>
    <li class="breadcrumb-item"><a href="task-4-a.php">задача 4</a></li>
    <li class="breadcrumb-item"><a href="task-5-a.php">задача 5</a></li>
    <li class="breadcrumb-item"><a href="#">задача 6</a></li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">задача 6a</a></li>
    <li class="breadcrumb-item"><a href="task-6-b.php">задача 6b</a></li>
    <li class="breadcrumb-item"><a href="task-6-c.php">задача 6c</a></li>
  </ol>
</nav>
<img src="img/blok6a.PNG" alt="pic">
<div class="content">
        <form action="#" method="post">
        <fieldset>
        <legend>Task 6</legend>
        <p><select name="listA">
    <option disabled>Выбрать цифру</option>
    <option selected value="ноль">Ноль</option>
    <option value="один">один</option>
    <option value="два">два</option>
    <option value="три">три</option>
    <option value="четыре">четыре</option>
    <option value="пять">пять</option>
    <option value="шесть">шесть</option>
    <option value="семь">семь</option>
    <option value="восемь">восемь</option>
    <option value="девять">девять</option>
   </select></p>

   <p><select name="listB">
    <option disabled>Выбрать цифру</option>
    <option selected value="ноль">Ноль</option>
    <option value="один">один</option>
    <option value="два">два</option>
    <option value="три">три</option>
    <option value="четыре">четыре</option>
    <option value="пять">пять</option>
    <option value="шесть">шесть</option>
    <option value="семь">семь</option>
    <option value="восемь">восемь</option>
    <option value="девять">девять</option>
   </select></p>
 
        <input type="submit" name="submit" value="Посчитать">
        </fieldset>
        </form>
    </div>
    </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$a = $_POST['listA'];;
$b = $_POST['listB'];
switch ($a){
case "ноль" : $newA = 0; break;
case "один" : $newA = 1; break;
case "два" : $newA = 2; break;
case "три" : $newA = 3; break;
case "четыре" : $newA = 4; break;
case "пять" : $newA = 5; break;
case "шесть" : $newA = 6; break;
case "семь" : $newA = 7; break;
case "восемь" : $newA = 8; break;
case "девять" : $newA = 9; break;
}
switch ($b){
case "ноль" : $newB = 0; break;
case "один" : $newB = 1; break;
case "два" : $newB = 2; break;
case "три" : $newB = 3; break;
case "четыре" : $newB = 4; break;
case "пять" : $newB = 5; break;
case "шесть" : $newB = 6; break;
case "семь" : $newB = 7; break;
case "восемь" : $newB = 8; break;
case "девять" : $newB = 9; break;
}

$sum = $newA + $newB;
echo $sum."<br>";
if ($sum>10) echo "big number"; else echo "mini number";
?>