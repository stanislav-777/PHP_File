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
    <li class="breadcrumb-item"><a href="task-6-d.php">задача 6b</a></li>
    <li class="breadcrumb-item"><a href="#">задача 6c</a></li>
  </ol>
</nav>
<img src="img/blok6c.PNG" alt="pic">
    <div class="content">
        <form action="#" method="post">
        <fieldset>
        <legend>Task 6c</legend>
        Введите IP <input type="text" name="ip"></br>
        <input type="submit" name="my_btn" value="Перевести">
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
    if ($_POST["my_btn"]){ 
    $ip = $_POST['ip'];
    $strIp = (string) $ip;
        if (strpos($strIp,".")){
    $i1 = strpos($strIp,".");
    $i2 = strpos($strIp,".",$i1+1);
    $i3 = strpos($strIp,".",$i2+1);
    $Y4 = substr($strIp,0,$i1);
    $Y3 = substr($strIp,$i1+1,$i2-$i1-1);
    $Y2 = substr($strIp,$i2+1,$i3-$i2-1);
    $Y1 = substr($strIp,$i3+1);
    echo $Y4*pow(256,3) + $Y3*pow(256,2) + $Y2*pow(256,1) + $Y1*pow(256,0);
        }
        else{
    $X = $ip;
    echo "<br>".$X;
    $Y44 = $X % 256;
    $X -= $Y44;
    $Y33 = ($X / 256)%256;
    $X -= $Y33;
    $Y22 = ($X / pow(256,2))%256;
    $X -= $Y22;
    $Y11 = ($X / pow(256,3))%256;
    echo "<br>".$Y11.".".$Y22.".".$Y33.".".$Y44;
        }
    }
    ?>
