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
		<h2>Nouveau suivi</h2>
 
   		<div class="php">
		
				<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmsuivis"> <br/><br/>
				<input type="hidden" name="idpat" value= "<?php echo $idpat ?>" />
				
					<div align="left">
					
						<table>
						
							<tr>
								<td align="right">
									<label for="login">Médecin : </label>
								</td>
								<td align="right">
									<?php
									if($result = mysql_fetch_object($req))
									{
										?>
										<select name="medecin">
											<option  value = "0"> --- </option>
											<?php
											$num = mysql_num_rows($req2);
											for($i = 0; $i < $num; $i++)
											{
												$ligne2 = mysql_fetch_array($req2); ?> 
												<option value = "<?php echo $ligne2['idemp']; ?>" <?php if(($result->idemp)==$ligne2['idemp']) { echo 'selected="selected"' ; } ?> > <?php echo $ligne2['nomemp'];?> </option>
											<?php
											}
											?>
										</select>
								</td>
							</tr>
								
							<tr>
								<td align="right">
									<label for="login">Chambre :</label>
								</td>
								<td align="right">
									<select name="chambre">
										<option  value = "0"> --- </option>
										<?php
										$num2 = mysql_num_rows($req3);
										for($i = 0; $i < $num2; $i++)
										{
											$ligne3 = mysql_fetch_array($req3); ?>
											<option value = <?php echo $ligne3['numcham']; ?> <?php if(($result->idpat)==$ligne3['idpat']) { echo 'selected="selected"' ; } ?>> <?php echo $ligne3['numcham'];?> </option>
										<?php
										}
									}
									?>
									</select>
								</td>
							</tr>
							
							<tr>
								<td align="right">
									<label for="login">Etat :</label>
								</td>
								<td align="right">
									<select name = "etat"/>
										<option value = ""> --- </option>
										<option value = "Bon"> Bon </option>
										<option value = "Moyen"> Moyen </option>
										<option value = "Mauvais"> Mauvais </option>
										<option value = "Très mauvais"> Très mauvais </option>
								</td>
							</tr>
							
							<tr>
								<td>
									</br>
								</td>
							</tr>
							
							<tr>
								<td align="right">
									<label for="mdp">Commentaire :</label>
								</td>
								<td>
									
								</td>
							</tr>
							
							<tr>
								<td>
								
								</td>
								<td align="right">
									<textarea name="commentaire" cols="100" rows="10" placeholder="Commentaire du suivi... "></textarea>
								</td>
							</tr>
						</table>
					</div>
					<div align=center>
						<table>
							<tr>
								<td>
									<button type="submit">Valider</button>
									<input type="reset" value="Annuler"/>
								</td>
							</tr>
						</table>
					</div>
				</form>
   		</div>
        <em></em>
      	</p>
    </div>
	</body>
</html>