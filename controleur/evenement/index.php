<?php

// On demande les 5 derniers billets (modèle)
include_once('./modele/evenement/model_class.php');
$eventsAll = get_events(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsAll as $cle => $event)
{
    $events[$cle]['nom'] = ($event['nom']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieu'] = ($event['lieu']);
    $events[$cle]['description'] = ($event['description']);
}

// On affiche la page (vue)
include_once('./vue/evenement/index.php');