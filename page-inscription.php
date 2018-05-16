<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8">

		
   		 <title>Park Advisor</title>
    
    <!-- width:device-width permet de mettre la page aux dimensions de l'appareil l'ouvrant
    intial-scale:1.0 donne le zoom a l'ouverture de la page-->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<!--Autheurs -->
   		<meta name="author" content="Becuwe-Raison-Rouffiac-Vasanthan">
    
		<!--Fichier css associé -->
    		<link href="css/style.css" rel="stylesheet"> 
    
    		<!--Police-->
    <style>
    body {font-family: "Playfair Display", Georgia, Serif;}
    h1,h2,h3,h4,h5,h6 {font-family: "Playfair Display"; letter-spacing: 5px; text-align: center;}
    </style>
      
      
  	</head>


  	<body>


		<!--HEADER-->
		<?php include("header.php"); ?>
		<!-- /HEADER ROW -->



		<div class="page">
			
			<div class="titre">
       			<h1>Inscription</h1>       
      		</div>

      	</br>

			



			<h2>Formulaire d'inscription</h2>
			</br>
	
		
			<form  method="POST" action="BD/inscription.php">
				<input type="text" name="login" placeholder="Votre pseudo" required /><br />
				<input type="text" name="adressemail" placeholder="Votre adresse mail" required /><br />
				<input type="date" name="bday"required /><br />
				<input type="password" placeholder="Votre mot de passe" name="mdp" id="mot_de_passe" size="30"  required /><br />
				<input type="hidden" name="admin" value="non" />
				<input type="submit" value="S'inscrire" name="submit_co" />

			</form>
		
			
	 	
	<!--		<?php
				error_reporting(E_ALL);

				try
				{
					/* creation de la BD */
					$db = new PDO("sqlite:./BD/personnes.db");
					/* errors -> exceptions */
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					/* requete de selection */
					$requete = "SELECT * FROM personnes";
					$result = $db->query($requete);
					unset($db);
					foreach($result as $row)
					{
						echo '<p>'.$row['id'].': ' .$row['pseudo'].': ' .$row['mail'].': ' .$row['datedenaissance'].': '.$row['motdepasse']. '. admin:' .$row['admin'].'</p>';
					}
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?> 


	-->

		</div>
		
		<!--Footer ==========================-->

		<?php include("footer.php"); ?>

		<!--/.Footer-->

	</body>
</html>
