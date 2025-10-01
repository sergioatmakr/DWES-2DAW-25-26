<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$pares=[];

for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j <10 ; $j++) { 
        $pares[$i][$j]=rand(0,10);
   }
} 

print_r($pares);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($pares as $fila) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo"</table>";

//A
echo "<p>A</p>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
foreach ($pares as $fila) {
echo "<td>".max($fila)."</td>";
}
echo "</tr>";
echo"</table>";
//B
echo "<p>B</p>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
foreach ($pares as $fila) {
echo "<td>".min($fila)."</td>";
}
echo "</tr>";
echo"</table>";

//C
echo "<p>C</p>";
//imprimir por columnas
$filas = count($pares);
$columnas = count($pares[0]); 
$mayor=0;
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
// Recorremos columnas
for ($c = 0; $c < $columnas; $c++) {
    
    // En cada columna, recorremos todas las filas
    for ($f = 0; $f < $filas; $f++) {
        if ($mayor<$pares[$f][$c]) {
            $mayor=$pares[$f][$c];
        }
    }
    echo "<td>" . $mayor . "</td>";
    $mayor=0;
}
echo "</tr>";
echo "</table>";

//D
echo "<p>D</p>";
$min=10;
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
// Recorremos columnas
for ($c = 0; $c < $columnas; $c++) {

    // En cada columna, recorremos todas las filas
    for ($f = 0; $f < $filas; $f++) {
        if ($min>$pares[$f][$c]) {
            $min=$pares[$f][$c];
        }
    }
    echo "<td>" . $min . "</td>";
    
    $min=10;
}
echo "</tr>";
echo "</table>";

//E
$mediaAsig=0;
echo "<p>E</p>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo"<tr>";
foreach ($pares as $fila) {
    foreach ($fila as $valor ) {
        $mediaAsig+=$valor;
    }
echo "<td>".($mediaAsig/$columnas)."</td>";

$mediaAsig=0;
}
echo "</tr>";
echo "</table>";
//F
echo "<p>F</p>";
$filas = count($pares);
$columnas = count($pares[0]); 
$mediaAlum=0;
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
// Recorremos columnas
for ($c = 0; $c < $columnas; $c++) {
    
    // En cada columna, recorremos todas las filas
    for ($f = 0; $f < $filas; $f++) {
       $mediaAlum+=$pares[$f][$c];
    }
    echo "<td>" . ($mediaAlum/$filas) . "</td>";
    $mediaAlum=0;
}
echo "</tr>";
echo "</table>";
?>
</BODY>
</HTML>