<?php

class Model {

    private $pdo, $table;

    public function __construct ($host, $bdd, $user, $mdp) {

        $this->pdo = null;

        try {
            $this->pdo = new PDO ("mysql:host=".$host.";dbname=".$bdd, $user, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        catch (Exception $exp) {
            echo "Erreur de connexion à la BDD";
        }

    }
    
    public function renseigner($table) {
        $this->table = $table;
    }
    
    public function selectAll() {
        
        if ($this->pdo != null) {
            $requete = "SELECT * FROM ".$this->table.";";
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultats = $select->fetchAll();
            return $resultats;
        } else {
            return null;
        }

    }

    public function selectAllDistinct() {

        if ($this->pdo != null) {
            $requete = "SELECT DISTINCT ville FROM ".$this->table.";";
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultats = $select->fetchAll();
            return $resultats;
        } else {
            return null;
        }

    }
    
    public function selectAllWhere($where) {
        
        if ($this->pdo != null) {
            $requete = "SELECT * FROM ".$this->table." WHERE ".$where.";";
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultats = $select->fetchAll();
            return $resultats;
        } else {
            return null;
        }
        
    }
    
    public function selectAllCount() {
        
        if ($this->pdo != null) {
            $requete = "SELECT COUNT(*) AS nb FROM ".$this->table.";";
 
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultats = $select->fetch();
            return $resultats;
        } else {
            return null;
        }

    }
    
    public function selectAllWhereDistinct($tab, $where) {
        
        if ($this->pdo != null) {
            $requete = "SELECT ".$tab." FROM ".$this->table." WHERE ".$where.";";
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultats = $select->fetchAll();
            return $resultats;
        } else {
            return null;
        }
        
    }

    public function selectLastOffer($limit) {
        
        $requete = "SELECT * FROM ".$this->table. " LIMIT 0, " .$limit.";";

        if ($this->pdo != null) {            
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultatsLastOffer = $select->fetchAll();
            return $resultatsLastOffer;
        } else {
            return null;
        }

    }
    
    public function selectChamps($tab) { // $tab = ensemble de champs

        $champs = implode(",", $tab); // Rassemble les éléments d'un tableau en une chaîne (séparé par une virgule)
        
        if ($this->pdo != null) {
            $requete = "SELECT ".$champs." FROM ".$this->table.";";
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultats = $select->fetchAll();
            return $resultats;
        } else {
            return null;
        }

    }
        
    public function selectAllWithFK($tab, $where) {
        $requete = "SELECT ".$tab." FROM ".$this->table." WHERE ".$where.";";

        if ($this->pdo != null) {
            $select = $this->pdo->prepare($requete);
            $select->execute();
            $resultatsWithFK = $select->fetchAll();
            return $resultatsWithFK;
        } else {
            return null;
        }

    }

    public function selectWhere($tab, $where) {

        /*
            Présent dans l'index :
            $tab = array("nom", "prenom", "classe");
            $where = array("prenom"=>"Alexandre", "nom"=>"Da Costa");
        */
        $champs = implode(",", $tab);
        $clause = array();
        $donnees = array();

        // Pour chaque éléments du tableau $where (défini dans l'index) on les affectes à $cle et $valeur
        foreach ($where as $cle=>$valeur) {
            $clause[] = $cle." = :".$cle; // Défini les clauses (conditions where)
            $donnees[":".$cle] = $valeur; // Défini une valeur pour chaque clé
        }

        $chaine = implode (" AND ", $clause); // Rassemble les éléments d'un tableau en une chaîne (séparé par un AND)
        $requete = "SELECT ".$champs." FROM ".$this->table." WHERE ".$chaine.";";

        if ($this->pdo != null) {
            $select = $this->pdo->prepare($requete);
            /*
                $requete = SELECT nom, prenom, classe FROM eleve WHERE prenom = :prenom AND nom = :nom;
            */
            $select->execute($donnees);
            /*
                $donnees = :prenom = Alexandre :nom = Da Costa
            */
            $resultats = $select->fetchAll();
            return $resultats;
        } else {
            return null;
        }

    }

    public function insert($values) {

        $champs = array();
        $valeurs = array();
        $donnees = array();

        foreach ($values as $cle=>$valeur) {
            $champs[] = $cle;
            $valeurs[] = ":".$cle;
            $donnees[":".$cle] = $valeur;
        }

        $chaineChamps = implode(",", $champs);
        $chaineValeurs = implode(",", $valeurs);
        $requete = "INSERT INTO ".$this->table." (".$chaineChamps.") VALUES (".$chaineValeurs.");";

        $insert = $this->pdo->prepare($requete);
        $insert->execute($donnees);

    }

    public function update($tab, $where) {

        /*
            Présent dans l'index :
            $tab = array("nom", "prenom", "classe");
            $where = array("prenom"=>"Alexandre", "nom"=>"Da Costa");
        */
        $clause1 = array();
        $clause2 = array();
        $donnees = array();

        // Pour chaque éléments du tableau $where (défini dans l'index) on les affectes à $cle et $valeur
        foreach ($tab as $cle=>$valeur) {
            $clause1[] = $cle." = :".$cle; // Défini les clauses (conditions where)
            $donnees[":".$cle] = $valeur; // Défini une valeur pour chaque clé
        }
        foreach ($where as $cle=>$valeur) {
            $clause2[] = $cle." = :".$cle; // Défini les clauses (conditions where)
            $donnees[":".$cle] = $valeur; // Défini une valeur pour chaque clé
        }

        $chaine1 = implode (" , ", $clause1); // Rassemble les éléments d'un tableau en une chaîne (séparé par un AND)
        $chaine2 = implode (" AND ", $clause2);
        $requete = "UPDATE ".$this->table." SET ".$chaine1." WHERE ".$chaine2.";";

        if ($this->pdo != null) {
            $update = $this->pdo->prepare($requete);
            /*
                $requete = SELECT nom, prenom, classe FROM eleve WHERE prenom = :prenom AND nom = :nom;
            */
            $update->execute($donnees);
            /*
                $donnees = :prenom = Alexandre :nom = Da Costa
            */
        } else {
            return null;
        }

    }

    public function inscription($valuesU, $valuesP) {

        // Insertion dans la table utilisateur

        $table = explode(",", $this->table);

        $champsU = array();
        $valeursU = array();
        $donneesU = array();

        foreach ($valuesU as $cle=>$valeur) {
            $champsU[] = $cle;
            $valeursU[] = ":".$cle;
            $donneesU[":".$cle] = $valeur;
        }

        $chaineChamps = implode(",", $champsU);
        $chaineValeurs = implode(",", $valeursU);

        $requete = "INSERT INTO ".$table[0]."(".$chaineChamps.") VALUES (".$chaineValeurs.");";
        $insert = $this->pdo->prepare($requete);
        $insert->execute($donneesU);

        // Insertion dans la table particulier

        $sql = "SELECT max(idUtilisateur) AS idUtilisateur
                FROM ".$table[0].";
        ";
        $select = $this->pdo->prepare($sql);
        $select->execute();
        $resultat = $select->fetch(PDO::FETCH_ASSOC);

        $champsP = array();
        $valeursP = array();
        $donneesP = array();

        foreach ($valuesP as $cle=>$valeur) {
            $champsP[] = $cle;
            $valeursP[] = ":".$cle;
            $donneesP[":".$cle] = $valeur;
        }
        $donneesP[":idUtilisateur"] = $resultat["idUtilisateur"];
        $chaineChamps = implode(",", $champsP);
        $chaineValeurs = implode(",", $valeursP);

        $requete = "INSERT INTO ".$table[1]."(".$chaineChamps.",idUtilisateur) VALUES (".$chaineValeurs.",:idUtilisateur);
        ";
        $insert = $this->pdo->prepare($requete);
        $insert->execute($donneesP);
        
        echo '
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="alert alert-success">
                        Inscription réussi !
                    </div>
                </div>
            </div>
            <meta http-equiv="refresh" content="3; URL=login">
        ';

    }

    public function connexion($tab, $where) {

        $table = explode(",", $this->table);
        $champs = implode(",", $tab);
        $clause = array();
        $donnees = array();

        // Pour chaque éléments du tableau $where (défini dans l'index) on les affectes à $cle et $valeur
        foreach ($where as $cle=>$valeur) {
            $clause[] = $cle." = :".$cle; // Défini les clauses (conditions where)
            $donnees[":".$cle] = $valeur; // Défini une valeur pour chaque clé
        }

        if ($this->pdo != null) {
            $chaine = implode (" AND ", $clause); // Rassemble les éléments d'un tableau en une chaîne (séparé par un AND)
            $requete = "SELECT ".$champs." FROM ".$table[0]." WHERE ".$chaine.";";

            $connexion = $this->pdo->prepare($requete);
            $connexion->execute($donnees);
            $user_connected = $connexion->fetch(PDO::FETCH_ASSOC);

            if ($user_connected != false) {
                $_SESSION = $user_connected;
                echo '<meta http-equiv="refresh" content="0; URL=accueil">';
            } else {
                $chaine = implode (" AND ", $clause); // Rassemble les éléments d'un tableau en une chaîne (séparé par un AND)
                $requete = "SELECT ".$champs." FROM ".$table[1]." WHERE ".$chaine.";";

                $connexion = $this->pdo->prepare($requete);
                $connexion->execute($donnees);
                $user_connected = $connexion->fetch(PDO::FETCH_ASSOC);

                if ($user_connected != false) {
                    $_SESSION = $user_connected;
                    echo '<meta http-equiv="refresh" content="0; URL=accueil">';
                } else {
                    echo '  <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="alert alert-danger">
                                        Echec de la connexion : email ou mot de passe incorrect.
                                    </div>
                                </div>
                            </div>
                    ';
                }
            }
        } else {
            return null;
        }

    }

}

?>