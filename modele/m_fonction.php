<?php

function connexion()
{
    $serveur = "localhost";
    $login = "root";
    $password = "root";
    $bdd = "hopital";
    $connect = mysql_connect($serveur, $login, $password);
    $connectdb = mysql_select_db($bdd, $connect);
    return $connect;
}

function InsertPatient($nomP, $prenomP, $datenaissP, $SexeP, $telP, $adresseP, $villeP, $cpP, $mailP, $chambre, $nomR, $prenomR, $datenaissR, $SexeR, $telR, $adresseR, $villeR, $cpR, $mailR, $medtraitant, $idemp)
{
    $connexion = connexion();
	$sql = "INSERT INTO patients (nompat, prepat, datenaisspat, sexepat, telpat, adrpat, villpat, cppat, mailpat, nomres, preres, datenaissres, sexeres, telres, adrres, villres, cpres, mailres)
			VALUES ( '$nomP' , '$prenomP', '$datenaissP' , '$SexeP' , '$telP' , '$adresseP' , '$villeP' , '$cpP' , '$mailP' , '$nomR' , '$prenomR' , '$datenaissR' , '$SexeR' , '$telR' , '$adresseR' , '$villeR' , '$cpR' , '$mailR' );" ;    
		mysql_query($sql);
	if ($chambre != 0)
	{
		$idpat = "SELECT idpat
				  FROM patients
				  WHERE nompat = '$nomP' AND prepat = '$prenomP' AND datenaisspat = '$datenaissP';";
		$reqidpat = mysql_query($idpat);
		
		$ligneidpat = mysql_fetch_row($reqidpat);
		
		$addcham = "UPDATE chambres 
					SET idpat = '$ligneidpat[0]'
					WHERE numcham = '$chambre';";
		mysql_query($addcham);
	}
	
	if(isset ($medtraitant))
	{
		$sql2 = "UPDATE patients
				SET idemp = '$medtraitant'
				WHERE nompat = '$nomP' AND prepat = '$prenomP' AND datenaisspat = '$datenaissP';";		
				mysql_query($sql2);
		
		$idpat2 = "SELECT idpat
					FROM patients
					WHERE nompat = '$nomP' AND prepat = '$prenomP' AND datenaisspat = '$datenaissP';";
		$reqidpat2 = mysql_query($idpat2);
			
		$ligneidpat2 = mysql_fetch_row($reqidpat2);
		
		$sql3 = "INSERT INTO suivis_patients
				 VALUES (1, '$ligneidpat2[0]', 'Création dossier', NOW(), '$idemp');";
				 
		mysql_query($sql3);
	}
	else
	{
		$idpat3 = "SELECT idpat
					FROM patients
					WHERE nompat = '$nomP' AND prepat = '$prenomP' AND datenaisspat = '$datenaissP';";
		$reqidpat3 = mysql_query($idpat3);
			
		$ligneidpat3 = mysql_fetch_row($reqidpat3);
		
		$sql4 = "INSERT INTO suivis_patients (numsuivis, idpat, commentaire, datesuivis)
				 VALUES (1, '$ligneidpat3[0]', 'Création dossier', NOW());";
				 
		mysql_query($sql4);
	}
	
}

function ModifierPatient($idpat, $nomP, $prenomP, $datenaissP, $SexeP, $telP, $adresseP, $villeP, $cpP, $mailP, $nomR, $prenomR, $datenaissR, $SexeR, $telR, $adresseR, $villeR, $cpR, $mailR)
{
	$connexion = connexion();
    $sql = "UPDATE patients
            SET nompat = '$nomP' , prepat = '$prenomP', datenaisspat = '$datenaissP' , sexepat = '$SexeP' , telpat = '$telP' , adrpat = '$adresseP' , villpat = '$villeP' , cppat = '$cpP' , mailpat = '$mailP' , nomres = '$nomR' , preres= '$prenomR' , datenaissres = '$datenaissR' , sexeres = '$SexeR' , telres = '$telR' , adrres = '$adresseR' , villres = '$villeR' , cpres = '$cpR' , mailres = '$mailR'
			WHERE idpat = '$idpat';";
	mysql_query($sql);
}

function ModifierProfil($idemp, $nom, $prenom, $datenaiss, $sexe, $adresse, $ville, $cp, $tel, $mail, $specialite, $Statut, $mdp)
{
	$connexion = connexion();
	   $sql = "UPDATE employes
			   SET nomemp = '$nom', preemp = '$prenom', datenaissemp = '$datenaiss', sexeemp = '$sexe', adremp = '$adresse', villemp = '$ville', cpemp = '$cp', telemp = '$tel', mailemp = '$mail', numsec = '$specialite', statemp = '$Statut'
	WHERE idemp = '$idemp';";
	mysql_query($sql);
	$sql2 = "UPDATE connexion
	set mdp = '$mdp'
	where idemp = '$idemp';";
	mysql_query($sql2);
}

