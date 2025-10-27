<?php
function generarCartas(){
    $cartas=array();
    for ($i=1; $i < 11 ; $i++) { 
        for ($j=1; $j <5 ; $j++) { 
            if($j==1)
                array_push($cartas,$i."C");
            elseif($j==2)
                array_push($cartas,$i."D");
            elseif($j==3)
                array_push($cartas,$i."P");
            else
                array_push($cartas,$i."T");
        }
    }
     return $cartas;
}

function hacerJuego($numCartas,&$jugadores){
    $cartas=generarCartas();
    foreach ($jugadores as &$jugador ) {
        for ($i=0; $i < $numCartas; $i++) { 
            shuffle($cartas);
            $jugador["cartas"][]=array_shift($cartas);
        }
    } 
}

function calcularResultado($numCartas,&$jugadores){

    foreach ($jugadores as &$jugador ) {
        $jugador["resultado"]=0;
        for ($i=0; $i < $numCartas; $i++) {
            $valor=intval($jugador["cartas"][$i]) ;
            switch ($valor) {
                case 8:
                case 9:
                case 10:
                    $jugador["resultado"]+=0.5;
                    break;
                
                default:
                    $jugador["resultado"]+=$valor;
                    break;
            }
        }
    } 

}

function repartirPremio(&$jugadores){
    $mayorResultado=0;
    $numJug=-1;
    $ganadores=array();
    
    for ($i=0; $i < 4; $i++) {
        if($jugadores[$i]["resultado"]<=7.5 && $jugadores[$i]["resultado"] == $mayorResultado)
            array_push($ganadores,$i);
        elseif($jugadores[$i]["resultado"]<=7.5 && $jugadores[$i]["resultado"] > $mayorResultado)
        {
            $ganadores=[];
            array_push($ganadores,$i);
            $mayorResultado=$jugadores[$i]["resultado"];
        }
    }

    if(!empty($ganadores))
    {
        for ($i=0; $i <count($ganadores) ; $i++) { 
            $jugadores[$ganadores[$i]]["ganador"]=true;
        }
    }

}

?>

