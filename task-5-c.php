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
    <li class="breadcrumb-item"><a href="#">задача 5</a></li>
    <li class="breadcrumb-item"><a href="task-6-a.php">задача 6</a></li>

  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="task-5-a.php">задача 5a</a></li>
    <li class="breadcrumb-item"><a href="task-5-b.php">задача 5b</a></li>
    <li class="breadcrumb-item"><a href="#">задача 5c</a></li>
    <li class="breadcrumb-item"><a href="task-5-d.php">задача 5d</a></li>
  </ol>
</nav>
<img src="img/blok5c.PNG" alt="pic">
<div class="content">
        <form action="#" method="post">
        <fieldset>
        <legend>Task 5</legend>
        Введите pas1 <input type="text" name="pass1" class="mb-3"></br>
        Введите pas2Se <input type="text" name="pass2Se" class="mb-3"></br>
 
        <input type="submit" name="submit" value="Дешифровать">
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

$pass1 = $_POST['pass1']; 
$pass2Se = $_POST['pass2Se'];


$pass1_1 = (int)($pass1 / 100);
$pass1_23 = $pass1 % 100;
$pass1_2 = (int)($pass1_23 / 10);
$pass1_3 = $pass1_23 % 10;

$pass2Se_1 = (int)($pass2Se / 100);
$pass2Se_23 = $pass2Se % 100;
$pass2Se_2 = (int)($pass2Se_23 / 10);
$pass2Se_3 = $pass2Se_23 % 10;

if ($pass1_2 > 5) {
$pass2 = $pass2Se_1.$pass2Se_2.$pass2Se_3;
$opisanie = "\"число первого разряда из \$pass2Se\".\"число второго разряда из \$pass2Se\".\"число третьего разряда из \$pass2Se\"";
} else {
$pass2 = $pass2Se_2.$pass2Se_3.$pass2Se_1;
$opisanie = "\"число второго разряда из \$pass2Se\".\"число третьего разряда из \$pass2Se\".\"число первого разряда из \$pass2Se\"";
}

echo $pass2."<br>".$opisanie;

?>