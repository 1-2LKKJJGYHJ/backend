<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend tp1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
    echo "Hola Mundo";
    ?>
    <hr>
    
    <h1>Ejercicio 2</h1>
    <?php
    $saludo= "Hola Mundo";
    echo $saludo;
    ?>
   <hr>
    <h1>Ejercicio 3</h1>
    <?php
    $numero1=25;
    $numero2=5;
    echo $numero1 + $numero2; 
    echo $numero1 - $numero2;
    echo $numero1 * $numero2;
    echo $numero1 / $numero2;
    echo $numero1 % $numero2;
    ?>
   <hr>
    <h1>Ejercicio 4:celsius a farenheit</h1>
    <?php
    $celsius =20;
    $fa = 1.8;
    $num =32;
    echo $celsius * $fa + $num;
    ?>
   <hr>
    <h1>Ejercicio 5</h1>
    <?php
    $perimetro = 3.14 * 60;
    echo $perimetro;
    $altura = 12;
    $base =18;
    echo $base * $altura;
    ?>
  <hr>
    <h1> Ejercicio 5</h1>
    <?php
     
     const pi = 3.14;
     $radio =30;
    $perimetro1 = 2 * pi * $radio;
    echo $perimetro1;
    $area1 = pi * 60;

    echo $area1;
     ?>







</body>
</html>