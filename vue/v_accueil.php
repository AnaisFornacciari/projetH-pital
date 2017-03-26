<html>	
   	<head>
		<title>Hôpital</title>
		<link rel="icon" type="image/png" href="ressources/hopital.png">
		<link href="ressources/om.css" rel="stylesheet" media="screen">
		<meta charset='utf-8'>
	</head>
   		
	<body id="news">	
		<div class="titre">
		<h1>
			<a href="index.php?statut=<?php echo$_SESSION['statemp']?>"> HÔPITAL</a>
		</h1>
   	</div>	

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
				<div style="float:left;">
					Accueil 
				</div>

				<div style="float:right;margin : auto;">
					<a href="index.php?statut=deconnexion"> <img src="ressources/deconnexion.png" /> </a>
				</div>
				</br>
			</h2>
	
		<div class="news-item">
			<img class="thumbnail" src="ressources/hopital.jpg" alt="Hôpital" style="width: 100%;max-height 100%"/> 
				
				<div class="item-description">
					<p>
						<em></em>
					</p> 
				</div>
					
			</div>
		</div>	
	</body>
</html>