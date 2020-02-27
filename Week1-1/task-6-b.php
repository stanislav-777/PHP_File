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
    <li class="breadcrumb-item"><a href="task-6-a.php">задача 6a</a></li>
    <li class="breadcrumb-item"><a href="#">задача 6b</a></li>
    <li class="breadcrumb-item"><a href="task-6-c.php">задача 6c</a></li>
  </ol>
</nav>
<img src="img/blok6b.PNG" alt="pic">
    <div class="content">
        <form action="#" method="post">
        <fieldset>
        <legend>Task 6b</legend>
        Введите цену <input type="text" name="first"></br>
        <input type="submit" name="submit" value="Перевести">
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
    $newPrice = '';
    $newCent = '';
    $newRub = '';
    $price = $_POST['first'];
    $cent = $price % 100;
    $rub = (int)($price / 100);
    switch ($rub%10){
        case 0:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            $newRub = $rub.' рублей'; break;
        case 1:
            $newRub = $rub.' рубль'; break;
        case 2:
        case 3:
        case 4:
            $newRub = $rub.' рубля'; break;            
    }
    switch ($cent%10){
        case 0:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            $newCent = $cent.' копеек'; break;
        case 1:
            $newCent = $cent.' копейка'; break;
        case 2:
        case 3:
        case 4:
            $newCent = $cent.' копейки'; break;            
    }
    if ((($rub%100) == 11) || (($rub%100) == 12)) {$newRub = '';$newRub = $rub.' рублей';}
    if ((($cent%100) == 11) || (($rub%100) == 12)) {$newCent = '';$newCent = $cent.' копеек';}
    echo $newRub.' '.$newCent;
    echo "<br>";
    echo $rub.'.'.$cent.' руб.';

    ?>
