<?php 

$total = 0 ; 

for ( $i = 1 ; $i < $argc ; $i++ )
    $total += $argv[$i]; 

$moy = $total / ($argc - 1) ;

echo "moyenne : $moy "  ;
?>