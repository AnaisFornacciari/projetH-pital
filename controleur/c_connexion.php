<html>
	<head>
		<link href="ressources/css_accueil.css" rel="stylesheet" media="screen">
	</head>
</html>
<?php
if(!isset($_REQUEST['action']))
{
    $action = 'connexion';
}
else
{
	$action = $_REQUEST['action'];
}
switch($action)
{
	case 'connexion' :
	{
		include("vue/v_connexion.php");
		break;
	}

	case 'confirmationC' :
    {
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $sql_cnx = RecupIdConnexion($login, $mdp);
		$idConnexion = mysql_num_rows($sql_cnx);
        $idC = mysql_fetch_array($sql_cnx);
		if($idConnexion == 0)
		{
			$_SESSION['erreur'] = "Nom d'utilisateur ou mot de passe erroné.";
			header("Location:index.php");
		}
		else
		{
			if($login == $idC['login'] && $mdp == $idC['mdp'])
			{
				$req = ObtentionStatEmp($login, $mdp);
				$sqli = mysql_fetch_array($req);
				$statt = $sqli['statemp']; 
				$idemp = $sqli['idemp'];
				$req2 = AfficheEmployeID($idemp);
				$infoemp = mysql_fetch_array($req2);
				if($statt == "Infirmier" || $statt == "Médecin" || $statt == "Résident")
				{
					$_SESSION["login"] = $login;
					$_SESSION["mdp"] = $mdp;
					$_SESSION["idemp"] = $idemp;
					$_SESSION["nomemp"] = $infoemp['nomemp'];
					$_SESSION["preemp"] = $infoemp['preemp'];
					$_SESSION["statemp"] = "personnelhopital";
					$_SESSION["numsecemp"] = $infoemp['numsec'];
					header("Location:index.php?statut=personnelhopital");    
				}
				else if($statt == "Interne")
				{
					$_SESSION["login"] = $login;
					$_SESSION["mdp"] = $mdp;
					$_SESSION["idemp"] = $idemp;
					$_SESSION["nomemp"] = $infoemp['nomemp'];
					$_SESSION["preemp"] = $infoemp['preemp'];
					$_SESSION["statemp"] = $statt;
					$_SESSION["numsecemp"] = $infoemp['numsec'];
					header('Location: index.php?statut=Interne'); 
				}
			}
		}
		
    }
}
?>

