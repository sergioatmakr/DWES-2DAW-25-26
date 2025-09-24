<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php

$clases1=["Bases Datos", "Entornos Desarrollo", "Programación"];
$clases2=["Sistemas Informáticos","FOL","Mecanizado"];
$clases3=["Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés"];

$ej1=array();
//EJ 1
$ej1=$clases1;
for ($i=count($clases1); $i <count($clases2)+count($clases1) ; $i++) { 
    $ej1[$i]=$clases2[$i-count($clases1)];
}

for ($i=count($clases1)+count($clases2); $i <count($clases3)+count($clases2)+count($clases1) ; $i++) { 
    $ej1[$i]=$clases3[$i-count($clases1)-count($clases2)];
}


// Buscar el índice del valor "banana"
$clave = array_search("Mecanizado", $ej1);

if ($clave !== false) {
    unset($ej1[$clave]);
}

$inver1=array_reverse($ej1);
echo"EJ1<br>";
print_r($inver1);

echo"<br><br><br>";
//ej2

$ej2=array();

$ej2=array_merge($clases1,$clases2,$clases3);

$clave = array_search("Mecanizado", $ej2);

if ($clave !== false) {
    unset($ej2[$clave]);
}

$inver2=array_reverse($ej2);
echo"EJ2<br>";
print_r($inver2);




echo"<br><br><br>";

//ej3

$ej3=array();
//multidimensional
array_push($ej3,$clases1,$clases2,$clases3);
$clave = array_search("Mecanizado", $ej3);

if ($clave !== false) {
    unset($ej3[$clave]);
}

$inver3=array_reverse($ej3);
echo"EJ3<br>";
print_r($inver3);
echo"<br>";

//unidimensional ej3 con push

$ej3Uni=array();
$tamanio3=count($clases3)+count($clases2)+count($clases1);

for ($i=0; $i <$tamanio3 ; $i++) { 
    if($i<count($clases1))
        array_push($ej3Uni,$clases1[$i]);
    elseif($i<$tamanio3-count($clases3))
        array_push($ej3Uni,$clases2[$i-count($clases1)]);
    else
        array_push($ej3Uni,$clases3[$i-count($clases1)-count($clases2)]);
}

$clave = array_search("Mecanizado", $ej3Uni);

if ($clave !== false) {
    unset($ej3Uni[$clave]);
}

$inver3Uni=array_reverse($ej3Uni);
echo"EJ3UNI<br>";

print_r($inver3Uni);

?>
</BODY>
</HTML>