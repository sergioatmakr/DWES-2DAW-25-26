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
$par=0;
$impar=0;
$contPar=0;
$contImpar=0;
echo"<table border='1' >";
echo"<th>Indice</th><th>Valor</th><th>Suma</th><th>Media</th>";
    for ($i=0; $i <count($impares) ; $i++) {
        $suma+=$impares[$i];
        echo "<tr>"; 
            echo "<td>".$i."</td>";
            echo "<td>".$impares[$i]."</td>";
            echo "<td>".$suma."</td>";
            if($i%2==0){
                $par+=$impares[$i];
                $contPar++;
                if($i===0)
                    echo "<td>".$par."</td>";
                else
                    echo "<td>".($par/$contPar)."</td>";
            }
            else{
                $contImpar++;
                $impar+=$impares[$i];
                echo "<td>".($impar/$contImpar)."</td>";
            }
        
        echo "</tr>";
    }

    echo"</table>";
?>

</BODY>

</HTML>
