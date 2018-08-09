<?php  

$x = $argv[1] ; 
$y = $argv[2] ; 

 
echo "X : $x et Y : $y </br>"; 

    $u = $x ;
    $x = $y ;
    $y = $u ;

echo "X : $x et Y : $y </br>"; 


?>