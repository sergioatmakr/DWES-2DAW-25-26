<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
$num="168";

echo "El numero $num en binario es ".decimalBinario($num);
function decimalBinario($num){
    $bin="";
    while($num!=1&&$num!=0)
    {
        $bin.=$num%2;
        $num=intdiv($num,2);
    }
    $bin.=$num;//agregar ultimo bit
    $bin = strrev($bin); // invertir para tener el binario correcto

    return $bin;
}
?>
</BODY>
</HTML>