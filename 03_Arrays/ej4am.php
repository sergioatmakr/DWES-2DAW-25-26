<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$pares=[];

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <5 ; $j++) { 
        $pares[$i][$j]=rand(0,50);
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

$mayor=0;

foreach ($pares as $fila) {
    
    foreach ($fila as $valor) {
        if($mayor<$valor)
            $mayor=$valor;
    }
}
echo "<p>El número mayor es $mayor";

?>
</BODY>
</HTML>