<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$pares=[];
$incremento=1;

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
        $pares[$i][$j]=2*$incremento;
        $incremento++;
    }
}
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($pares as $fila) {
    echo "<tr>"; 
    foreach ($fila as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
</BODY>
</HTML>