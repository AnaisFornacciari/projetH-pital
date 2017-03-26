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
		
			<h2>
			<div style="float:left;">Médecins</div>
			<?php
		   if($_SESSION['statemp'] != 'Interne')
		   {
			   ?>
			   <div style="float:right; margin: auto;">
				<a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=ajoutmedecin">
				 <img src="ressources/addMP.png" class="imagesA">
				</a>
			   </div>
			   <?php
		   }
		   ?>
			</br>
			</h2>
		   
			<div class="news-item">								
				<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=detailsM">
					<?php
						$req3 = AfficheEmploye();
						$row3 = mysql_num_rows($req3);
						for($i = 0; $i<$row3; $i++)
						{ 	
							$ligne3 = mysql_fetch_array($req3);
							?> 
							<div class="block">
							
								<div class="texte">
									<br/>
									<table>
										<tr>
											<td> Nom : </td>
											<td> &nbsp &nbsp </td>
											<td> <?php echo $ligne3['nomemp'] ?> </td>
										</tr>
										
										<tr> 
											<td> Prénom : </td>
											<td> &nbsp &nbsp </td>
											<td> <?php echo $ligne3['preemp'] ?> </td>
										</tr>
										
										<tr> 
											<td> Date de naissance : </td>
											<td> &nbsp &nbsp </td>
											<td> <?php echo $ligne3['datenaissemp'] ?> </td>
										</tr>
										
										<tr> 
											<td> Sexe : </td>
											<td> &nbsp &nbsp </td>
											<td> <?php echo $ligne3['sexeemp'] ?> </td>
										</tr>
										
										<div style="float:right;"> <button type="submit" name="idemp" value="<?php echo $ligne3['idemp'];?>">Détails</button> </div>
									</table>
								</div>
							</div>
							<?php
						}
					?>
				</form>
			</div>
		</div>
	</body>
</html>