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
			<h2>Formulaire employé</h2>
		 
			<div class="php">

				<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp']?>&action=confirmajoutmed"> <br/><br/>
				<?php
				if($action== "modifmedecin" || $action == "suppmedecin")
				{
				?>
				<input type="hidden" name="idemp" value="<?php echo $idemp?>">
				<?php
				}
				?>
					<div align="left">
		  
						<table>
							<tr>
								<td align="right">
									<label for="nom">Nom :</label>
								</td>
								<td align="right">
									<input type="text" value="<?php echo $nom;?>" name="nom" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
					
							<tr>
								<td align="right">
									<label for="prenom">Prénom :</label>
								</td>
								<td align="right">
									<input type="text" value="<?php echo $prenom;?>" name="prenom" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
					
							<tr>
								<td align="right">
									<label for="datenaiss">Date de Naissance :</label>
								</td>
								<td align="right">
									<input type="date" value="<?php echo $datenaiss;?>" name="datenaiss" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
						
							<tr>
								<td align="right">
									<label for="sexe">Sexe :</label>
								</td>
								<td align="right">
									<input type="radio" name="Sexe" value="H" <?php if($sexe=="H") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>Homme </br>
									<input type="radio" name="Sexe" value="F" <?php if($sexe=="F") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>Femme
								</td>
							</tr>
									
							<tr>
								<td>
									</br>
								</td>
							</tr>
							
							<tr>
								<td align="right">
									<label for="tel">Téléphone :</label>
								</td>
								<td align="right">
										<input type="number" value="<?php echo $tel;?>" name="tel" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
					
							<tr>
								<td align="right">
									<label for="adresse">Adresse :</label>
								</td>
								<td align="right">
									<input type="text" value="<?php echo $adresse;?>" name="adresse" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
					
							<tr>
								<td align="right">
									<label for="ville">Ville :</label>
								</td>
								<td align="right">
									<input type="text" value="<?php echo $ville;?>" name="ville" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
				
							<tr>
								<td>
									</br>
								</td>
							</tr>
				
							<tr>
								<td align="right">
									<label for="cp">Code Postal :</label>
								</td>
								<td align="right">
									<input type="number" value="<?php echo $cp;?>" name="cp" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
					
							<tr>
								<td align="right">
									<label for="mail">Mail :</label>
								</td>
								<td align="right">
									<input type="text" value="<?php echo $mail;?>" name="mail" <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/>
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
				
							<tr>
								<td align="right">
									<label for="statut">Statut :</label>
								</td>
								<td align="right">
									<input type="radio" name="Statut" value="Médecin" <?php if($Statut=="Médecin") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Médecin </br>
									<input type="radio" name="Statut" value="Infirmier"<?php if($Statut=="Infirmier") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Infirmier(/ière) </br>
									<input type="radio" name="Statut" value="Résident"<?php if($Statut=="Résident") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Résident(e) </br>
									<input type="radio" name="Statut" value="Interne"<?php if($Statut=="Interne") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Interne
								</td>
							</tr>
				
							<tr>
								<td>
									</br>
								</td>
							</tr>
				
							<tr>
								<td align="right">
										<label for="specialte">Spécialité :</label>
								</td>
								<td align="right">
									<input type="radio" name="specialite" value="1" <?php if($specialite =="1") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Pédiatrie </br>
									<input type="radio" name="specialite" value="2"<?php if($specialite =="2") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Neurologie </br>
									<input type="radio" name="specialite" value="3"<?php if($specialite =="3") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Odontologie </br>
									<input type="radio" name="specialite" value="4"<?php if($specialite =="4") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Pneumologie </br>
									<input type="radio" name="specialite" value="5"<?php if($specialite =="5") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Dermatologie </br>
									<input type="radio" name="specialite" value="6"<?php if($specialite =="6") { echo 'checked="checked"' ; } ?> <?php if($action == 'suppmedecin') { ?> disabled="disabled" <?php } ?>/> Cardiologie
								</td>
							</tr>
					
							<tr>
								<td>
									</br>
								</td>
							</tr>
							<?php
							if($action == "ajoutmedecin")
							{
							?>
							<tr>
								<td align="right">
									<label for="mdp">Mot de Passe :</label>
								</td>
								<td align="right">
									<input type="password" value="<?php echo $mdp;?>" name="mdp"/>
								</td>
							</tr>
							<?php
							}
							if ($action == 'modifprofil')
							{
							?>
							<tr>
								<td align="right">
									<label for="mdp">Nouveau mot de passe :</label>
								</td>
								<td align="right">
									<input type="password" placeholder="Mot de passe" name="mdp"/>
								</td>
							</tr>
							<?php
							}
							?>
						</table>
					</div>		
					<div align=center>
						<table>
							<tr>
								<td>
							        <?php
							        if ($action == 'suppmedecin')
							        {
							         ?>
							          <input type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmsuppmed">
							         <?php 
							        }
							        else if ($action == 'modifmedecin')
							        {
							         ?>
							          <input type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmmodifmed">
							          <input type="reset" value="Annuler"/>
							         <?php
							        }
							        else if ($action == 'ajoutmedecin')
							        {
							         ?>
							          <input type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmajoutmed">
							          <input type="reset" value="Annuler"/>
							          
							         <?php
							        }
							        else if ($action== 'modifprofil')
							        {
							        ?>
							        <input type="submit" formaction="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmmodifprofil">
							          <input type="reset" value="Annuler"/>
							        <?php
							        }
							        ?>
						       </td>
							</tr>
						</table>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>