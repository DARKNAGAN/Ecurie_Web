<!--Mail-->
<?php
  
  $destinataire = isset($_POST['email']) ? $_POST['email'] : NULL;
  // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
  $expediteur = 'ccunatbrule@gmail.com';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : NULL;
  $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
  $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
  $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
  $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
  $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire    
  $message = '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour ! \n</div>';
 
       
                 if(mail($expediteur, $phone, $message, $headers))
                  {
                    ?>
 
                      <script languag="javascript" >alert("Votre message a bien été envoyé ");</script>
 
                      <?php
                  }
                  else // Non envoyé
                  {
                    ?>
                      <script languag="javascript">alert("Votre message n'a pas pu être envoyé");</script>
 
 
                       <?php
                 }
                header('Location: contact_us.php');
?>
<!--About_us-->
<?php
function get_Cheval()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM cheval  where proprietaire = "CLUB" LIMIT 4');
    $req->execute();
    $uncheval = $req->fetchAll();
    
    
    return $uncheval;
}
?>
<!--Event-->
<?php
function get_events()
{
    global $bdd;
    $req = $bdd->prepare('SELECT * /*, date_format(dateevent, %W %e %M %Y %T) AS dodo */ FROM event WHERE dateevent >= CURDATE() ORDER BY dateevent ASC');    
    $req->execute();
    $eventsAll = $req->fetchAll();
    
    
    return $eventsAll;

}


function get_eventsJanv()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 1');
    $req->execute();
    $eventsJanv = $req->fetchAll();
    
    
    return $eventsJanv;
}


function get_eventsFev()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 2');
    $req->execute();
    $eventsFev = $req->fetchAll();
    
    
    return $eventsFev;
}


function get_eventsMars()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 3');
    $req->execute();
    $eventsMars = $req->fetchAll();
    
    
    return $eventsMars;
}


function get_eventsAvr()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 4');
    $req->execute();
    $eventsAvr = $req->fetchAll();
    
    
    return $eventsAvr;
}


function get_eventsMai()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 5');
    $req->execute();
    $eventsMai = $req->fetchAll();
    
    
    return $eventsMai;
}


function get_eventsJuin()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 6');
    $req->execute();
    $eventsJuin = $req->fetchAll();
    
    
    return $eventsJuin;
}


function get_eventsJuil()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 7');
    $req->execute();
    $eventsJuil = $req->fetchAll();
    
    
    return $eventsJuil;
}


function get_eventsAout()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 8');
    $req->execute();
    $eventsAout = $req->fetchAll();
    
    
    return $eventsAout;
}


function get_eventsSept()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 9');
    $req->execute();
    $eventsSept = $req->fetchAll();
    
    
    return $eventsSept;
}

function get_eventsOct()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 10');
    $req->execute();
    $eventsOct = $req->fetchAll();
    
    
    return $eventsOct;
}


function get_eventsNov()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 11');
    $req->execute();
    $eventsNov = $req->fetchAll();
    
    
    return $eventsNov;
}


function get_eventsDec()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event where YEAR(dateevent)= 2017 AND MONTH(dateevent)= 12');
    $req->execute();
    $eventsDec = $req->fetchAll();
    
    
    return $eventsDec;
}
?>
<!--News-->
<?php
function get_News()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM event WHERE lieuevent="ORVEAU" ');
    $req->execute();
    $event1 = $req->fetchAll();
    
    
    return $event1;
}
?>
<!--Shop-->
<?php

function get_ArticlesCavalier()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM article');
    $req->execute();
    $articlesCav = $req->fetchAll();
    
    
    return $articlesCav;
}


function get_ArticlesChevalT()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM article WHERE idcategorie=2');
    $req->execute();
    $articlesChvT = $req->fetchAll();
    
    
    return $articlesChvT;
}


function get_ArticlesChevalR()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM article WHERE idcategorie=3');
    $req->execute();
    $articlesChvR = $req->fetchAll();
    
    
    return $articlesChvR;
}

function get_ArticlesCat()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM categoriearticle ');
    $req->execute();
    $categories = $req->fetchAll();
    
    
    return $categories;
}


function get_Articles()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM article ');
    $req->execute();
    $articles = $req->fetchAll();
    
    
    return $articles;
}
?>
<!--Autre-->

<?php
function get_()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM');
    $req->execute();
    $events = $req->fetchAll();
    
    
    return $events;
}
?>