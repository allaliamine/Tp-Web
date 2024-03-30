<?php

$number = rand(100,999);

for ($attemps = 1; $attemps>=1 ; $attemps++){
    $temp = rand(100,999);

    if($temp == $number){
        break;
    }
}

echo "le nombre est: ". $number;
echo "<br>";
echo " nombre d'essai : ". $attemps;

?>