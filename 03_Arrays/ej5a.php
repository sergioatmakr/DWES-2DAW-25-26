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
echo"EJ1<br>";
print_r($ej1);

echo"<br><br><br>";
//ej2

$ej2=array();

$ej2=array_merge($clases1,$clases2,$clases3);

echo"EJ2<br>";

print_r($ej2);

echo"<br><br><br>";
//ej3

$ej3=array();

array_push($ej3,$clases1,$clases2,$clases3);

echo"EJ3<br>";

print_r($ej3);
echo"<br><br>";


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

echo"EJ3UNI<br>";
print_r($ej3Uni);

?>
</BODY>
</HTML>