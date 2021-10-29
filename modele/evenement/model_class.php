<?php
function get_events()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM Event WHERE dateevent > TO_DAYS(NOW()) AND idtype <> 1  ORDER BY dateevent ASC');
    $req->execute();
    $eventsAll = $req->fetchAll();
    
    
    return $eventsAll;
}