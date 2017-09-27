<?php
require('personne.php');
$donnees['id']=1;

$donnees['nom']='Pierre';
$donnees['prenom']='Dupond';
                $donnees['ville']='Orleans';
                $donnees['naissance']='1992-08-12';
$P1=new Personne($donnees);
echo $P1->sepresenter();

 ?>
