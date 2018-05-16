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
       			<h1>Nos coups de coeur</h1>

              
      		</div>



 <div class="page">
  <div class="titre">
  </div>
</div>


      		 <!--dernières nouveautés-->

      
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="disneyland.php "> <img class="imageOnglet" src="img/disneyland.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Disneyland Paris</strong>
              <p>
                Le plus grand parc d'attraction d'Europe... incoutournable !
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="fantasilandia.php "> <img class="imageOnglet" src="img/fantasilandia.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Fantasilandia</strong>
              <p>
                Parc d'attractions familial
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_sea_world.php "> <img class="imageOnglet" src="img/orlando_sea_world.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Sea World</strong>
              <p>
                Parc d'attractions et de shows aquatiques
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
