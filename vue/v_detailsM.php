<html>
	<head>
	  	<title>Hôpital</title>
		<link rel="icon" type"image/png" href="ressources/hopital.png">
	  	<link href="ressources/om.css" rel="stylesheet" media="screen">
		<meta charset='utf-8'>
	</head>

	<div class="titre">
		<h1>
			<a href="index.php?statut=<?php echo$_SESSION['statemp']?>">HÔPITAL</a>
		</h1>
   	</div>

<body id="news">
	<div id="nav-container">
		<h1>
			<a href="">Hôpital</a>
		</h1>
		<ul id="nav">
			<li class="studio">
				<a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=monprofil">Mon profil</a>
			</li>
				
			<li class="studio">
				<a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=patient">Patients</a>
			</li>
				
			<li class="press">
				<a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=medecins">Médecins</a>
			</li>
				
			<li class="monograph">
				<a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=plan">Plan</a>
			</li>
		</ul>
	</div>
	
	<div id="news-holder">
		<?php
			$ligne = mysql_fetch_array($req);
			$ligne2 = mysql_fetch_array($req3);
		?>
		<h2>
		<div style="float:left;"> <?php echo $ligne['statemp'] ?> </div>
		<div style="float:right;"> <?php echo $ligne2['nomsec'] ?></div>
		</br>
		</h2>

		<div class="news-item">

			<div class="block">

				<div class="texte">
					<table>
						<tr>
						  <td style="float: left;"> <legend> <img src="ressources/profil.png" alt="monprofil"/> </br> Informations personnelles</legend></td>
						 </tr>
						
						<tr>
						  <td></br></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="identifiant">Identifiant :</label></td>
						  <td align="left"> <?php echo $ligne['idemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="nom">Nom :</label></td>
						  <td align="left"> <?php echo $ligne['nomemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="prenom">Prénom :</label></td>
						  <td align="left"> <?php echo $ligne['preemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="datenaiss">Date de Naissance :</label></td>
						  <td align="left"> <?php echo $ligne['datenaissemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="sexe">Sexe :</label></td>
						  <td align="left"> <?php echo $ligne['sexeemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="tel">Téléphone :</label></td>
						  <td align="left"> <?php echo $ligne['telemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="adresse">Adresse :</label></td>
						  <td align="left"> <?php echo $ligne['adremp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="ville">Ville :</label></td>
						  <td align="left"> <?php echo $ligne['villemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="cp">Code Postal :</label></td>
						  <td align="left"> <?php echo $ligne['cpemp'] ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="mail">Mail :</label></td>
						  <td align="left"> <?php echo $ligne['mailemp'] ?> </td>
						</tr>
					</table> 
					</br>
					<?php
					$row = mysql_num_rows($req2);
					if ($ligne['statemp'] == "Médecin" && $row != 0)
					{
						 ?>
						<table>
							<tr>
						  	<td align="left" width ="50%"><legend color="grey"><img src="ressources/patient.png" alt="patients"/> </br>Patients</legend></color></td>
							</tr>
					
						<?php
						for($i = 0; $i<$row; $i++)
						{ 	
							$ligne3 = mysql_fetch_array($req2); ?>
							<tr>
								<td align="left"> <?php echo $ligne3['nompat'] ?> </td>
								<td align="left"> <?php echo $ligne3['prepat'] ?> </td>
								<td align="left"> <a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=detailsP&idpat=<?php echo $ligne3['idpat']; ?>"> <img src="ressources/infoS.png" width=auto height=22px>  <a/> </td>
							</tr>
							<?php
						}
					?>
					</table>
					<?php
					}
					?>
			</div>
			<?php
			if($_SESSION['statemp'] != "Interne")
			{
				?>
				<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=modifmedecin&idemp=<?php echo $ligne['idemp'];?>">
					<div style="float:right;">
						<button type="submit"> <img src="ressources/edit.png" class="images"> </button>
						<button type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=suppmedecin&idemp=<?php echo $ligne['idemp'];?>" width="10px" height="10px"><img src="ressources/delete.png" class="images"></button>
					 </div>
			</form>
			<?php
			}
			?>
	</body>
</html>