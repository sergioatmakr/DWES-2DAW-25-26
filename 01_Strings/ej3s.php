<HTML>
<HEAD><TITLE> EJ3-Direccion Red – Broadcast y Rango</TITLE></HEAD>
<BODY>
<?php
/*red se completa con 0 y brodcast con 1*/
$ip="192.168.16.100/16";
$mascara=explode("/",$ip);//el valor de la mascara es el 1 en el array
$numerosIPdec=explode(".",$mascara[0]);
//echo $mascara[1];
//print_r($numerosIPdec);
$numerosIPbin=array();
for ($i=0; $i <count($numerosIPdec) ; $i++) { 
    $numerosIPbin[$i] = str_pad(decbin($numerosIPdec[$i]),8,"0",STR_PAD_LEFT);
}
//print_r($numerosIPbin);

//Falta por terminar


echo "IP $ip<br>";
echo "Mascara $mascara[1] <br>";
echo "Direccion de red"
?>
</BODY>
</HTML>