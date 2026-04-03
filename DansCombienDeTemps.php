<?php

date_default_timezone_set('Europe/Paris');

$now = time();

// Créneaux HC du jour
$hc1_debut = strtotime(date('Y-m-d') . ' 02:26:00');
$hc1_fin   = strtotime(date('Y-m-d') . ' 07:26:00');

$hc2_debut = strtotime(date('Y-m-d') . ' 13:26:00');
$hc2_fin   = strtotime(date('Y-m-d') . ' 16:26:00');

// Créneau HC de demain matin
$hc1_debut_demain = strtotime(date('Y-m-d', strtotime('+1 day')) . ' 02:26:00');

function formatDuree($secondes) {
    if ($secondes < 0) {
        $secondes = 0;
    }
    return gmdate('G:i', $secondes);
}

$message = '';

// HC en cours : plage 1
if ($now >= $hc1_debut && $now < $hc1_fin) {
    $fin = $hc1_fin - $now;
    $prochaine = $hc2_debut - $now;

    $message .= "HC en cours - fin dans " . formatDuree($fin);
    $message .= "<br>Prochaine HC dans " . formatDuree($prochaine);
}

// HC en cours : plage 2
elseif ($now >= $hc2_debut && $now < $hc2_fin) {
    $fin = $hc2_fin - $now;
    $prochaine = $hc1_debut_demain - $now;

    $message .= "HC en cours - fin dans " . formatDuree($fin);
    $message .= "<br>Prochaine HC dans " . formatDuree($prochaine);
}

// Avant la 1re plage du jour
elseif ($now < $hc1_debut) {
    $prochaine = $hc1_debut - $now;
    $message .= "Prochaine HC dans " . formatDuree($prochaine);
}

// Entre les 2 plages
elseif ($now >= $hc1_fin && $now < $hc2_debut) {
    $prochaine = $hc2_debut - $now;
    $message .= "Prochaine HC dans " . formatDuree($prochaine);
}

// Après la 2e plage
else {
    $prochaine = $hc1_debut_demain - $now;
    $message .= "Prochaine HC dans " . formatDuree($prochaine);
}

echo $message;
?>
