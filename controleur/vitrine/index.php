<?php

// On demande les 5 derniers billets (mod�le)
include_once('./modele/vitrine/model_class.php');
$articlesCav = get_ArticlesCavalier(0, 3);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($articlesCav as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
}
$articlesChvT = get_ArticlesChevalT(0, 3);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($articlesChvT as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
}
$articlesChvR = get_ArticlesChevalR(0, 3);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($articlesChvR as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
}
$categories = get_ArticlesCat(0, 3);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($categories as $cle => $categorie)
{
    $categories[$cle]['idcategorie'] = ($categorie['idcategorie']);
    $categories[$cle]['libelle'] = ($categorie['libelle']);
}
$articles = get_Articles(0, 3);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($articles as $cle => $article)
{
    $articles[$cle]['imagearticle'] = ($article['imagearticle']);
    $articles[$cle]['libelle'] = ($article['libelle']);
    $articles[$cle]['description'] = ($article['description']);
    $articles[$cle]['idcategorie'] = ($article['idcategorie']);
}
// On affiche la page (vue)
include_once('./vue/vitrine/index.php');