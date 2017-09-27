<html>
<head>
<title>
Tableau PDO
</title>
<meta charset="utf-8">
</head>
<body>

<?php
require("connect.php");
setlocale(LC_TIME, "fr");
$sql="SELECT * from CARNET";
  if (isset($_GET['nom'])||isset($_GET['id'])) {
    if (isset($_GET['id'])) {
      $req="SELECT * from CARNET WHERE id = :id ";
      $db= $connexion->prepare($req);
      $db-> bindParam(':id',$_GET['id']);
      $db-> execute();
      $res=$db->fetch(PDO::FETCH_ASSOC);
      foreach ($res as $key ) {
        echo '</br>'.$key;
      }
    }else{
      $req="SELECT * from CARNET WHERE nom = :nom ";
      $db= $connexion->prepare($req);
      $db-> bindParam(':nom',$_GET['nom']);
      $db-> execute();
      $res=$db->fetch(PDO::FETCH_ASSOC);
      foreach ($res as $key ) {
        echo '</br>'.$key;
      }
    }

   }
?>

</body>
</html>
