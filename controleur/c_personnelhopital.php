<?php
if(!isset($_REQUEST['action']))
{
    $action = 'accueil';
}
else
{
	$action = $_REQUEST['action'];
}
switch($action)
{
	case 'accueil' :
	{
		include("vue/v_accueil.php");
		break;
	}
	
	case 'monprofil' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idemp = $_SESSION['idemp'];
		$req = AffichePatientEmp($idemp);
		$row = mysql_num_rows($req);
		$req2 = AfficheSecteurEmp($idemp);
		$ligne2 = mysql_fetch_array($req2);
		include("vue/v_monprofil.php");
		break;
	}

	case 'modifprofil' :
	{
		$idemp = $_REQUEST['idemp'];
		$req = AfficheEmployeID($idemp);
		$ligne = mysql_fetch_array($req);
		$nom = $ligne['nomemp'];
		$prenom = $ligne['preemp'];
		$datenaiss = $ligne['datenaissemp'];
		$sexe = $ligne['sexeemp'];
		$tel = $ligne['telemp'];
		$adresse =$ligne['adremp'];
		$ville = $ligne['villemp'];
		$cp = $ligne['cpemp'];
		$mail = $ligne['mailemp'];
		$Statut = $ligne['statemp'];
		$specialite = $ligne['numsec'];
		$req2 = RecupLoginIdEmp($idemp);
		$ligne2 = mysql_fetch_array($req2); 
		$mdp = $ligne2['mdp'];
		include("vue/v_formmedecin.php");
		break;
	}
	
	case 'confirmmodifprofil' :
	{
		$idemp = $_SESSION['idemp'];
		$_SESSION['statemp'] = "personnelhopital";
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$datenaiss = $_POST['datenaiss'];
		$sexe = $_POST['Sexe'];
		$tel = $_POST['tel'];
		$adresse = $_POST['adresse'];
		$ville = $_POST['ville'];
		$cp = $_POST['cp'];
		$mail = $_POST['mail'];
		$Statut = $_POST['Statut'];
		$specialite = $_POST['specialite'];
		$mdp = $_POST['mdp'];
		ModifierProfil($idemp, $nom, $prenom, $datenaiss, $sexe, $adresse, $ville, $cp, $tel, $mail, $specialite, $Statut, $mdp);
		$req = AffichePatientEmp($idemp);
		$row = mysql_num_rows($req);
		$req2 = AfficheSecteurEmp($idemp);
		$ligne2 = mysql_fetch_array($req2);
		include("vue/v_monprofil.php");
		break;
	}
	
	case 'medecins' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		include("vue/v_medecins.php");
		break;
	}

	case 'ajoutmedecin' :
	{
		$nom = "";
		$prenom = "";
		$datenaiss = "";
		$sexe = "";
		$tel = "";
		$adresse = "";
		$ville = "";
		$cp = "";
		$mail = "";
		$Statut = "";
		$specialite = "";
		$mdp = "";
		$_SESSION['statemp'] = "personnelhopital";
		include("vue/v_formmedecin.php");
		break;
	}

	case 'modifmedecin' : 
	{
		$idemp = $_REQUEST['idemp'];
		$req = AfficheEmployeID($idemp);
		$ligne = mysql_fetch_array($req);
		$req2 = RecupLoginIdEmp($idemp);
		$ligne2 = mysql_fetch_array($req2);
		$mdp = $ligne2['mdp'];
		$nom = $ligne['nomemp'];
		$prenom = $ligne['preemp'];
		$datenaiss = $ligne['datenaissemp'];
		$sexe = $ligne['sexeemp'];
		$tel = $ligne['telemp'];
		$adresse =$ligne['adremp'];
		$ville = $ligne['villemp'];
		$cp = $ligne['cpemp'];
		$mail = $ligne['mailemp'];
		$Statut = $ligne['statemp'];
		$specialite = $ligne['numsec'];
		$_SESSION['statemp'] = "personnelhopital";
		include("vue/v_formmedecin.php");
		break;
	}

	case 'suppmedecin' : 
	{
		$idemp = $_REQUEST['idemp'];
		$req = AfficheEmployeID($idemp);
		$ligne = mysql_fetch_array($req);
		$req2 = RecupLoginIdEmp($idemp);
		$ligne2 = mysql_fetch_array($req2);
		$mdp = $ligne2['mdp'];
		$nom = $ligne['nomemp'];
		$prenom = $ligne['preemp'];
		$datenaiss = $ligne['datenaissemp'];
		$sexe = $ligne['sexeemp'];
		$tel = $ligne['telemp'];
		$adresse =$ligne['adremp'];
		$ville = $ligne['villemp'];
		$cp = $ligne['cpemp'];
		$mail = $ligne['mailemp'];
		$Statut = $ligne['statemp'];
		$specialite = $ligne['numsec'];
		$_SESSION['statemp'] = "personnelhopital";
		include("vue/v_formmedecin.php");
		break;
	}

	case 'confirmajoutmed' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$datenaiss = $_POST['datenaiss'];
		$sexe = $_POST['Sexe'];
		$tel = $_POST['tel'];
		$adresse = $_POST['adresse'];
		$ville = $_POST['ville'];
		$cp = $_POST['cp'];
		$mail = $_POST['mail'];
		$Statut = $_POST['Statut'];
		$specialite = $_POST['specialite'];
		$mdp = $_POST['mdp'];
		$nom2 = strtolower($nom);
		$prenom2 = strtolower($prenom);
		$login = $nom2 . '.' . $prenom2[0];
		InsertMedecin($nom, $prenom, $datenaiss, $sexe, $adresse, $ville, $cp, $tel, $mail, $specialite, $Statut, $login, $mdp);
		include("vue/v_medecins.php");
		break;
	}

	case 'confirmmodifmed' :
	{
		$idemp = $_REQUEST['idemp'];
		$_SESSION['statemp'] = "personnelhopital";
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$datenaiss = $_POST['datenaiss'];
		$sexe = $_POST['Sexe'];
		$tel = $_POST['tel'];
		$adresse = $_POST['adresse'];
		$ville = $_POST['ville'];
		$cp = $_POST['cp'];
		$mail = $_POST['mail'];
		$Statut = $_POST['Statut'];
		$specialite = $_POST['specialite'];
		ModifierEmploye($idemp, $nom, $prenom, $datenaiss, $sexe, $adresse, $ville, $cp, $tel, $mail, $specialite, $Statut);
		include("vue/v_medecins.php");
		break;
	}

	case 'confirmsuppmed' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idemp = $_POST['idemp'];
		DropMedecin($idemp);
		include("vue/v_medecins.php");
		break;
	}

	case 'detailsM' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idemp = $_POST['idemp'];
		$req = AfficheEmployeID($idemp);
		$req2 = AffichePatientEmp($idemp);
		$req3 = AfficheSecteurEmp($idemp);
		include("vue/v_detailsM.php");
		break;
	}

	case 'patient' : 
	{
		$_SESSION['statemp'] = "personnelhopital";
		$req = AffichePatient();
		include("vue/v_patients.php");
		break;
	}

	case 'detailsP' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_REQUEST['idpat'];
		$req = AffichePatientID($idpat);
		$ligne = mysql_fetch_array($req);
		$req2 = AfficheSuivisID($idpat);
		$ligne2 = mysql_fetch_array($req2);
		$req3 = AfficheSuivisID($idpat);
		if ($ligne['idemp'] != "NULL")
		{
			$idemp = $ligne['idemp'];
			$req4 = AfficheEmployeID($idemp);
			$ligne4 = mysql_fetch_array($req4);
		}
		include("vue/v_detailsP.php");
		break;
	}
	
	case 'ajoutpatient' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$nomP = "";
		$prenomP = "";
		$datenaissP = "";
		$telP = "";
		$SexeP = "";
		$adresseP = "";
		$villeP = "";
		$cpP = "";
		$mailP = "";
		$chambre = "";
		$nomR = "";
		$prenomR = "";
		$datenaissR = "";
		$telR = "";
		$SexeR = "";
		$adresseR = "";
		$villeR = "";
		$cpR = "";
		$mailR = "";
		$medtraitant = "";
		include("vue/v_formpatient.php");
		break;
	}
	
	case 'ajoutpatient2' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$nomP = $_POST['nomP'];
		$prenomP = $_POST['prenomP'];
		$datenaissP = $_POST['datenaissP'];
		$sexeP = $_POST['SexeP'];
		$telP = $_POST['telP'];
		$adresseP = $_POST['adresseP'];
		$villeP = $_POST['villeP'];
		$cpP = $_POST['cpP'];
		$mailP = $_POST['mailP'];
		$secteur = $_POST['Secteur'];
		$nomR = $_POST['nomR'];
		$prenomR = $_POST['prenomR'];
		$datenaissR = $_POST['datenaissR'];
		$sexeR = $_POST['SexeR'];
		$telR = $_POST['telR'];
		$adresseR = $_POST['adresseR'];
		$villeR = $_POST['villeR'];
		$cpR = $_POST['cpR'];
		$mailR = $_POST['mailR'];
		$req = AfficheMedecin($secteur);
		$req2 = AfficheChambre($secteur);
		include("vue/v_formpatient2.php");
		break;
	}	

	case 'modifpatient' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_REQUEST['idpat'];
		$req = AffichePatientID($idpat);
		$ligne = mysql_fetch_row($req);
		$nomP = $ligne[1];
		$prenomP = $ligne[2];
		$datenaissP = $ligne[3];
		$SexeP = $ligne[4];
		$telP = $ligne[5];
		$adresseP = $ligne[6];
		$villeP = $ligne[7];
		$cpP = $ligne[8];
		$mailP = $ligne[9];
		$nomR = $ligne[10];
		$prenomR = $ligne[11];
		$datenaissR = $ligne[12];
		$SexeR = $ligne[13];
		$telR = $ligne[14];
		$adresseR = $ligne[15];
		$villeR = $ligne[16];
		$cpR = $ligne[17];
		$mailR = $ligne[18];
		include("vue/v_formpatient.php");
		break;
	}	
	
	case 'suppatient' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_REQUEST['idpat'];
		$req = AffichePatientID($idpat);
		$ligne = mysql_fetch_row($req);
		$nomP = $ligne[1];
		$prenomP = $ligne[2];
		$datenaissP = $ligne[3];
		$SexeP = $ligne[4];
		$telP = $ligne[5];
		$adresseP = $ligne[6];
		$villeP = $ligne[7];
		$cpP = $ligne[8];
		$mailP = $ligne[9];
		$nomR = $ligne[10];
		$prenomR = $ligne[11];
		$datenaissR = $ligne[12];
		$SexeR = $ligne[13];
		$telR = $ligne[14];
		$adresseR = $ligne[15];
		$villeR = $ligne[16];
		$cpR = $ligne[17];
		$mailR = $ligne[18];
		include("vue/v_formpatient.php");
		break;
	}

	case 'confirmajoutpat' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$nomP = $_POST['nomP'];
		$prenomP = $_POST['prenomP'];
		$datenaissP = $_POST['datenaissP'];
		$SexeP = $_POST['SexeP'];
		$telP = $_POST['telP'];
		$adresseP = $_POST['adresseP'];
		$villeP = $_POST['villeP'];
		$cpP = $_POST['cpP'];
		$mailP = $_POST['mailP'];
		$chambre = $_POST['chambre'];
		$nomR = $_POST['nomR'];
		$prenomR = $_POST['prenomR'];
		$datenaissR = $_POST['datenaissR'];
		$SexeR = $_POST['SexeR'];
		$telR = $_POST['telR'];
		$adresseR = $_POST['adresseR'];
		$villeR = $_POST['villeR'];
		$cpR = $_POST['cpR'];
		$mailR = $_POST['mailR'];
		$medtraitant = $_POST['medtraitant'];
		InsertPatient($nomP, $prenomP, $datenaissP, $SexeP, $telP, $adresseP, $villeP, $cpP, $mailP, $chambre, $nomR, $prenomR, $datenaissR, $SexeR, $telR, $adresseR, $villeR, $cpR, $mailR, $medtraitant, $_SESSION['idemp']);
		$req = AffichePatient();
		include("vue/v_patients.php");
		break;
	}

	case 'confirmmodifpat' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_POST['idpat'];
		$nomP = $_POST['nomP'];
		$prenomP = $_POST['prenomP'];
		$datenaissP = $_POST['datenaissP'];
		$SexeP = $_POST['SexeP'];
		$telP = $_POST['telP'];
		$adresseP = $_POST['adresseP'];
		$villeP = $_POST['villeP'];
		$cpP = $_POST['cpP'];
		$mailP = $_POST['mailP'];
		$nomR = $_POST['nomR'];
		$prenomR = $_POST['prenomR'];
		$datenaissR = $_POST['datenaissR'];
		$SexeR = $_POST['SexeR'];
		$telR = $_POST['telR'];
		$adresseR = $_POST['adresseR'];
		$villeR = $_POST['villeR'];
		$cpR = $_POST['cpR'];
		$mailR = $_POST['mailR'];
		ModifierPatient($idpat, $nomP, $prenomP, $datenaissP, $SexeP, $telP, $adresseP, $villeP, $cpP, $mailP, $nomR, $prenomR, $datenaissR, $SexeR, $telR, $adresseR, $villeR, $cpR, $mailR);
		$req = AffichePatient();
		include("vue/v_patients.php");
		break;
	}

	case 'confirmsuppat' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_POST['idpat'];
		DropPatient($idpat);
		$req = AffichePatient();
		include("vue/v_patients.php");
		break;
	}
	
	case 'detailsS' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_REQUEST['idpat'];
		$numsuivis = $_REQUEST['numsuivis'];
		$req = AfficheSuivisIdNum($idpat, $numsuivis);
		$ligne = mysql_fetch_array($req);
		$idemp = $ligne['idemp'];
		$req2 = AfficheEmployeID($idemp);
		$ligne2 = mysql_fetch_array($req2);
		$req3 = AffichePatientID($idpat);
		$ligne3 = mysql_fetch_array($req3);
		$idemp2 = $ligne3['idemp'];
		$req4 = AfficheSecteurEmp($idemp);
		$ligne4 = mysql_fetch_array($req4);
		$req5 = AfficheEmployeID($idemp2);
		$ligne5 = mysql_fetch_array($req5);
		include("vue/v_detailsS.php");
		break;
	}
	
	case 'suivis' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_POST['idpat'];
		$req = AffichePatientID($idpat);
		$req2 = AfficheMed();
		$req3 = AfficheCham();
		include_once("vue/v_suivis.php");
		break;
	}
	
	case 'confirmsuivis' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		$idpat = $_POST['idpat'];
		$etat = $_POST['etat'];
		$commentaire = $_POST['commentaire'];
		$InsertionSuivis = InsertSuivis($idpat, $etat, $commentaire, $_SESSION['idemp']);
		$req = AffichePatient();
		include("vue/v_patients.php");
		break;
	}

	case 'plan' :
	{
		$_SESSION['statemp'] = "personnelhopital";
		include("vue/v_plan.php");
		break;
	}
}
?>