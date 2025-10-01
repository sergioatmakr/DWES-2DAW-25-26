<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$pares=[];

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
        $pares[$i][$j]=rand(0,50);
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

//maximo cada fila
$mayores=array();
$mayorF=0;
$incremento=0;
foreach ($pares as $fila) {
    foreach ($fila as $valor) {
        if ($mayorF<$valor) {
            $mayorF=$valor;
        }
    }
    $mayores[$incremento]=$mayorF;
    $incremento++;
    $mayorF=0;
}
print_r($mayores);
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($mayores as $fila => $value) {
    echo "<tr>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo"</table>";

//Promedio fila
$mayores=[0,0,0];
$incremento=0;
foreach ($pares as $fila) {
    foreach ($fila as $valor) {
        $mayores[$incremento]+=$valor;
    }
    $mayores[$incremento]/=3;
    $incremento++;
}
print_r($mayores);
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($mayores as $fila => $value) {
    echo "<tr>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo"</table>";


?>
</BODY>
</HTML>