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
    body {font-family: "Playfair Display", Georgia, Serif; text-align: justify}
    h1,h2,h3,h4,h5,h6 {font-family: "Playfair Display"; letter-spacing: 5px; text-align: center}
    </style>
    </head>


  	<body>


		<!--HEADER-->
		<?php include("header.php"); ?>
		<!-- /HEADER ROW -->




		<!-- la page ==============================================-->

		<div class="page">
      		<div class="titre">
       			<h1>Bienvenue sur le site Park Advisor</h1>
            <h5>Partez à la découverte des plus grands parcs d'attractions du monde...</h5>
             <div class="page">
                <form id="recherche" action="search.php" method="GET">
									<div>
										<input name="query" type="text" placeholder="Effectuer une recherche ..." required >
										<input class="loupe" type="submit" value="">
							 		</div>

							  </form>
              </div>
      		</div>


<div class="hr-divider"></div>

 <div class="page">
  <div class="titre">
  </div>
</div>


      		 <!--dernières nouveautés-->

      <h2>Les nouveautés</h2>
      <ul class="onglets">
				<li class="cadre3">
          <div class="onglet">
            <a href="adventureworld.php "> <img class="imageOnglet"
            src="img/adventureworld.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Adventure World</strong>
              <p>
                Parc à thème avec plus de 30 attractions, dont
                montagnes russes !
              </p>
            </div>
          </div>
        </li>
				<li class="cadre3">
          <div class="onglet">
            <a href="mampato.php "> <img class="imageOnglet" src="img/mampato.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Parc Mampato</strong>
              <p>
                Parc d'attractions pour enfants
              </p>
            </div>
          </div>
        </li>
				<li class="cadre3">
          <div class="onglet">
            <a href="parc-aquaboulevard.php "> <img class="imageOnglet" src="img/Aquaboulevard.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Aquaboulevard</strong>
              <p>
                Venez vous amuser sur les nombreux toboggans... frissons assurés !
              </p>
            </div>
          </div>
        </li>
      </ul>

    <div class="hr-divider"></div>

  </div>



		<!--Footer ==========================-->

		<?php include("footer.php"); ?>

		<!--/.Footer-->

  	</body>
</html>
