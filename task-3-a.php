<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>task-3 #1</title>
  </head>
  <body>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="task.php">задача 1</a></li>
    <li class="breadcrumb-item"><a href="task-2.php">задача 2</a></li>
    <li class="breadcrumb-item"><a href="#">задача 3</a></li>
    <li class="breadcrumb-item"><a href="task-4-a.php">задача 4</a></li>
    <li class="breadcrumb-item"><a href="task-5-a.php">задача 5</a></li>
    <li class="breadcrumb-item"><a href="task-6-a.php">задача 6</a></li>
  
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="task-3.php">задача 3a</a></li>
    <li class="breadcrumb-item"><a href="#">задача 3b</a></li>
  </ol>
</nav>
<img src="img/blok3b.PNG" alt="pic">

<div class="content">
        <form action="#" method="post">
        <fieldset>
        <legend>Task 3b</legend>
        Введите коэфециент перед а <input type="text" name="first" class="mb-3"></br>
        Введите коэфециент перед b <input type="text" name="second" class="mb-3"></br>
        Введите x <input type="text" name="iks" class="mb-3"></br>
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
    $S = pow(($_POST['first']*$_POST['iks'] + $_POST['second']*$_POST['iks']),2);
        echo "</hr> S = (a+b)^2  = ".$S;
    ?>
