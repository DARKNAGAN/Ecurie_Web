<?php

function get_ArticlesCavalier()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM Article');
    $req->execute();
    $articlesCav = $req->fetchAll();
    
    
    return $articlesCav;
}


function get_ArticlesChevalT()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM Article WHERE idcategorie=2');
    $req->execute();
    $articlesChvT = $req->fetchAll();
    
    
    return $articlesChvT;
}


function get_ArticlesChevalR()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM Article WHERE idcategorie=3');
    $req->execute();
    $articlesChvR = $req->fetchAll();
    
    
    return $articlesChvR;
}

function get_ArticlesCat()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM CategorieArticle ');
    $req->execute();
    $categories = $req->fetchAll();
    
    
    return $categories;
}


function get_Articles()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM Article ');
    $req->execute();
    $articles = $req->fetchAll();
    
    
    return $articles;
}