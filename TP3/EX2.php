<?php

while(1){

    $tirage = rand(0,100);
    $tableau[] = $tirage;
    $fin = count($tableau);

    if (count($tableau)>=3){

        $pair1 = $tableau[ $fin - 3 ];
        $pair2 = $tableau[ $fin - 2 ];
        $impair = $tableau[ $fin - 1];

        if( ($pair1 % 2 == 0) && ($pair2 % 2 == 0) && ($impair % 2 != 0) ){
            echo "les nombres de tirage sont :".$pair1.", ". $pair2.", ". $impair;
            break;
        }
    }
}

?>
