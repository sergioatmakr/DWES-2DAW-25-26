<HTML>
<HEAD><TITLE> EJ6B – Factorial</TITLE></HEAD>
<BODY>
<?php
$num="5";
$resultado=1;

for ($i=1; $i <$num+1 ; $i++) { 
    $resultado*=$i;
}

echo $num."!= ".$resultado;

?>
</BODY>
</HTML>