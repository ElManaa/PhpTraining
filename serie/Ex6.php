<?php
$nbrsteps = 0 ;

$etage = $argv[1];
$stepPerEtage = $argv[2];
$stepsTodo = $etage * $stepPerEtage ; 

while ($nbrsteps < $stepsTodo) 
{
    
    echo 'Step Number ' . ++$nbrsteps . "\n";
    
}



?>