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
	<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=modifpatient">	
	
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

		<h2>
		<div style="float:left;">Patient</div>
		<div style="float:right; margin:auto;"> <button type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=suivis" name="idpat" value="<?php echo $ligne['idpat']; ?>" width="10px" height="10px"><img src="ressources/addS.png" class="images"> </button> </a>
		</div>
		</br>
		</h2>

		<div class="news-item">

			<div class="block">

				<div class="texte">
					<?php 
					if ($ligne['idemp'] != null)
					{
					?>
					<div style="float:right;">
						<img src="ressources/profil.png" alt="monprofil"/></br>Médecin traitant : <?php echo $ligne4['nomemp'];?> <?php echo $ligne4['preemp'];?>
					</div> 
					<?php
					}
					?>
					<div id="pat">
					<legend><img src="ressources/patient.png" alt="patients"/> </br>Informations personnelles</legend>
					</br>
						<table>
						<tr>
						  <td align="left"><legend>Patient</legend></td>
						</tr>

						<tr>
						  <td><label for="identifiant">Identifiant :</label></td>
						  <td> <?php echo $ligne['idpat']; ?> </td>
						</tr>
						
						<tr>
						  <td><label for="nom">Nom :</label></td>
						  <td> <?php echo $ligne['nompat']; ?> </td>
						</tr>
						
						<tr>
						  <td align="left"><label for="prenom">Prénom :</label></td>
						  <td><?php echo $ligne['prepat']; ?></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="datenaiss">Date de Naissance :</label></td>
						  <td><?php echo $ligne['datenaisspat'];?></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="sexe">Sexe :</label></td>
						  <td><?php echo $ligne['sexepat'];?></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="tel">Téléphone :</label></td>
						  <td><?php echo $ligne['telpat'];?></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="adresse">Adresse :</label></td>
						  <td><?php echo $ligne['adrpat'];?></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="ville">Ville :</label></td>
						  <td><?php echo $ligne['villpat'];?></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="cp">Code Postal :</label></td>
						  <td><?php echo $ligne['cppat'];?></td>
						</tr>
						
						<tr>
						  <td align="left"><label for="mail">Mail :</label></td>
						  <td><?php echo $ligne['mailpat'];?></td>
						</tr>
					</table>
					
					</br></br>
					
					</div>

					
					<div id="res">
						<table> 
							<tr> 
								<td align="left"><legend>Responsable</legend></td>
								
							</tr>

							<tr> 
								<td> </br> </td>
							</tr>
							
							<tr> 
								<td align="left"><label for="nom">Nom :</label></td>
								<td> <?php echo $ligne['nomres'];?> </td>
							</tr>

							<tr> 
								<td align="left"><label for="prenom">Prénom :</label></td>
								<td> <?php echo $ligne['preres'];?> </td>
							</tr>
					
							<tr> 
								<td align="left"><label for="datenaiss">Date de Naissance :</label></td>
								<td> <?php echo $ligne['datenaissres'];?> </td>
							</tr>
					
							<tr> 	
								<td align="left"><label for="sexe">Sexe :</label></td>
								<td> <?php echo $ligne['sexeres'];?> </td>
							</tr>
			
							<tr> 
								<td align="left"><label for="tel">Téléphone :</label></td>
								<td> <?php echo $ligne['telres'];?> </td>
							</tr>
					
							<tr> 
								<td align="left"><label for="adresse">Adresse :</label></td>
								<td> <?php echo $ligne['adrres'];?> </td>
							</tr>
					
							<tr> 
								<td align="left"><label for="ville">Ville :</label></td>
								<td> <?php echo $ligne['villres'];?> </td>
							</tr>
					
							<tr> 
								<td align="left"><label for="cp">Code Postal :</label></td>
								<td> <?php echo $ligne['cpres'];?> </td>
							</tr>
					
							<tr> 
								<td align="left"><label for="mail">Mail :</label></td>
								<td> <?php echo $ligne['mailres'];?> </td>
							</tr>
						</table>
					</div>
					
					<legend> <img src="ressources/suivi.png" alt="newsuivi"/>  </br> Historique médical</legend>
					</br>
					<table>
						<?php
						$row = mysql_num_rows($req3);
						for($i = 0; $i<$row; $i++)
						{ 	
							$ligne3 = mysql_fetch_array($req3);
							?>
							<tr> 
								<td> N° <?php echo $ligne3['numsuivis'];?> </td>
								<td> &nbsp; &nbsp; </td>
								<td> <?php echo $ligne3['datesuivis'];?> </td>
								<td> &nbsp; &nbsp; </td>
								<td> <a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=detailsS&idpat=<?php echo $ligne['idpat']; ?>&numsuivis=<?php echo $ligne3['numsuivis']; ?> "> <img src="ressources/infoS.png" width=auto height=22px>  </a> </td>
								
							</tr>
							<?php
						}
						?>
						</table>
					</div>
					<?php
					if ($_SESSION['statemp'] != "Interne")
					{
						?>
						<div style="float:right;">
							<button type="submit" name="idpat" value=" <?php echo $ligne['idpat']; ?>"> <img src="ressources/edit.png" class="images"> </button>
							<button type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=suppatient" name="idpat" value="<?php echo $ligne['idpat']; ?>" width="10px" height="10px"><img src="ressources/delete.png" class="images"> </button>
						</div>
						<?php
					}
					?>
					</form>
					<div class="item-description">
					  <p>
						<em></em>
					  </p>
					</div>
				</div>
			</div>
</body>

</html>