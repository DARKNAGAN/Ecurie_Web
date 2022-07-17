<?php

// On demande les 5 derniers billets (mod�le)
include_once('./modele/actualite/model_class.php');
$event1 = get_News(0, 5);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($event1 as $cle => $event)
{
    $event1[$cle]['nom'] = ($event['nom']);
    $event1[$cle]['dateevent'] = ($event['dateevent']);
    $event1[$cle]['imageevent'] = ($event['imageevent']);
    $event1[$cle]['lieu'] = ($event['lieu']);
    $event1[$cle]['description'] = ($event['description']);

}
// On affiche la page (vue)
include_once('./vue/actualite/index.php');
