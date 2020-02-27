<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>task-4 #1</title>
  </head>
<body>
    <div class="wrapper">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="task.php">задача 1</a></li>
    <li class="breadcrumb-item"><a href="task-2.php">задача 2</a></li>
    <li class="breadcrumb-item"><a href="task-3.php">задача 3</a></li>
    <li class="breadcrumb-item"><a href="#">задача 4</a></li>
    <li class="breadcrumb-item"><a href="task-5-a.php">задача 5</a></li>
    <li class="breadcrumb-item"><a href="task-6-a.php">задача 6</a></li>

  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="task-4-a.php">задача 4a</a></li>
    <li class="breadcrumb-item"><a href="#">задача 4b</a></li>
  </ol>
</nav>
<img src="img/blok4b.PNG" alt="pic">
    <div class="content">
        <form action="#" method="post">
        <fieldset>
        <legend>Task 4a</legend>
        Введите 1 если хотите узнать площадь, и оставьте поле пустым если хотите узнать периметр<input type="text" name="why" class="ml-3"></br>
        Введите координаты точки a <input type="text" name="ax" class="mb-3 mr-2"> <input type="text" name="ay" class="mb-3"></br>
        Введите координаты точки b <input type="text" name="bx" class="mb-3 mr-2"> <input type="text" name="by" class="mb-3"></br>
        Введите координаты точки c <input type="text" name="cx" class="mb-3 mr-2"> <input type="text" name="cy" class="mb-3"></br>
        Введите координаты точки d <input type="text" name="dx" class="mb-3 mr-2"> <input type="text" name="dy" class="mb-3"></br>
        <input type="submit" name="submit" value="Рассчитать периметр">
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
    if ($_POST["submit"]){ 
        $k1 = abs($_POST['by'] - $_POST['ay'])/abs($_POST['bx'] - $_POST['ax']);
        //echo $k1."<br>";
        $k2 = abs($_POST['by'] - $_POST['cy'])/abs($_POST['bx'] - $_POST['cx']);
        //echo $k2."<br>";
        $k3 = abs($_POST['cy'] - $_POST['dy'])/abs($_POST['cx'] - $_POST['dx']);
        //echo $k3."<br>";
        $k4 = abs($_POST['dy'] - $_POST['ay'])/abs($_POST['dx'] - $_POST['ax']);
        //echo $k4."<br>";
        if ((($k1==$k3) && ($k2!=$k4)) ||  (($k1!=$k3) && ($k2==$k4))) {
    if ($_POST['why']){
         $S = 0.5 * (abs($_POST['ax']-$_POST['bx']) + abs($_POST['cx']-$_POST['dx']))*abs($_POST['ay'] - $_POST['dy']) ;
         echo "Площадь = " . $S;
    }
    else {
    $P = pow(pow($_POST['ax'] - $_POST['bx'],2) + pow($_POST['ay'] - $_POST['by'],2),0.5) + pow(pow($_POST['bx'] - $_POST['cx'],2) + pow($_POST['by'] - $_POST['cy'],2),0.5) + pow(pow($_POST['cx'] - $_POST['dx'],2) + pow($_POST['cy'] - $_POST['dy'],2),0.5) + pow(pow($_POST['ax'] - $_POST['dx'],2) + pow($_POST['ay'] - $_POST['dy'],2),0.5);
    echo "Периметр = ".$P;
    }
}
else echo "Фигура не трапеция";
}
    ?>
