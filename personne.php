<?php
require('Remplir.php');
/**
 *
 */
class Personne
{
  use Remplir;

  private $id;
  private $nom;
  private $prenom;
  private $ville;
  private $naissance;

  function __construct($donnees)
  {
    $this->Remplir($donnees);
  }

  public function setId($id){
    if(is_string($id)){
      trigger_error('L\'id doit etre numérique',E_USER_WARNING);
    }else{
      $this->id=$id;
    }
  }
  public function setNom($nom){
    if (!is_string($nom)) {
      trigger_error('Le nom d\'une personne doit etre composé de mot',E_USER_WARNING);
      return;
    }else{
      $this->nom=$nom;
    }
  }
  public function setPrenom($prenom){
    if (!is_string($prenom)) {
      trigger_error('Le prenom d\'une personne doit etre composé de mot',E_USER_WARNING);
      return;
    }else{
      $this->prenom=$prenom;
    }
  }

  public function setVille($ville){
    if (!is_string($ville)) {
      trigger_error('La ville d\'une personne doit etre composé de mot',E_USER_WARNING);
      return;
    }else{
      $this->ville=$ville;
    }
  }

  public function setNaissance($naissance){
    $format='Y-m-d';
    $Datetime=Datetime::createFromFormat($format,$naissance);
    if ($Datetime&&$naissance==$Datetime->format($format)) {
      $this->naissance=$Datetime;
    }else{
      trigger_error("La date de naissance n'est pas correcte",E_USER_WARNING);
    }
  }

  public function sepresenter(){
    return 'Prenom = '.$this->prenom;
  }
}?>
