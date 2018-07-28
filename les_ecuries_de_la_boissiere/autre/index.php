<?php

// Paramètres
setlocale(LC_TIME, 'fr', 'fr_FR');

$url  = "";
$host = "";
$bdd  = "";
$user = "";
$mdp  = "";

// Inclut le controlleur et défini ses paramètres
require ("controller/controller.class.php");
$unController = new Controller($host, $bdd, $user, $mdp);

session_start();

// Je cherche la page qui est demandé
if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else {
	$page = "accueil";
}

// En fonction de $page on récupère la page
switch($page) {

	// Accueil
	case "accueil":
		$resultatsSelectLastOffer = $unController->selectLastOffer("offreUtilisateur","2");
		require ("view/accueil.php");
	break;

	// Json
	case "json":
		require ("view/json.php");
	break;

	// Si page n'existe pas
	default:
		header("Location: accueil");
	break;

}

?>