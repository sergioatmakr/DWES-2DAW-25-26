<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$pares=[];
$incremento=1;

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <5 ; $j++) { 
        $pares[$i][$j]=rand(0,50);
        $incremento++;
    }
}
print_r($pares);
//imprimir por filas
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($pares as $fila) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo"</table>";

//imprimir por columnas
$filas = count($pares);
$columnas = count($pares[0]); 

echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Recorremos columnas
for ($c = 0; $c < $columnas; $c++) {
    echo "<tr>";
    // En cada columna, recorremos todas las filas
    for ($f = 0; $f < $filas; $f++) {
        echo "<td>" . $pares[$f][$c] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</BODY>
</HTML>