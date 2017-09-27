<?php
if(isset($_POST)) {
if (!empty(htmlspecialchars(trim($_POST['nom'])))&&!empty(htmlspecialchars(trim($_POST['prenom'])))){
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];

    if (!empty(htmlspecialchars(trim($_POST['sexe'])))){
      if($_POST['sexe']=='f'){
        $sexe='Femme';
      }else if($_POST['sexe']='h'){
        $sexe='Homme';
      }else{
        $sexe='Non renseigné';
      }
    }
  }
  if (isset($_POST['lang'])){
    $i=0;
    $lang='';
    foreach ($_POST['lang'] as $l) {
      $i++;
       switch ($l) {
         case 'fr':
           $lang=$lang."français";
           break;
         case 'en':
           $lang=$lang."anglais";
           break;
         case 'it':
           $lang=$lang."italien";
           break;
         case 'de':
           $lang=$lang."allemand";
           break;
         case 'es':
           $lang=$lang."espagnol";
           break;
           default:

           break;
       }
       if ($i==sizeof($_POST['lang'])) {
         $lang=$lang.'.';
       }else{
       $lang=$lang.', ';
     }
    }
  }
}

?>
