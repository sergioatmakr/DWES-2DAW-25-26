<HTML>
<HEAD><TITLE> EJ3B – Conversor Decimal a base 16</TITLE></HEAD>
<BODY>
<?php
$num="222";
$base="16";

echo"Número $num en base $base = ".decimalHexa($num,$base) ; 

function decimalHexa($num,$base){
    $conver="";
    while($num>$base)
    {
        if(($num%$base)>=10)
            $conver.= letra($num%$base);
        else
        $conver.=$num%$base;

        $num=intdiv($num,$base);
    }
    if($num>=10)
        $conver.= letra($num);
    else
    $conver.=$num;//agregar ultimo bit

    $conver = strrev($conver); // invertir para tener el binario correcto

    return $conver;
}

function letra($resto){
    if($resto==10)
        return "A";
    if($resto==11)
        return "B";
    if($resto==12)
        return "C";
    if($resto==13)
        return "D";
    if($resto==14)
        return "E";
    if($resto==15)
        return "D";
}
?>
</BODY>
</HTML>
