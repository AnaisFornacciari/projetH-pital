<html>

	<head>
   	 	<title>Hôpital</title>
		<link rel="icon" type"image/png" href="ressources/hopital.png">
		<link href="ressources/om.css" rel="stylesheet" media="screen">
   	 	<meta charset='utf-8'>
    </head>

	<div class="titre">
	<h1><a href="index.php?statut=<?php echo$_SESSION['statemp']?>"> HÔPITAL</a></h1>
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
		<div style="float:left;">Patients</div>
		<?php
		  if($_SESSION['statemp'] != 'Interne')
		  {
			  ?>
			  <div style="float:right; margin:auto;">
			   <a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=ajoutpatient">
				<img src="ressources/addMP.png" class="imagesA">
			   </a>
			  </div> 
			  <?php
		  }
		  ?>
		</br>
	</h2>
	
		<div class="news-item">
			
			<form method="post" action="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=detailsP">
				<?php
					$row = mysql_num_rows($req);
					for($i = 0; $i<$row; $i++)
					{ 	
						$ligne = mysql_fetch_array($req);
						?> 
						<div class="block">
							<div class="texte">
								<br/>
								<table>
									<tr>
										<td> Nom : </td>
										<td> &nbsp &nbsp </td>
										<td> <?php echo $ligne['nompat'] ?> </td>
									</tr>
									
									<tr> 
										<td> Prénom : </td>
										<td> &nbsp &nbsp </td>
										<td> <?php echo $ligne['prepat'] ?> </td>
									</tr>
									
									<tr> 
										<td> Date de naissance : </td>
										<td> &nbsp &nbsp </td>
										<td> <?php echo $ligne['datenaisspat'] ?> </td>
									</tr>
									
									<tr> 
										<td> Sexe : </td>
										<td> &nbsp &nbsp </td>
										<td> <?php echo $ligne['sexepat'] ?> </td>
									</tr>
									
									<div style="float:right;"> <button type="submit" name="idpat" value="<?php echo $ligne['idpat']; ?>"> Détails </button> </div>
									
								</table>
							</div>
							
						</div>
						<?php
					}
				?>
			
			<div class="item-description">
      	<p>
        	<em></em>
      	</p>
			</div>
		</div>
	</div>
</body>
</html>
