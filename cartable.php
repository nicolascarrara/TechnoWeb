<html>
<head>
<title>
Tableau PDO
</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/cartable.css">
</head>
<body>
<h1>
Mise en forme d'un tableau grace a PDO
</h1>

<?php
require("connect.php");
setlocale(LC_TIME, "fr");
$sql="SELECT * from CARNET";
if(!$connexion->query($sql)) echo "Pb d'accès au CARNET";
else{

?>
  <table style='border:solid 1px black'>
    <th>Nom</th>
  <th>Prenom</th>
  <th>Date de naissance</th>
  <th>Ville</th>
  <?php
     foreach ($connexion->query($sql) as $row){
     $ladate=date('d-m-Y',strtotime($row['NAISSANCE']));
     echo "<tr> <td>".$row['NOM']."</td><td>".$row['PRENOM']."</td><td>".$ladate."</td><td>".$row['VILLE']."</td></tr>";
   }
  ?>
  </table>

<?php } ?>

</body>
</html>
