<?php

$number = rand(100,999);
$attemps = 0;
while(1){
    $temp = rand(100,999);

    if($temp == $number){
        break;
    }
    $attemps++;
}

echo "le nombre est: ". $number;
echo "<br>";
echo " nombre d'essai : ". $attemps;

?>