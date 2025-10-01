<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$pares=array();
$impares=array();

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
        $pares[$i][$j]=rand(0,10);
        $impares[$i][$j]=rand(0,10);
   }
} 
print_r($pares);
echo "<table border='1' cellpadding='5' cellspacing='0'>";

foreach ($pares as $fila) {
echo"<tr>";
    foreach ($fila as $valor ) {
        echo"<td>$valor</td>";
    }
echo "</tr>";
}
echo "</table>";
print_r($impares);
echo "<table border='1' cellpadding='5' cellspacing='0'>";

foreach ($impares as $fila) {
echo"<tr>";
    foreach ($fila as $valor ) {
        echo"<td>$valor</td>";
    }
echo "</tr>";
}
echo "</table>";
//A Sumar
$suma=array();
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
        $suma[$i][$j]=$pares[$i][$j]+$impares[$i][$j];
    }
} 
print_r($suma);
echo "<table border='1' cellpadding='5' cellspacing='0'>";

foreach ($suma as $fila) {
echo"<tr>";
    foreach ($fila as $valor ) {
        echo"<td>$valor</td>";
    }
echo "</tr>";
}
echo "</table>";

//B producto falta por terminar
$producto = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
];
$col=0;
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
        $producto[$i][$j]+=$pares[$i][$j]*$impares[$j][$i];
    }
} 
print_r($producto);
echo "<table border='1' cellpadding='5' cellspacing='0'>";

foreach ($producto as $fila) {
echo"<tr>";
    foreach ($fila as $valor ) {
        echo"<td>$valor</td>";
    }
echo "</tr>";
}
echo "</table>";
?>
</BODY>
</HTML>