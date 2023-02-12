<?php
function get_checkPseudo()
{
	global $bdd;
	$pseudo=$_POST['pseudo'];
	$req = $bdd->prepare('SELECT COUNT(*) AS nbr FROM Eleve WHERE pseudo =:pseudo');
	$req->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
	$req->execute();
	$pseudo_free=($req->fetchColumn()==0)?1:0;
	$req->CloseCursor();
	return $pseudo_free;
}
function get_checkMail()
{
	global $bdd;
	$email = $_POST['email'];
	$req = $bdd->prepare('SELECT COUNT(*) AS nbr FROM Eleve WHERE adressemail =:mail');
	$req->bindValue(':mail',$email, PDO::PARAM_STR);
	$req->execute();
	$mail_free=($req->fetchColumn()==0)?1:0;
	$req->CloseCursor();
	return $mail_free;
}
function post_Registre()
{
	global $bdd;
	$pseudo=$_POST['pseudo'];
	$pass = /*md5*/($_POST['password']);
	$email = $_POST['email'];
	mkdir("./images/avatars/".$pseudo."/", 0700);
	$nomavatar=(!empty($_FILES['avatar']['size']))?edit_avatar($_FILES['avatar'], $pseudo):'';
	$localisation = $_POST['localisation'];
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$sexe = $_POST['sexe'];
	$age = $_POST['age'];
	$galop = $_POST['galop'];
	$req = $bdd->prepare('INSERT INTO Eleve (pseudo, mdp, adressemail, imageeleve, adresse, prenom, nom, sexe, age, galop, dateenregistre)
						VALUES (:pseudo, :pass, :email, :nomavatar, :localisation, :prenom, :nom, :sexe, :age, :galop, NOW())');
	$req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
	$req->bindValue(':pass', $pass, PDO::PARAM_STR);
	$req->bindValue(':email', $email, PDO::PARAM_STR);
	$req->bindValue(':nomavatar', $nomavatar, PDO::PARAM_STR);
	$req->bindValue(':localisation', $localisation, PDO::PARAM_STR);
	$req->bindValue(':prenom', $prenom, PDO::PARAM_STR);
	$req->bindValue(':nom', $nom, PDO::PARAM_STR);
	$req->bindValue(':sexe', $sexe, PDO::PARAM_STR);
	$req->bindValue(':age', $age, PDO::PARAM_INT);
	$req->bindValue(':galop', $galop, PDO::PARAM_INT);

	$req->execute();
}