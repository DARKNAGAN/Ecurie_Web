<?php

// On demande les 5 derniers billets (modèle)
include_once('./modele/model_class.php');
$eventsAll = get_events(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsAll as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}


$eventsJanv = get_eventsJanv(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsJanv as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}


$eventsFev = get_eventsFev(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsFev as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsMars = get_eventsMars(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsMars as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsAvr = get_eventsAvr(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsAvr as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsMai = get_eventsMai(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsMai as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsJuin = get_eventsJuin(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsJuin as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsJuil = get_eventsJuil(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsJuil as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsAout = get_eventsAout(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsAout as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsSept = get_eventsSept(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsSept as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsOct = get_eventsOct(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsOct as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsNov = get_eventsNov(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsNov as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

$eventsDec = get_eventsDec(0, 5);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($eventsDec as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}



// On affiche la page (vue)
include_once('./vue/event/index.php');