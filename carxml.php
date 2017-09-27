<?php

require("connect.php");
setlocale(LC_TIME, "fr");
$sql="SELECT * from CARNET";
$document = new DOMDocument();
$res=$connexion->query($sql);
$lespersonnes =$document->createElement('lespersonnes');
$document -> appendChild($lespersonnes);

while ($personnedb = mysql_fetch_object($res)) {
  $personne = $document->createElement('personne');
  $document->appendChild($personne);
  $nom= $personne->createElement('nom');
  $personne->appendChild($nom);
  $text=$document->appendTextNode('nom',utf8_encode($personnedb->NOM));

}

 ?>