function InsertSuivis($idpat, $etat, $commentaire, $idemp)
{
	$connexion = connexion();
	$sql = "Select *
			FROM suivis_patients
			WHERE idpat = '$idpat';";
	$req = mysql_query($sql);
	$ligne = mysql_num_rows($req);
	
	$sql2 = "INSERT INTO suivis_patients
			VALUES (('$ligne' + 1), '$idpat', '$etat', '$commentaire', NOW(), '$idemp');";
	mysql_query($sql2);
}

function InsertMedecin($nom, $prenom, $datenaiss, $Sexe, $adresse, $ville, $cp, $tel, $mail, $specialite, $Statut, $login, $mdp)
{
    $connexion = connexion();
    $sql = "INSERT INTO employes (nomemp, preemp, datenaissemp, sexeemp, adremp, villemp, cpemp, telemp, mailemp, numsec, statemp)
            VALUES ( '$nom' , '$prenom' , '$datenaiss' , '$Sexe', '$adresse', '$ville' , '$cp' , '$tel' , '$mail' , '$specialite' , '$Statut' );" ;
	mysql_query($sql);
	
	$sql2 = "SELECT idemp 
			FROM employes
			WHERE nomemp = '$nom' AND preemp = '$prenom' AND datenaissemp = '$datenaiss';";
	$req = mysql_query($sql2);
	
	$ligne = mysql_fetch_row($req);
	
    $sqlID = "INSERT INTO connexion
              VALUES ( '$login' , '$mdp' , '$ligne[0]');";
    
    mysql_query($sqlID);    
}

function ModifierEmploye($idemp, $nom, $prenom, $datenaiss, $sexe, $adresse, $ville, $cp, $tel, $mail, $specialite, $Statut)
{
	$connexion = connexion();
    $sql = "UPDATE employes
            SET nomemp = '$nom', preemp = '$prenom', datenaissemp = '$datenaiss', sexeemp = '$sexe', adremp = '$adresse', villemp = '$ville', cpemp = '$cp', telemp = '$tel', mailemp = '$mail', numsec = '$specialite', statemp = '$Statut'
			WHERE idemp = '$idemp';";
	mysql_query($sql);
}

function AfficheEmploye()
{
	$connexion = connexion();
	$sql = "Select * 
			From employes 
			Order by idemp";
	$req = mysql_query($sql);
	return $req;
}

function AfficheEmployeID($idemp)
{
	$connexion = connexion();
	$sql = "Select * 
			From employes 
			Where idemp = '$idemp';";
	$req = mysql_query($sql);
	return $req;
}

function AfficheEmployePat($idpat)
{
	$connexion = connexion();
	$sql = "Select * 
			From employes E
			Inner join patients P on E.idemp = P.idemp
			Where idpat = '$idpat';";
	$req = mysql_query($sql);
	return $req;
}

function AfficheMedecin($Secteur)
{
	$connexion = connexion();
	$sql = "Select * 
			From employes E
			Inner join secteur S on E.numsec = S.numsec 
			Where S.numsec = '$Secteur' AND E.statemp = 'Médecin'
			Order by idemp";
	$req = mysql_query($sql);
	return $req;
}


function AffichePatientID($idpat)
{
	$connexion = connexion();
	$sql = "Select * 
			From patients
			Where idpat = '$idpat';";
	$req = mysql_query($sql);
	return $req;
}

function AffichePatientEmp($idemp)
{
	$connexion = connexion();
	$sql = "Select * 
			From patients 
			Where idemp = '$idemp';";
	$req = mysql_query($sql);
	return $req;
}


function AffichePatient()
{
	$connexion = connexion();
	$sql = "Select * 
			From patients 
			Order by idpat";
	$req = mysql_query($sql);
	return $req;
}

function AfficheSuivisID($idpat)
{
	$connexion = connexion();
	$sql = "Select * 
			From suivis_patients
			Where idpat = '$idpat';";
	$req = mysql_query($sql);
	return $req;
}

function AfficheSuivisIdNum($idpat, $numsuivis)
{
	$connexion = connexion();
	$sql = "Select * 
			From suivis_patients
			Where idpat = '$idpat' AND numsuivis ='$numsuivis';";
	$req = mysql_query($sql);
	return $req;
}

function AfficheSecteur()
{
	$connexion = connexion();
	$sql = "Select * 
			From secteur";
	$req = mysql_query($sql);
	return $req;
}

function AfficheSecteurEmp($idemp)
{
	$connexion = connexion();
	$sql = "Select * 
			From secteur S
			Inner join employes E on S.numsec = E.numsec
			Where E.idemp = '$idemp';";
	$req = mysql_query($sql);
	return $req;
}

