# Jeedom - Script Heures Creuses

Petit script PHP permettant d'afficher :

- si les heures creuses sont en cours
- le temps restant avant la fin des heures creuses
- le temps avant la prochaine plage d'heures creuses

## Fonctionnement

Le script utilise le fuseau horaire :

- `Europe/Paris`

Plages d'heures creuses configurées :

- `02:26 -> 07:26`
- `13:26 -> 16:26`

## Exemples de sortie

Si les heures creuses sont en cours :

HC en cours - fin dans 2:14  
Prochaine HC dans 6:00

Si les heures creuses ne sont pas en cours :

Prochaine HC dans 5:32

## Utilisation dans Jeedom

Ce script peut être utilisé dans une commande script PHP afin d'afficher l'état courant des heures creuses.

## Fichier principal

- `DansCombienDeTemps.php`

## Personnalisation

Pour adapter le script à votre contrat, modifiez simplement les horaires dans ces variables :

```php
$hc1_debut = strtotime(date('Y-m-d') . ' 02:26:00');
$hc1_fin   = strtotime(date('Y-m-d') . ' 07:26:00');

$hc2_debut = strtotime(date('Y-m-d') . ' 13:26:00');
$hc2_fin   = strtotime(date('Y-m-d') . ' 16:26:00');
