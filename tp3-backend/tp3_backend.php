<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3_backend</title>
</head>
<body>
    <h1>Mostrar los num. del 1 al 100.</h1>
    <?php
    $i = 1;
    while ($i < 100) {
      echo "$i";
      $i++;
    }

    ?>

    <hr>

    <h2>Mostrar  los num. del 100 al 1.</h2>
    
    <?php
    $i = 100;
    while ($i >0) {
      echo "$i";
      $i--;
    }
    ?>
    <hr>

    <h2>Mostrar los num. pares del 1 al 100.</h2>

    <?php
     for ($i =2 ;$i <= 100;$i++)
         if ($i %2 ==0 ) {
             echo $i;
         }
    ?>
    <hr>

    <h2>Mostrar los num. impares del 1 al 100.</h2>

    <?php

    for ( $i =1 ; $i <=100 ; $i++){
        if ( $i % 2 !=0)
        echo $i;
    }
    ?>

    <hr>

    <h2>Mostrar la suma de los num. del 1 al 20.</h2>

    <?php

     $n =0;
    for ($i =1 ;$i <=20; $i++){
        $n += $i;
    }
    echo $n;
    ?>

    <hr>

    <h2>Mostrar la suma de num. pars del 1 al 20.</h2>

    <?php

    $n =0;
    for ( $i = 2; $i <= 20 ; $i++){
        if ($i % 2 == 0){
            $n= $n + $i;
        }

    }
    echo $n;

    ?>

</body>
</html>