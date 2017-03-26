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
			$req = AfficheEmployeID($idemp);
			$ligne = mysql_fetch_array($req);
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
						  <td style="float: left;"> <legend><img src="ressources/profil.png" alt="monprofil"/> </br> Informations personnelles</legend></td>
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
					$req = AffichePatientEmp($idemp);
					$row = mysql_num_rows($req);
					if ($ligne['statemp'] == "Médecin" && $row != 0)
					{
						 ?>
						<table>
							<tr>
						  	<td align="left" width ="50%"><legend><img src="ressources/patient.png" alt="patients"/> </br> Patients</legend></td>
							</tr>
					
						<?php
						for($i = 0; $i<$row; $i++)
						{ 	
							$ligne2 = mysql_fetch_array($req); ?>
							<tr>
								<td align="left"> <?php echo $ligne2['nompat'] ?> </td>
								<td align="left"> <?php echo $ligne2['prepat'] ?> </td>
								<td align="left"> <a href="index.php?statut=personnelhopital&action=detailsP&idpat=<?php echo $ligne2['idpat']; ?> "> <img src="ressources/infoS.png" width=auto height=22px>  <a/> </td>
							</tr>
							<?php
						}
					?>
					</table>
					<?php
					}
					?>
		</div>
		<div align="right">
			<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=modifprofil&idemp=<?php echo $_SESSION['idemp'];?>">
				<button type="submit" value="<?php $_SESSION['modif'] ='modifierprofil';?>"> 
						<img src="ressources/edit.png" class="images"> 
				</button>
			</form>
		</div>
	</body>
</html>