<?php 

class Animal {
  var $nom ; 
  var $type ; 

  function __construct ($nom , $type) 
  {
  $this->nom = $nom ; 
  $this->type = $type ;
  }

  function info ()
  {
  echo "Nom animal :" . $this->nom . " Type Animal :" . $this->type ;
  }
}


  $chien = new Animal ("Chien","domestique");
  $chien->info();


?>