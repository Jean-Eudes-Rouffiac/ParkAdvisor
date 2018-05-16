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
    
    		<!--Font-->
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
			<h1>Admin</h1>       
      	</div>
      		
      		
      	<h2>Gestion des membres</h2>

		<?php
			error_reporting(E_ALL);

			try
			{
				/* creation de la BD */
				$db = new PDO("sqlite:./BD/personnes.db");
				/* errors -> exceptions */
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				/* requete de selection */
				$requete = "SELECT * FROM personnes ORDER BY id DESC";
				$result = $db->query($requete);
				unset($db);
				foreach($result as $row)
				{
					echo '<div class="pseudo"> <p>Utilisateur: ' .$row['pseudo'].'</p> </div>';
					echo '<div class="pseudo"> <p>Mot de passe: '  .$row['motdepasse'].'</p> </div>';
					echo '<div class="pseudo"> <p>Adresse mail: '  .$row['mail'].'</p> </div>';
					echo '<div class="pseudo"> <p>Date de naissance: '  .$row['datedenaissance'].'</p> </div>';
					echo '<div class="pseudo"> <p>Admin: ' .$row['admin']. '</p> </div>';
					echo '<form class="com" method="POST" action="BD/supprimer-membre.php">
						<input type="hidden" name="choixid" value='.$row['id'].' />
						<input type="submit" value="bannir" name="supprimer" />
						</form>';
				}
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
		?>

	</div>

		<!--Footer ==========================-->

		<?php include("footer.php"); ?>

		<!--/.Footer-->

	</body>
</html>
