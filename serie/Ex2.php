<?php 

$total = 0 ; 

 
for ( $i = 1 ; $i < $argc ; $i++ )
    $total += $argv[$i]; 

    echo "Total " . $total . "\n" ;
    if ($argc - 1 != 0) {

        $moy = $total / ($argc - 1) ;
        
        echo "moyenne : $moy "  ;
    } else {

        echo "Division impossible sur 0 " ;
    }


?>