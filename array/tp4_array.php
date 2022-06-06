<h1>Ejercicio 1</h1>

<?php
$numero = ["0","2", "4", "6","8","10"];
foreach ($numero as $x) {
    echo "<p>$x</p>";
}
?>
<br>
<h2>Ejercicio 2</h2>
<?
$datos = [ "Pedro", "Ana", "34", "1"];

print "<pre>\n";
print_r($datos);
print "</>p\n";
foreach ($datos as $valor) {
    print "<p>$valor</p>";

}
?>
<br>
<h2>Ejercicio 3</h2>
<?
$datos = [
    'Nombre' => "Pedro",
    'Apellido' => "Torres",
    'Direccion' => "Av. Mayor 3703",
    'Telefono' => 1122334455,

];
print "<pre>\n";
print_r($datos);
print "</pre>\n";
foreach ($datos as $valor) {
    print "<p>$valor</p>";

}
?>
<br>
<h2>Ejercicio 4</h2>
<?
$datos =[ "Madrid", "Barclona","Londres","New York","Los Angeles","Chicago"];
$i =0;
foreach ($datos as  $valor) {
    print "<div class=cuarto>La ciudad con l indice $i tiene el nombre $valor /n</div>";
    $i+=1;
}
?>
<br>
<h2>Ejercicio 5</h2>
<?
$datos =[ "MD", "BCL","LD","NY","LA","CCG"];
$i =0;
foreach ($datos as  $valor) {
    print "<div class=cuarto>La ciudad con l indice $i tiene el nombre $valor /n</div>";
    $i+=1;
}
?>



''