<?php

// On demande les 5 derniers billets (modèle)
include_once('./modele/model_class.php');
$articlesCav = get_ArticlesCavalier(0, 3);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($articlesCav as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
}


$articlesChvT = get_ArticlesChevalT(0, 3);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($articlesChvT as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
}

$articlesChvR = get_ArticlesChevalR(0, 3);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($articlesChvR as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
}

$categories = get_ArticlesCat(0, 3);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($categories as $cle => $categorie)
{
    $categories[$cle]['idcategorie'] = ($categorie['idcategorie']);
    $categories[$cle]['libelle'] = ($categorie['libelle']);
}
// On affiche la page (vue)
include_once('./vue/shop/index.php');


$articles = get_Articles(0, 3);
// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($articles as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
    $articles[$cle]['idcategorie'] = ($article['idcategorie']);
}
