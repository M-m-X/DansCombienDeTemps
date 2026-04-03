# Script PHP - Heures Creuses Jeedom

Ce script PHP calcule :

- si les heures creuses sont en cours
- le temps restant avant la fin des heures creuses
- le temps avant la prochaine plage d'heures creuses

## Fonctionnement

Plages configurées :

- 02:26 → 07:26
- 13:26 → 16:26

Fuseau horaire :
- Europe/Paris

## Exemple de sortie

Si les heures creuses sont en cours :

HC en cours - fin dans 2:14
Prochaine HC dans 6:00

Sinon :

Prochaine HC dans 5:32

## Utilisation

Le script peut être utilisé dans Jeedom via une commande script PHP.

## Fichier

- `heures_creuses.php`
