<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="192.18.16.204";
$num1=substr($ip,0,3);
$num2=substr($ip,4,2);
$num3=substr($ip,7,2);
$num4=substr($ip,10,3);

printf("IP %s en binario es: %b.%b.%b.%b",$ip,$num1,$num2,$num3,$num4);
?>
</BODY>
</HTML>
