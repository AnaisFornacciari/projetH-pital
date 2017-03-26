<html>

	<head>
   	 	<title>Hôpital</title>
		<link rel="icon" type"image/png" href="ressources/hopital.png">
		<link href="ressources/om2.css" rel="stylesheet" media="screen">
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
		<h2>Patients</h2>
 
   		<div class="php">
   					   
			<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=confirmajoutpat"> <br/><br/>
				<input type="hidden" name="nomP" value= "<?php echo $nomP ?>" />
				<input type="hidden" name="prenomP" value= "<?php echo $prenomP ?>" />
				<input type="hidden" name="datenaissP" value= "<?php echo $datenaissP ?>" />
				<input type="hidden" name="SexeP" value= "<?php echo $sexeP ?>" />
				<input type="hidden" name="telP" value= "<?php echo $telP ?>" />
				<input type="hidden" name="adresseP" value= "<?php echo $adresseP ?>" />
				<input type="hidden" name="villeP" value= "<?php echo $villeP ?>" />
				<input type="hidden" name="cpP" value= "<?php echo $cpP ?>" />
				<input type="hidden" name="mailP" value= "<?php echo $mailP ?>" />
				<input type="hidden" name="nomR" value= "<?php echo $nomR ?>" />
				<input type="hidden" name="prenomR" value= "<?php echo $prenomR ?>" />
				<input type="hidden" name="datenaissR" value= "<?php echo $datenaissR ?>" />
				<input type="hidden" name="SexeR" value= "<?php echo $sexeR ?>" />
				<input type="hidden" name="telR" value= "<?php echo $telR ?>" />
				<input type="hidden" name="adresseR" value= "<?php echo $adresseR ?>" />
				<input type="hidden" name="villeR" value= "<?php echo $villeR ?>" />
				<input type="hidden" name="cpR" value= "<?php echo $cpR ?>" />
				<input type="hidden" name="mailR" value= "<?php echo $mailR ?>" />
				
				<div align="left">
					
					<h5><b> Médecin traitant </b></h5>
					<hr align="left" width="50%"/>
					<br/>
			
					<table>	
						<tr>
							<td align="right">
								<select name="medtraitant">
									<option> --- </option>
									<?php
									$num = mysql_num_rows($req);
									for($i = 0; $i < $num; $i++)
									{
										$ligne = mysql_fetch_array($req); ?> 
										<option value = <?php echo $ligne['idemp']; ?> > <?php echo $ligne['nomemp'];?> </option>
									<?php
									}
									?>
								</select>
							</td>
						</tr>
					</table>
					
					<br/><br/>
					<hr size="3" color="black">
					<br/><br/>
					<h5><b> Chambre </b></h5>
					<hr align="left" width="50%"/>
					<br/>
					
					<table>
						<tr>
							<td align="right">
								<select name="chambre">
									<option  value = "0"> --- </option>
									<?php
									$num2 = mysql_num_rows($req2);
									for($i = 0; $i < $num2; $i++)
									{
										$ligne2 = mysql_fetch_array($req2); ?> 
										<option value = <?php echo $ligne2['numcham']; ?> > <?php echo $ligne2['numcham'];?> </option>
									<?php
									}
									?>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div align=center>
					<table>
						<tr>
							<td>
									<input type="submit" value="Valider">
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