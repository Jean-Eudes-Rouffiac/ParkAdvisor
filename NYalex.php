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
            <h1>Hôtel Alexander</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/NYalex.jpg "> <img class="illustration" alt="" src="img/NYalex.jpg" /></a>
      <p>Situé dans l'Upper West Side, l'hôtel Alexander est un boutique hôtel idéal pour des séjours de longue durée. Cet établissement vous accueille à 5 km
      de Time Square, à 1 km de Central Park et à 322 mètres d'une station de métro.</br>
      La connexion Wi-Fi est gratuite dans les chambres. Chacune d'entre elles est équipée d'une salle de bains privative, d'une télévision par câble à écran
      plat, d'un réfrigérateur et d'un micro-ondes.</br>
      Cet hôtel vous propose un service de concierge, une réception ouverte 24h/24 et un salon. Vous aurez également accès à une cuisine commune, à une
      blanchisserie et à une salle de sport. Un service de ménage est par ailleurs assuré. D'autre part, vous savourerez une tasse de café gratuitement le
      matin.</br>
      Le Lincoln Centre est placé à moins de 3 km de l'hôtel Alexander. De nombreux commerces et restaurants vous attendent à proximité.</br>
      Cet établissement est connu pour son excellent rapport qualité/prix à New York ! Les clients en ont plus pour leur argent en comparaison avec d'autres établissements dans cette ville. 
      </p>

      <p> <strong>Horaires</strong></br>
      Départ avant 12:00.</br>
      Arrivée à partir de 15:00.</br>
      </p>      
    
<div class="hr-divider"></div>

<h2>Galerie de photos</h2>
 

          <div class='caroussel_diapo1'>
<input checked id="carou_un" name="rotation" type="radio">
<label for="carou_un"></label>
<input id="carou_deux" name="rotation" type="radio">
<label for="carou_deux"></label>
<input id="carou_trois" name="rotation" type="radio">
<label for="carou_trois"></label>
<input id="carou_quatre" name="rotation" type="radio">
<label for="carou_quatre"></label>
<input id="carou_cinq" name="rotation" type="radio">
<label for="carou_cinq"></label>
<input id="carou_six" name="rotation" type="radio">
<label for="carou_six"></label>
<input id="carou_sept" name="rotation" type="radio">
<label for="carou_sept"></label>
<input id="carou_huit" name="rotation" type="radio">
<label for="carou_huit"></label>
<div class="contenu_carou1">
<div class="caroussel1">
<img src="img/NYalex1.jpg" alt>
<img src="img/NYalex2.jpg" alt>
<img src="img/NYalex3.jpg" alt>
<img src="img/NYalex4.jpg" alt>
<img src="img/NYalex5.jpg" alt>
<img src="img/NYalex6.jpg" alt>
<img src="img/NYalex7.jpg" alt>
<img src="img/NYalex8.jpg" alt>
</div>
</div>
</div>  
    

  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'Alexander';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
