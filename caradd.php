<html>
<head>
<title>
Ajout de personne
</title>
<meta charset="utf-8">
</head>
<body>
<h1>
Ajout de données dans la table CARNET avec PDO
</h1>
<form class="" action="#" method="post">

<input type="text" name="nom" value="" placeholder="Nom">
<input type="text" name="prenom" value="" placeholder="Prenom">
<input type="text" name="ville" value="" placeholder="Ville">
<input type="date" name="naiss" value="" placeholder="AAAA-MM-JJ">
<input type="submit" value="Envoyer">
</form>
<?php
$xml=new XMLwriter();
$xml->openURI('test.xml');
$xml->startElement('toto');
$xml->writeElement('url','http//toto.com');
$xml->endElement();
$xml->flush();
if (isset($_POST)) {
require("connect.php");
if (isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['ville'])&&isset($_POST['naiss'])) {
  $req=$connexion->prepare('SELECT * FROM CARNET WHERE NOM=:nom AND PRENOM=:prenom AND NAISSANCE=:naissance AND VILLE=:ville');
  $req->execute(array(':nom' => htmlspecialchars($_POST['nom']),
                      ':prenom' =>htmlspecialchars( $_POST['prenom']),
                      ':ville'=> htmlspecialchars($_POST['ville']),
                      ':naissance'=>htmlspecialchars($_POST['naiss'])));
  $res=$req->fetch(PDO::FETCH_ASSOC);
  if($res['NOM']!=$_POST['nom']||$res['PRENOM']!=$_POST['prenom']||$res['VILLE']!=$_POST['ville']||$res['NAISSANCE']!=$_POST['naiss']){
  $req=$connexion->prepare('INSERT INTO CARNET (NOM,PRENOM,VILLE,NAISSANCE) VAlUES (:nom,:prenom,:ville,:naissance)');
  $req->execute(array(':nom' => htmlspecialchars($_POST['nom']),
                      ':prenom' => htmlspecialchars($_POST['prenom']),
                      ':ville'=>htmlspecialchars($_POST['ville']),
                      ':naissance'=>htmlspecialchars($_POST['naiss'])));
                    }
                  }
                }

?>
</body>
</html>
