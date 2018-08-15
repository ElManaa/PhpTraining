<?php 
 

function modulo ($m,$n)
{
    for ($i = 0 ; $i< $n ; $i++) {
        echo $i . " modulo " . $m . " = " . $i % $m  . "\n"; 
    }
}

modulo ($argv[1],$argv[2]);


?>