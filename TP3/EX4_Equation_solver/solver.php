<?php

if( isset($_GET['submit']) ){

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$tableau = [];

if ($a == 0) {
    if ($b != 0) {
        $x1 = -$c / $b;
        $tableau[] = $x1;
    } elseif ($c == 0) {
        $tableau[] = "l'equation a une infinité de solutions";
    } else {
        $tableau[] = "l'équation n'a pas de solution dans R";
    }
}

else{
    $delta = pow($b,2) - (4*$a*$c);

    if($delta < 0){
        $tableau[] = "l'equation n'a pas de solution dans R";
    }

    elseif($delta == 0){
        $x1 = -$b/(2*$a);
        $tableau[] = $x1;
    }

    else{
        $x1 = ( -$b - sqrt($delta) )/(2*$a);
        $x2 = ( -$b + sqrt($delta) )/(2*$a);

        $tableau[] = $x1;
        $tableau[] = $x2;
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>solveur des equations 2eme degree</title>
</head>
<body>

    <div class="container">
        <div class="table"> 

            <div class="insider">

                <div class="titre"> 
                    <h2>solution de votre equation :</h2>
                    <div class="form_equation">
                        <h4>votre equation est : </h4>
                        <h4>
                            <?php 
                            if($b >= 0 && $c>= 0 ){
                                echo $a."x^2 +".$b."x +".$c." = 0"; 
                            }

                            elseif($b < 0 && $c < 0){
                                echo $a."x^2  ".$b."x  ".$c." = 0"; 
                            }

                            elseif($c < 0){
                                echo $a."x^2 + ".$b."x  ".$c." = 0"; 
                            }
                            elseif($b < 0){
                                echo $a."x^2  ".$b."x + ".$c." = 0"; 
                            }
                            ?>
                        </h4>
                    </div>

                    <div>

                        <?php   
                        
                        if(count($tableau) == 2){

                            echo "<h3>la premier solution : </h3>";
                            echo " <h4> X1 = $tableau[0]</h4>";

                            echo "<h3>la deuxieme solution : </h3>";
                            echo " <h4> X1 = $tableau[1]</h4>";
                        }

                        elseif(gettype($tableau[0]) == "string" ){

                            echo "<h3>$tableau[0]</h3>";
                        }

                        else{

                            echo "<h3>on a une seule solution : </h3>";
                            echo " <h4> X1 = $tableau[0] </h4>";

                        }

                        ?>

                    </div>


                </div>

                <div>

                </div>


            </div>

        </div>

    </div>
    
</body>
</html>