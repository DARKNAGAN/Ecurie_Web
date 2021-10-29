<?php

// On demande les 5 derniers billets (modèle)
include_once('./modele/actualite/model_class.php');
$event1 = get_News(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($event1 as $cle => $event)
{
    $event1[$cle]['nomevent'] = ($event['nomevent']);
    $event1[$cle]['dateevent'] = ($event['dateevent']);
    $event1[$cle]['imageevent'] = ($event['imageevent']);
    $event1[$cle]['lieuevent'] = ($event['lieuevent']);
    $event1[$cle]['descriptionevent'] = ($event['descriptionevent']);

}

// On affiche la page (vue)
include_once('./vue/actualite/index.php');
