<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>task-5 #1</title>
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
    <li class="breadcrumb-item"><a href="#">задача 5a</a></li>
    <li class="breadcrumb-item"><a href="task-5-b.php">задача 5b</a></li>
    <li class="breadcrumb-item"><a href="task-5-c.php">задача 5c</a></li>
    <li class="breadcrumb-item"><a href="task-5-d.php">задача 5d</a></li>
  </ol>
</nav>
<img src="img/blok5a.PNG" alt="pic">
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

    <?php
    $optimist = 0;
    $pessimist = 0;
    for($i=0;$i<100;$i++){
    $comp = rand(0,1);
    if ($comp) {
        $optimist++;
        echo 'оптимист </br>';
    }   
    else {
        $pessimist++;
        echo 'пессимист </br>';
    }
}
    echo "<hr> Проведем исследования,посчитаем колличество выпадений 1 и 0, стохастический анализ говорит нам, что вероятность выпадения этих двух событий стремиться к 50% или 0.5";
    echo "<br>";
    echo "вероятность выпадения 1 = ".$optimist/100;
    echo "<br>";
    echo "вероятность выпадения 0 = ".$pessimist/100;
    ?>
