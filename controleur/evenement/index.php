<?php

// On demande les 5 derniers billets (mod�le)
include_once('./modele/evenement/model_class.php');
$eventsAll = get_events(0, 5);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
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