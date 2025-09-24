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
echo"<table border='1' >";
    for ($i=0; $i <count($pares) ; $i++) {
        echo "<tr>"; 
        for ($j=0; $j <count($pares) ; $j++) { 
            echo "<td>".$pares[$i][$j]."</td>";
        }
        echo "</tr>";
    }

    echo"</table>";

?>
</BODY>
</HTML>