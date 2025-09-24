<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php

$numeros=array();
for ($i=0; $i <20 ; $i++) { 
    $numeros[$i]=decbin($i);
}


echo"<table border='1' >";
echo"<th>Indice</th><th>Binario</th><th>Octal</th>";
    for ($i=0; $i <20 ; $i++) {
        echo "<tr>"; 
            echo "<td>".bindec($numeros[$i])."</td>";
            echo "<td>".$numeros[$i]."</td>";
            echo "<td>".decoct(bindec($numeros[$i]))."</td>";
        
        echo "</tr>";
    }

    echo"</table>";

?>
</BODY>
</HTML>