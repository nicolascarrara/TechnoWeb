<?php

/**
 *
 */
class PersonnesManager
{

  function __construct(argument)
  {

  }

  public function getList(){
    $personnes= [];
    $q = $this->_db->query('SELECT ID, NOM, PRENOM,VILLE,NAISSANCE');

  while($donnees=$q->fetch(PDO::FETCH_ASSOC)){
    $personnes[]=new Personnes($donnees);
  }
  return $personnes;
}
  public function update($personne){
    $q = $this->getMysqlConnexion()->prepare('UPDATE UPDATE CARNET SET NOM=:nom, PRENOM=:prenom, NAISSANCE=:naissance, VILLE=:ville WHERE ID=:id ')
    $stat->bindParam(':nom', $personne->getNom());
    $stat->bindParam(':prenom', $personne->getPrenom());
    $stat->bindParam(':naissance', $personne->getNaissance());
    $stat->bindParam(':ville', $personne->getVille());
    $stat->bindParam(':id', $personne->getId());
    $stat->execute();
  }
}

 ?>
