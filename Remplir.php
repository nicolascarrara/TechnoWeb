<?php

trait Remplir{
  public function remplir(array $donnees){
    foreach ($donnees as $key => $value) {

      $method='set'.ucfirst(strtolower($key));
      if(is_callable([$this,$method])){
        $this->$method($value);
      }
    }
  }
}
?>
