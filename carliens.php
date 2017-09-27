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
<ul>
  <?php
     foreach ($connexion->query($sql) as $row)
     echo "<li><a href='#' onclick='search_infos(".$row['ID'].")'>".$row['NOM']." ".$row['PRENOM']."</a></li>\n";
  ?>
</ul>
<?php } ?>
<script type="text/javascript">
function search_infos(id)
                     {
                             window.open('recherche.php?id='+id,'nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');
                     }
</script>
</body>
</html>
