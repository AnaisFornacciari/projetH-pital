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
		$_SESSION['statemp'] = "Interne"; 
		include("vue/v_accueil.php");
		break;
	}

	case 'patient' : 
	{
		$_SESSION['statemp'] = "Interne";
		$req = AffichePatient();
		include_once("vue/v_patients.php");
		break;
	}

	case 'medecins' :
	{
		$_SESSION['statemp'] = "Interne";
		include("vue/v_medecins.php");
		break;
	}

	case 'monprofil' :
	{
		$_SESSION['statemp'] = "Interne";
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
		$_SESSION['statemp'] = "Interne";
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

	case 'detailsP' :
	{
		$_SESSION['statemp'] = "Interne";
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

	case 'detailsM' :
	{
		$_SESSION['statemp'] = "Interne";
		$idemp = $_POST['idemp'];
		$req = AfficheEmployeID($idemp);
		$req2 = AffichePatientEmp($idemp);
		$req3 = AfficheSecteurEmp($idemp);
		include("vue/v_detailsM.php");
		break;
	}
	
	case 'suivis' :
	{
		$_SESSION['statemp'] = "Interne";
		$idpat = $_POST['idpat'];
		$req = AffichePatientID($idpat);
		$req2 = AfficheMed();
		$req3 = AfficheCham();
		include("vue/v_suivis.php");
		break;
	}
	
	case 'detailsS' :
	{
		$_SESSION['statemp'] = "Interne";
		$idpat = $_REQUEST['idpat'];
		$numsuivis = $_REQUEST['numsuivis'];
		$req = AfficheSuivisIdNum($idpat, $numsuivis);
		$ligne = mysql_fetch_array($req);
		$idemp = $ligne['idemp'];
		$req2 = AfficheEmployeID($idemp);
		$ligne2 = mysql_fetch_array($req2);
		$req3 = AffichePatientID($idpat);
		$ligne3 = mysql_fetch_array($req3);
		if ($ligne3['idemp'] != "NULL")
		{
			$idemp2 = $ligne3['idemp'];
			$req5 = AfficheEmployeID($idemp2);
			$ligne5 = mysql_fetch_array($req5);
		}
		$req4 = AfficheSecteurEmp($idemp);
		$ligne4 = mysql_fetch_array($req4);
		include("vue/v_detailsS.php");
		break;
	}
	
	case 'confirmsuivis' :
	{
		$_SESSION['statemp'] = "Interne";
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
		$_SESSION['statemp'] = "Interne";
		include("vue/v_plan.php");
		break;
	}
}
?>