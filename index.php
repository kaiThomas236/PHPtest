<?php
    $mode = "dark";
    $name = "Kai";
    $greeting = "Hello";
    $counter = 0;

    // data types
    $str = "test"; //string
    $num = 23; //number
    $dub = 23.54; //double/float
    $boo = true; //boolean
    $arr = array('a', 'b', 'c'); //array

    //objects
    define('DAYS_IN_YEAR', 365)
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick Intro to PHP</title>
  <!-- Fonts -->

  <!-- Bootstrap - CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- Bootstrap - JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- CSS stylesheet -->
  <link rel="stylesheet" href="main.css">
</head>


<body <?php if ($mode === "dark"): ?> class = "dark" <?php endif ?> >
    <h1>
        <?php 
            $greeting .= ", how are you";
            echo $greeting . " " . $name . "?";
        ?>
    </h1>
    <h3> 
        <?php 
            echo DAYS_IN_YEAR;
            echo nl2br("\n");
            $counter++;
            echo $counter;
        ?> 
    </h3>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="index.js" charset="utf-8"></script>
</body>
</html>