<?php 
  
date_default_timezone_set('Europe/Paris'); //Liste des Fuseaux Horaires Supportés: https://www.php.net/manual/fr/timezones.php

$debut1=strtotime("13:26:00");  //debut premiere heure creuse
$fin1=strtotime("16:26:00");    //fin premiere heure creuse
$debut2=strtotime("02:26:00");  //debut deuxieme heure creuse
$fin2=strtotime("07:26:00");    //fin premiere heure creuse
$cet=strtotime(date("H:i:s"));  //heure locale

if ($cet <= $debut1 AND $cet >= $debut2)
{
  $heure=gmdate('G:i',$debut1-$cet); 
}
else
{
  $heure=gmdate('G:i',$debut2-$cet); 
}
echo "Prochaine HC dans $heure";

if ($cet > $debut1 AND $cet < $fin1)
{
  $reste=gmdate('G:i',$fin1-$cet);
  echo "<br>Fin HC dans $reste";
}
elseif ($cet > $debut1 AND $cet < $fin2)
{
  $reste=gmdate('G:i',$fin2-$cet);
  echo "<br>Fin HC dans $reste";
}
else
{
}
?>