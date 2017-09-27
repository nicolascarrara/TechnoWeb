#! /bin/bash

echo "Content-type: text/html"

echo

echo '<meta charset="utf-8">'

if [ -z $QUERY_STRING]
  then
  echo "Methode POST"
  read QUERY_STRING
else
  echo "Methode GET"
fi

echo
MOIS=9
ANNEE=2017
CAL=/usr/bin/cal

$CAL $MOIS $ANNEE
CAT=cat
IFACE=/etc/network/interfaces
$CAT $IFACE
for var in $(env)
  do
  echo $var
  echo "</br>"
done

for i in `seq 2 3`
  do
    if [$i -eq 2]
     then
      echo "Nom = "
      echo $QUERY_STRING | cut -d"=" -f$i | cut -d"&" -f1
    else
      echo "Prénom = "
      echo $QUERY_STRING | cut -d"=" -f$i | cut -d"&" -f1
    fi

  echo
done
#NOM=$(echo $QUERY_STRING | cut -d"=" -f2 | cut -d"&" -f1)
#PRENOM=$(echo $QUERY_STRING | cut -d"=" -f3 | cut -d"&" -f1 )
#echo Nom = $NOM
#echo Prénom = $PRENOM
