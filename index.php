<?php
include("modele/m_fonction.php");
session_start();

if(!isset($_REQUEST['statut']))
{
	$statut = 'connexion';
}
else
{
	$statut = $_REQUEST['statut'];
}

switch($statut)
{
	case 'connexion' :
	{
		include("controleur/c_connexion.php");
		break;
	}
	
	case 'personnelhopital' :
	{
		include("controleur/c_personnelhopital.php");
		break;
	}
	
	case 'Interne' :
    {
        include("controleur/c_interne.php");
        break;
    }

	case 'deconnexion' :
	{
		include("controleur/c_deconnexion.php");
		break;
	}

	default :
	{ 
		include("controleur/c_connexion.php");
		break;
	}
}
?>