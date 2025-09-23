<HTML>
<HEAD><TITLE> EJ4B – Tabla Multiplicar</TITLE></HEAD>
<BODY>
<?php
$num="8";

tabla($num);

function tabla($num){
    for ($i=0; $i <11 ; $i++) { 
        echo"$num x $i = ".($num*$i)."<br>";
    }
}
?>
</BODY>
</HTML>