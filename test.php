<?php
require('personne.php');
$donnees= array('id' => 1,
                'nom'=>'Pierre',
                'prenom'=>'Dupond',
                'ville'=>'Orleans',
                'naissance'=>'1992-08-12');
$P1=new Personne($donnees);
echo $P1->sepresenter();
 ?>
