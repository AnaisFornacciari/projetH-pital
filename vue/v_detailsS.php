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
		<div style="float:left;"> <?php echo $ligne3['nompat'] ?> <?php echo $ligne3['prepat'];?> </div>
		<div style="float:right;">  N°<?php echo $ligne['numsuivis'] ?></div>
		</br>
		</h2>

		<div class="news-item">

			<div class="block">

				<div class="texte">
					<div style="float:right;">
					<?php
					if ($ligne3['idemp'] != "NULL")
					{
						?>
						Médecin traitant : <?php echo $ligne5['nomemp'];?> <?php echo $ligne5['preemp'];?>, </br>
						<?php
					}
					?>
						par <?php echo $ligne2['nomemp'];?> <?php echo $ligne2['preemp'];?>
					</div> 
					<table>
					<tr>
						<td> Secteur : <?php echo $ligne4['nomsec'];?> </td>
					</tr>
					
					<tr>
						<td> </br> </td>
					</tr>
					<?php
					if ($ligne['etat'] != "")
					{
						?>
						<tr>
							<td> Etat : <?php echo $ligne['etat'];?> </td>
						<?php
					}
					?>
					<tr>
						<td> </br> </td>
					</tr>
					
					<tr>
						<td> </br> </td>
					</tr>
						
					<tr> 
						<td>  <?php echo $ligne['commentaire'];?>   </td>
					</tr>
					</table>
				</div>
				<div style="float:left;">
					<a href="index.php?statut=<?php echo $_SESSION['statemp'];?>&action=detailsP&idpat=<?php echo $ligne['idpat']; ?>" width="10px" height="10px"><img src="ressources/retour.png" class="images"> </a>
				</div>
				<div class="item-description">
					<p>
						<em></em>
					</p>
				</div>
			</div>
			
		</div>
	</div>
</body>

</html>