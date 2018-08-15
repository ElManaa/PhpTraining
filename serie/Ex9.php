<?php

function fact($n)
{
    
    if ($n == 0 ) {
        return 1;
    } else {
        return $n*fact($n-1);
    }
}


function pascal($n)
{
    for ($l = 0 ; $l < $n ;  $l++) {

        for ($c=0 ;$c<$l;$c++) {

            $nbr = fact($l) / (fact($c) * fact($l - $c));
            echo ($nbr);
        }
        echo("\n");
    }
}

pascal($argv[1]);

?>