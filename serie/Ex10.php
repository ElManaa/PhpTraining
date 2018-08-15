<?php 


function pyramide ($nb_l) 
{
    echo "PYRAMIDE 01 \n";
    $nb_c = (2*$nb_l ) -1 ;
    for ($num_l = 0 ; $num_l< $nb_l ; $num_l++) {
        $nb_espaces = $num_l ;
        $nb_x = $nb_c - ($nb_espaces * 2) ; 
        
        $nb_esp_affiche = 0 ; 
        while ( $nb_esp_affiche < $nb_espaces) {
            echo " ";
            $nb_esp_affiche++ ;
        }

        $nb_x_affiche = 0 ; 
        while ( $nb_x_affiche < $nb_x) {
            echo "X";
            $nb_x_affiche++ ;
        }
        $nb_esp_affiche = 0 ; 
        while ( $nb_esp_affiche < $nb_espaces) {
            echo " ";
            $nb_esp_affiche++ ;
        }
        echo "\n" ; 
        
    }
    echo "\n" ;  echo "\n" ;
}


function pyramide2 ($nb_l) 
{
    echo "PYRAMIDE 02 \n";
    $nb_c = (2 * $nb_l ) -1 ;
    for ($num_l = 0 ; $num_l< $nb_l ; $num_l++) {

        $nb_espaces = $nb_l - 1 - $num_l  ;
        $nb_x = $nb_c - ($nb_espaces * 2) ; 
        
        $nb_esp_affiche = 0 ; 

        while ( $nb_esp_affiche < $nb_espaces) {
            echo " ";
            $nb_esp_affiche++ ;
        }

        $nb_x_affiche = 0 ; 
        while ( $nb_x_affiche < $nb_x) {
            echo "X";
            $nb_x_affiche++ ;
        }


        $nb_esp_affiche = 0 ; 
        while ( $nb_esp_affiche < $nb_espaces) {
            echo " ";
            $nb_esp_affiche++ ;
        }
        echo "\n" ; 
        
    }
    echo "\n" ;  echo "\n" ;
}

pyramide($argv[1]) ;
pyramide2($argv[1]) ;
?>