function AfficheStatut()
{
	$connexion = connexion();
	$sql = "Select * 
			From employes
			Group by statemp";
	$req = mysql_query($sql);
	return $req;
}

function AfficheStatutID($idemp)
{
	$connexion = connexion();
	$sql = "Select statemp
			From employes
			Where idemp = '$idemp'";
	$req = mysql_query($sql);
	return $req;
}

function AfficheChambre($Secteur)
{
	$connexion = connexion();
	$sql = "Select numcham 
			From chambres C 
			Inner join secteur S on C.numsec = S.numsec 
			Where S.numsec = '$Secteur' AND idpat is null;";
	$req = mysql_query($sql);
	return $req;
}

function AffichePHospitalise()
{
	$connexion = connexion();
	$sql = "Select * 
			From patients
			Where idpat in (Select idpat From chambres)";
	$req = mysql_query($sql);
	return $req;
}

function AffichePHospitaliseO($secteurP)
{
	$connexion = connexion();
	$sql = "Select * 
			From patients P
			Inner join chambres C on P.idpat = C.idpat
			Where P.idpat in (Select idpat From chambres) AND C.numsec = '$secteurP' ";
	$req = mysql_query($sql);
	return $req;
}

function AffichePVisite()
{
	$connexion = connexion();
	$sql = "Select * 
			From patients P
			Where P.idpat not in (Select P.idpat 
								  From patients 
								  Where P.idpat in (Select C.idpat 
													From chambres C))";
	$req = mysql_query($sql);
	return $req;
}

function AffichePVisiteO($secteurP)
{
	$connexion = connexion();
	$sql = "Select * 
			From patients P
			Inner join suivis_patients SP on P.idpat = SP.idpat
			Where P.idpat not in (Select P.idpat 
								  From patients 
								  Where P.idpat in (Select C.idpat 
													From chambres C)) 
								  AND SP.numsec = '$secteurP'";
	$req = mysql_query($sql);
	return $req;
}

function DropMedecin($idemp)
{
	$connexion = connexion();
	$sql = "DELETE FROM employes 
			WHERE idemp = '$idemp'";
	mysql_query($sql);
	
	$sql2 = "DELETE FROM connexion
			WHERE idemp = '$idemp'";
	mysql_query($sql2);
	
	$sql3 = "UPDATE patients 
			SET idemp = NULL
			WHERE idemp = '$idemp';";
	mysql_query($sql3);
	
	$sql4 = "UPDATE suivis_patients
			SET idemp = NULL
			WHERE idpat = '$idemp';";
	mysql_query($sql4);
}

function DropPatient($idpat)
{
	$connexion = connexion();
	$sql = "DELETE FROM patients 
			WHERE idpat = '$idpat'";
	mysql_query($sql);
	
	$sql2 = "UPDATE chambres
			SET idpat = NULL
			WHERE idpat = '$idpat';";
	mysql_query($sql2);
	
	$sql3 = "DELETE FROM suivis_patients
			WHERE idpat = '$idpat';";
	mysql_query($sql3);
}

function RecupIdConnexion($login, $mdp)
{
	$connexion = connexion();
	$sql = "Select login, mdp
			from connexion
			where login = '$login' and mdp = '$mdp';";
	$req = mysql_query($sql);
	return $req;
}

function ObtentionStatEmp($login, $mdp)

{
	$connexion = connexion();
	$sql = "Select e.statemp, e.idemp
			from employes e, connexion c 
			where e.idemp = c.idemp
			and c.login = '$login' 
			AND c.mdp = '$mdp';";
	$req = mysql_query($sql);
	return $req;
}

function RecupLoginIdEmp($idemp)
{
	$connexion = connexion();
	$sql = "Select login, mdp
			from connexion
			where idemp = '$idemp';";
	$req = mysql_query($sql);
	return $req;
}

function AfficheCham()
{
	$connexion = connexion();
	$sql = "Select * 
			From chambres C 
			Order by numcham;";
	$req = mysql_query($sql);
	return $req;
}

function AfficheMed()
{
	$connexion = connexion();
	$sql = "Select * 
			From employes
			Where statemp = 'Médecin'
			Order by idemp;";
	$req = mysql_query($sql);
	return $req;
}

function Logout()
{
	session_start();
	$_SESSION = array();
	if (ini_get("session.use_cookies")) 
	{
	    $params = session_get_cookie_params();
	    setcookie(session_name(), '', time() - 42000,
	        $params["path"], $params["domain"],
	        $params["secure"], $params["httponly"]
	    );
	}
	session_destroy();
	session_start();
	$_SESSION['Login'] = " ";
}

?>