<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php

$ej7=["UWU"=>22, "Fernandito Malasmaneras"=>22, "Sergey"=>21,"Mariano"=>21,"Perico"=>35];

//a
foreach ($ej7 as $clave => $valor) {
    echo "$clave: $valor<br>";
}

//b
next($ej7);

echo key($ej7).":".current(($ej7))."<br>";

//c
next($ej7);

echo key($ej7).":".current(($ej7))."<br>";
//d
end($ej7);

echo key($ej7).":".current(($ej7))."<br>";
//e
echo"E<br>";
arsort($ej7);

foreach ($ej7 as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>
</BODY>
</HTML>