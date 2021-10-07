<?php
function get_News()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM Event WHERE lieuevent="ORVEAU" ');
    $req->execute();
    $event1 = $req->fetchAll();
    
    
    return $event1;
}
