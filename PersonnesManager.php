<?php

/**
 *
 */
class PersonnesManager
{

  function __construct(argument)
  {
    # code...
  }

  public function getList(){
    $personnes= [];
    $q = $this->_db->query('SELECT ID, NOM, PRENOM,VILLE,NAISSANCE');
  }
  while($donnees=$q->fetch(PDO::FETCH_ASSOC)){
    $personnes[]=new Personnes($donnees);
  }
  return $personnes;
}


 ?>
