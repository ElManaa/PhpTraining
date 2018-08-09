<?php 

if ($argv[2] == 0 ) {
    echo "division Impossible Sur 0 " ;
} else {
    $rslt = $argv[1] / $argv[2];
    echo "Resultat Egale a ".$rslt ;
}
?>