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
		<h2>Formulaire d'inscription patient</h2>
 
		<div class="php">
 
			<form method="post"> <br/><br/>
			<?php if($action != "ajoutpatient")
			{
				?>
				<input type="hidden" name="idpat" value= "<?php echo $idpat ?>" />
				<?php
			}
			?>
				<div align="left">
		
					<h5><b> Patient </b></h5>
					<hr align="left" width="50%"/>
					<br/>
			
					<table>
						<tr>
							<td align="right">
								<label for="nomP">Nom :</label>
							</td>
							<td align="right">
								<input type="text" name="nomP" value="<?php echo $nomP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> > 
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="prenomP">Prénom :</label>
							</td>
							<td align="right">
								<input type="text" name="prenomP" value="<?php echo $prenomP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> > 
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="datenaissP">Date de Naissance :</label>
							</td>
							<td align="right">
								<input type="date" name="datenaissP" value="<?php echo $datenaissP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> > 
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="sexeP">Sexe :</label>
							</td>
							<td align="right">
								<input type="radio" name="SexeP" value="H" <?php if($SexeP=="H") { echo 'checked="checked"' ; } if($action == 'suppatient') { ?> disabled="disabled" <?php } ?>/> Homme </br>
								<input type="radio" name="SexeP" value="F" <?php if($SexeP=="F") { echo 'checked="checked"' ; } if($action == 'suppatient') { ?> disabled="disabled" <?php } ?>/> Femme
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="telP">Téléphone :</label>
							</td>
							<td align="right">
								<input type="number" name="telP" value="<?php echo $telP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="adresseP">Adresse :</label>
							</td>
							<td align="right">
								<input type="text" name="adresseP" value="<?php echo $adresseP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> > 
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="villeP">Ville :</label>
							</td>
							<td align="right">
								<input type="text" name="villeP" value="<?php echo $villeP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> > 
							</td>
						</tr>
			
						<tr>
							<td>
								</br>
							</td>
						</tr>
			
						<tr>
							<td align="right">
								<label for="cpP">Code Postal :</label>
							</td>
							<td align="right">
								<input type="number" name="cpP" value="<?php echo $cpP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> > 
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="mailP">Mail :</label>
							</td>
							<td align="right">
								<input type="email" name="mailP" value="<?php echo $mailP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> > 
							</td>
						</tr>
						
						<?php 
						if($action == 'ajoutpatient')
						{
							?>
							<tr>
								<td>
									</br>
								</td>
							</tr>
				
							<tr>
								<td align="right">
									<label for="secteurP">Secteur admis :</label>
								</td>
								<td align="right">
									<input type="radio" name="Secteur" value="1"/> Pédiatrie </br>
									<input type="radio" name="Secteur" value="2"/> Neurologie </br>
									<input type="radio" name="Secteur" value="3"/> Odontologie </br>
									<input type="radio" name="Secteur" value="4"/> Pneumologie </br>
									<input type="radio" name="Secteur" value="5"/> Dermatologie </br>
									<input type="radio" name="Secteur" value="6"/> Cardiologie
								</td>
							</tr>
							<?php
						}
						?>
						
			
						<tr>
							<td>
								</br>
							</td>
						</tr>
					</table>
				
					<hr size="3" color="black">
					<br/><br/>
					<h5><b> Responsable </b></h5>
					<hr align="left" width="50%"/>
					<br/>
			
					<table>
						<tr>
							<td align="right">
								<label for="nomR">Nom :</label>
							</td>
							<td align="right">
								<input type="text" name="nomR" value="<?php echo $nomR; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="prenomR">Prénom :</label>
							</td>
							<td align="right">
								<input type="text" name="prenomR" value="<?php echo $prenomR; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="datenaissR">Date de Naissance :</label>
							</td>
							<td align="right">
								<input type="date" name="datenaissR" value="<?php echo $datenaissR; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="sexeR">Sexe :</label>
							</td>
							<td align="right">
								<input type="radio" name="SexeR" value="H" <?php if($SexeR=="H") { echo 'checked="checked"' ; }  if($action == 'suppatient') { ?> disabled="disabled" <?php } ?>/> Homme </br>
								<input type="radio" name="SexeR" value="F" <?php if($SexeR=="F") { echo 'checked="checked"' ; }  if($action == 'suppatient') { ?> disabled="disabled" <?php } ?>/> Femme
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="telR">Téléphone :</label>
							</td>
							<td align="right">
								<input type="number" name="telR" value="<?php echo $telR; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="adresseR">Adresse :</label>
							</td>
							<td align="right">
								<input type="text" name="adresseR" value="<?php echo $adresseR; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="villeR">Ville :</label>
							</td>
							<td align="right">
								<input type="text" name="villeR" value="<?php echo $villeR; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
			
						<tr>
							<td>
								</br>
							</td>
						</tr>
			
						<tr>
							<td align="right">
								<label for="cpR">Code Postal :</label>
							</td>
							<td align="right">
								<input type="number" name="cpR" value="<?php echo $cpP; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
				
						<tr>
							<td>
								</br>
							</td>
						</tr>
				
						<tr>
							<td align="right">
								<label for="mailR">Mail :</label>
							</td>
							<td align="right">
								<input type="email" name="mailR" value="<?php echo $mailR; ?>" <?php if($action == 'suppatient') { ?> disabled="disabled" <?php } ?> >
							</td>
						</tr>
					</table>
				</div>
				<div align=center>
					<table>
						<tr>
							<td>
								<?php
								if ($action == 'suppatient')
								{
									?>
										<input type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmsuppat">
									<?php 
								}
								else if ($action == 'modifpatient')
								{
									?>
										<input type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmmodifpat">
										<input type="reset" value="Annuler"/>
									<?php
								}
								else if ($action == 'ajoutpatient')
								{
									?>
										<input type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=ajoutpatient2">
										<input type="reset" value="Annuler"/>
										
									<?php
								}
								?>
							</td>
						</tr>
					</table>
				</div>
			</form>
			
        <em></em>
      	</p>
		</div>
  	</div>
</body>
</html>