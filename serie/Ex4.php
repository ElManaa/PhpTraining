<?php 

function maximum($a,$b)
{
    if ($a>$b) {
        return $a ;
    } else {
        return $b ; 
    }
}


$maximum = maximum($argv[1], $argv[2]); 

echo "Le Maximum est ". $maximum  ; 

?>