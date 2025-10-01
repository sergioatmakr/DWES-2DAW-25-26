<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$matriz=array();

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <4 ; $j++) { 
        $matriz[$i][$j]=rand(0,10);
   }
} 
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($matriz as $fila) {
echo"<tr>";
    foreach ($fila as $valor ) {
        echo"<td>$valor</td>";
    }
echo "</tr>";
}
echo "</table>";

$tras=array();
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j <4 ; $j++) { 
        $tras[$j][$i]=$matriz[$i][$j];
   }
} 

echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($tras as $fila) {
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