<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8">

		
   		 <title>Park Advisor</title>
    
    <!-- width:device-width permet de mettre la page aux dimensions de l'appareil l'ouvrant
    intial-scale:1.0 donne le zoom a l'ouverture de la page-->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<!--Auteurs -->
   		<meta name="author" content="Becuwe-Raison-Rouffiac-Vasanthan">
    
		<!--Fichier css associé -->
    		<link href="css/style.css" rel="stylesheet"> 
    
    <!--Font-->
    <style>
    body {font-family: "Playfair Display", Georgia, Serif;text-align: justify;}
    h1,h2,h3,h4,h5,h6 {font-family: "Playfair Display"; letter-spacing: 5px; text-align: center;}
    </style>
      
      
  </head>


  	<body>


		<!--HEADER-->
		<?php include("header.php"); ?>
		<!-- /HEADER ROW -->



    <!-- la page ==============================================-->

        <div class="page">

          <div class="titre">
            <h1>Orlando</h1>  
          </br>     
          </div>




      
        <h2>Quelques informations sur Orlando</h2>

      </br>  
      </br> 
    
        <div class="slideshow">
      <ul>
        <li><img alt="" src="img/orlando1.jpg" /></li>
        <li><img alt="" src="img/orlando2.jpg" /></li>
        <li><img alt="" src="img/orlando3.jpg" /></li>
        <li><img alt="" src="img/orlando4.jpg" /></li>
        <li><img alt="" src="img/orlando5.jpg" /></li>
      </ul>
      <div class="barre_progression"></div>
    </div>

      <p> Grande métropole moderne, accueillante, dynamique et insouciante, Orlando fascine et séduit ses visiteurs. 
      
	  <br/>
	  Il faut dire que la ville ne manque pas d’atouts pour s’attirer les faveurs des touristes et des Américains : 
      une météo très agréable, une ville moderne aux infrastructures développées, un mode de vie définitivement tourné vers l’extérieur, une population multiculturelle, une nature omniprésente et luxuriante, des plages facilement accessibles et paradisiaques, des parcs d'attractions à thème emblématiques - Orlando Universal Resort, Sea World ou le Harry Potter Park - et une baie parmi les plus fabuleuses au monde !
	  </p>  

<div class="hr-divider"></div>






  <!--Les parcs-->

      <h2>Les parcs d'attractions</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_universal.php"> <img class="imageOnglet" src="img/orlando_universal.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Orlando Universal Park</strong>  
              <p>
                Parc d'attractions à thème
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

        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_harry_potter.php "> <img class="imageOnglet" src="img/orlando_harry_potter.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Harry Potter Park</strong> 
              <p>
                Parc sur le thème de la saga Harry Potter
              </p>
            </div>
          </div>
        </li>
      </ul>

  
<div class="hr-divider"></div>

  <!--Les hotels-->

      <h2>Les hôtels</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_melia_hotel.php "> <img class="imageOnglet" src="img/orlando_melia_hotel.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Melia Hotel</strong>  
              <p>
                Hôtel situé au coeur de la vieille moderne et à proximité des parcs de la ville
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_the_alfond_inn.php "> <img class="imageOnglet" src="img/orlando_the_alfond_inn.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>The Alfond Inn</strong>
              <p>
               Hôtel de haut standing avec suites
              </p>   
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_westgate_lakes_resort.php "> <img class="imageOnglet" src="img/orlando_westgate_lakes_resort.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Westgate Lakes Resort</strong> 
              <p>
				Hôtel milieu de gamme très proches des parcs à thèmes
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
