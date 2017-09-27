<html>
<head>
<title>
Connexion à MySQL avec PDO
</title>
<meta charset="utf-8">
</head>
<body>
<h1>
Interrogation de la table CARNET avec PDO
</h1>

<?php
require("connect.php");
$dsn="mysql:dbname=".BASE.";host=".SERVER;
    try{
      $connexion=new PDO($dsn,USER,PASSWD);
    }
    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }
$sql="SELECT * from CARNET";
if(!$connexion->query($sql)) echo "Pb d'accès au CARNET";
else{
?>
<dl>
  <?php
     foreach ($connexion->query($sql) as $row)
     echo "<dt style='font-style:italic'>".$row['NOM']."</dt><dd>".$row['PRENOM']." ".$row['NOM'].", né(e) le ".$row['NAISSANCE']." vivant à ".$row['VILLE']."</dd></dt>\n";
  ?>
</dl>
<?php } ?>
</body>
</html>

