<?php
function check_Password()
{
	global $bdd;
	$req = $bdd->prepare('SELECT mdp, ideleve, privilege, pseudo FROM Eleve WHERE pseudo = :pseudo');
	$req->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
	$req->execute();
	$data = $req->fetch();
	return $data;
}