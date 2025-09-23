<HTML>
<HEAD><TITLE> EJ5B – Tabla multiplicar con TD</TITLE></HEAD>
<BODY>
<?php
$num="8";

tabla($num);

function tabla($num){
    echo"<table border='1' >";

    for ($i=0; $i <11 ; $i++) { 
        echo"<tr><td>";
        echo"$num x $i = ";
        echo"</td><td>";
        echo ($num*$i)."</td>";
        echo "</tr>";
    }

    echo"</table>";
}

?>
</BODY>
</HTML>
