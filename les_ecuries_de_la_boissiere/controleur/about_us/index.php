<?php

// On demande les 5 derniers billets (modèle)
include_once('./modele/model_class.php');

$uncheval = get_Cheval(0, 7);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($uncheval as $cle => $cheval)
{
    $uncheval[$cle]['nom'] = ($cheval['nom']);
    $uncheval[$cle]['sexe'] = ($cheval['sexe']);
    $uncheval[$cle]['robe'] = ($cheval['robe']);
    $uncheval[$cle]['type'] = ($cheval['type']);
    $uncheval[$cle]['proprietaire'] = ($cheval['proprietaire']);
    $uncheval[$cle]['age'] = ($cheval['age']);
    $uncheval[$cle]['imagecheval'] = ($cheval['imagecheval']);
}

// On affiche la page (vue)
include_once('./vue/about_us/index.php');
