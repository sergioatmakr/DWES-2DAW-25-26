<HTML>
<HEAD><TITLE> EJ2-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="192.18.16.204";
$num1=decbin(substr($ip,0,3));
$num2=decbin(substr($ip,4,2));
$num3=decbin(substr($ip,7,2));
$num4=decbin(substr($ip,10,3));

echo "IP $ip en binario es:".$num1.".".$num2.".".$num3.".".$num4;
?>
</BODY>
</HTML>