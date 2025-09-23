<HTML>
<HEAD><TITLE> EJ2B – Conversor Decimal a base n </TITLE></HEAD>
<BODY>
<?php
$num="48";
$base="8";

echo "El número $num en base $base es igual a ".decimalBase1_9($num,$base);

function decimalBase1_9($num,$base){
    $conver="";
    while($num>$base)
    {
        $conver.=$num%$base;
        $num=intdiv($num,$base);
    }
    $conver.=$num;//agregar ultimo bit
    $conver = strrev($conver); // invertir para tener el binario correcto

    return $conver;
}

?>
</BODY>
</HTML>