<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_back</title>
</head>
<body>
    <h1>Trabajo 2</h1>
    <h2>Ejercicio 1</h2>

    <?php
      
     $n = 10;
     if ($n>=0){
         echo "  La variable $n es un numro positivo";

     } else {
         " La variable $n es un numero negativo ";
     }
 ?>
 <hr>
 <h2> Ejercicio 2</h2>
    <?php
    $n = 6;
   if ($n>1 and $n<10){
       echo " La variable $n es mayor que 1 ";
   } else {
      echo  "La variable $n es un numero menor que 10  ";
   }
    ?>
    <hr>
    <h2> Ejercicio 3</h2>

    <?php
        $n =1;
        if ( $n >10 and $n <2) {
            echo "  La variable $n es mayor que 10 ";
        } else {
            echo " La variable $n es menor que 2";
        }
    ?>
    <hr>
    <h2> Ejercicio 4</h2>
    <?php
    $numero1=10;
    $numero2= 20;

    if ($numero1 > $numero2){
        echo $numero1 + $numero2; echo "<br>";
        echo $numero1 - $numero2;  echo "<br>";
    } elseif ($numero1 < $numero2){
        echo $numero1 * $numero2;  echo "<br>";
        echo $numero1 / $numero2; echo "<br>";
        echo $numero1 % $numero2; echo "<br>";
    }  else {
        echo "los numeros son igual";
    }
    ?>



</body>
</html>