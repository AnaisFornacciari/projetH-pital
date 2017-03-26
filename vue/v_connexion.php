<html>
    <head>
		<title>Hôpital</title>
		<link rel="icon" type"image/png" href="ressources/hopital.png">
		<link href="ressources/css_accueil.css" rel="stylesheet" media="screen">
		<meta charset='utf-8'>
   </head>

    <div class="titre">
		<h1> HÔPITAL <h1>    
	</div>
	
	<body id="news">
		<div id="news-holder">
			<h2>
				Connexion 
			</h2>
			<div class="php">	   
				<form method="post">
					<div id="erreur">
					<?php 
						if(isset($_SESSION['erreur']))
						{
							echo $_SESSION['erreur'];
							$_SESSION['erreur'] = " ";
						}
						else
						{
					?>
						</br>
					<?php
						}
					?>
					</div>
					<div align="left">
						<table align="center">
							<tr>
								<td align="right">
									<label for="login">Login :</label>
								</td>
								
								<td align="right">
									<input type="text" placeholder="Login" name="login"/>
								</td>
							</tr>
						
							<tr>
								<td>
									</br>
								</td>
							</tr>
						
							<tr>
								<td align="right">
									<label for="mdp">Mot de passe :</label>
								</td>
								
								<td align="right">
									<input type="password" placeholder="Password" name="mdp"/>
								</td>
							</tr>
						</table>
					</div>
					
					<div align=center>
						<table>
							<tr>
								<td>
									<input type="submit" value="Se connecter" formaction="index.php?statut=connexion&action=confirmationC">
								</td>
							</tr>
						</table>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>