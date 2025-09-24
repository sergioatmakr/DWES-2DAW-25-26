<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php
$impares=array();
$incremento=1;
while(count($impares)!=20){
    if($incremento%2===1)
        $impares[]=$incremento;
    $incremento++;
}

$suma=0;
echo"<table border='1' >";
echo"<th>Indice</th><th>Valor</th><th>Suma</th>";
    for ($i=0; $i <count($impares) ; $i++) {
        $suma+=$impares[$i];
        echo "<tr>"; 
            echo "<td>".$i."</td>";
            echo "<td>".$impares[$i]."</td>";
            echo "<td>".$suma."</td>";
        
        echo "</tr>";
    }

    echo"</table>";

?>
</BODY>
</HTML>