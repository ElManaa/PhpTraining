<?php 
 function espaces ($nb_espaces) 
 {
     $nb_esp_affiche = 0 ; 
     
     while ($nb_esp_affiche < $nb_espaces)
     {
         echo " ";
         $nb_esp_affiche++ ;  
     }
 }

 $nb_l = 0 ;
 $nb_espaces = 0 ;
 $compteur = 1 ; 
 $indice = 0 ;
 $moitie = 0 ; 
 
 
 while ($nb_l < 10) {
     $nb_espaces = 9 - $nb_l;
     espaces($nb_espaces);
     $compteur = $nb_l + 1 ; 
     $moitie = $nb_l ; 

     $indice = 0 ; 
     while ($indice < $moitie) {
         echo $compteur % 10 ; 
         $compteur++;
         $indice++ ;
     }
     echo $compteur % 10 ; 

     $indice = 0 ; 
     while ($indice < $moitie) {
       
         $compteur--;
         echo $compteur % 10 ; 
         $indice++ ;
     }

     espaces ($nb_espaces);

     $nb_l++;
     echo "\n";

 }

?>