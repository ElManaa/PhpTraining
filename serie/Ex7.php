<?php
$nbrsteps = 0 ;

$etage = $argv[1];
$stepPerEtage = $argv[2];
$stepsTodo = $etage * $stepPerEtage ; 

while ($nbrsteps < $stepsTodo) 
{
    if (! ($nbrsteps % $stepPerEtage) )
    {
    echo 'Montrer Step ' . ++$nbrsteps . "\n";
    }else
    {
        ++$nbrsteps ;
    }
}



?>