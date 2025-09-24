<HTML>
<HEAD><TITLE></TITLE></HEAD>
<BODY>
<?php

$ej7=["UWU"=>6, "Fernandito Malasmaneras"=>7, "Sergey"=>8,"Mariano"=>9,"Perico"=>10];

//a
echo"A<br>";
echo array_search(max($ej7), $ej7).":".max($ej7)."<br>";
//b
echo"B<br>";
echo array_search(min($ej7), $ej7).":".min($ej7)."<br>";
//c
echo "C<br>";
$media=0;
foreach ($ej7 as $key => $value) {
    $media+=$value;
}

echo"La media de notas es ".($media/count($ej7));
?>
</BODY>
</HTML>