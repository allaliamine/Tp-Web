<?php
$i = 1;
$fin = 1000;

while($i < $fin){

    $temp = $i;
    $number = 0; 

        while($temp > 0){
            $temp = $temp % 10;
            $number = $number + ($temp * $temp * $temp);
            $temp = (int) ($temp / 10);
        }
    
    if ($i == $number){
        echo "le nombre : ".$i." est un nombre d'armstrong <br>" ;
    }

    $i++;
}
?>