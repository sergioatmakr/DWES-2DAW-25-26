<?php
include("fmedia7.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1=$_POST["nombre1"];
    $n2=$_POST["nombre2"];
    $n3=$_POST["nombre3"];
    $n4=$_POST["nombre4"];
    $numCartas=$_POST["numcartas"];
    $apuesta=$_POST["apuesta"];

    $juego=array($n1=>array(),$n2=>array(),$n3=>array(),$n4=>array());

    hacerJuego($numCartas,$juego);

    print "<pre>";
    print_r($juego);
    print "</pre>";

    calcularResultado($numCartas,$juego);

    print "<pre>";
    print_r($juego);
    print "</pre>";

    repartirPremio($juego);

    print "<pre>";
    print_r($juego);
    print "</pre>";

}
$cartas=generarCartas();

print "<pre>";
print_r($cartas);
print "</pre>";
?>