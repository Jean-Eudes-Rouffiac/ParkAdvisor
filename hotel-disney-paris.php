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
    body {font-family: "Playfair Display", Georgia, Serif; text-align: justify;}
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
            <h1>Disneyland Hôtel</h1>  
          </br>     
          </div>

      <!-- /. PAGE TITLE-->

  
      <a href="img/hotel-disney.jpg "> <img class="illustration" alt="" src="img/hotel-disney.jpg" /></a>
      <p>Le luxe vous va si bien. Exaucez vos rêves princiers ! Aux portes du Parc Disneyland, ce majestueux hôtel d'inspiration victorienne vous offre la qualité irréprochable d'un service 5 étoiles et l'hospitalité incomparable de Disney. Et vous pourrez même profiter de moments de magie supplémentaires dans nos Parcs Disney à thème tous les jours de votre séjour !<br/></p>
      <p>Ce qui rend cet héberbement unique : </br>
      - Idéalement situé à l'entrée du Parc Disneyland </br> 
      - Du petit déjeuner au dîner, deux restaurants et un bar vous permettront de vous restaurer dans le plus enchanteur des décors </br>  
      - Prenez la pose aux côtés de vos Personnages Disney préférés avant de vous rendre aux Parcs, et passez des moments magiques</br> 
      - Profitez d'une baignade relaxante dans la piscine intérieure chauffée de l'hôtel </br> 
      - Une salle de sport toute équipée </br> 
      - Rechargez vos batteries après toute une journée d'aventure grâce à un sauna ou un hammam relaxant</br>  
      - Découvrez les jeux d'action ou d'arcade dans la salle de jeux animée de l'hôtel</p>

      <p> Autres services : Wi-Fi gratuit, parking gratuit, service de voiturier gratuit, service de bagagerie gratuit, coffre frot. </br> </p>



      <p>Les prix par nuit vont de 620€ à 1249€. Nous vous avons présenté l'hôtel le plus luxueux de Disneyland Paris. Bien sur, Disneyland Paris propose des nuits dans des hôtels plus abordables. Le 1er prix est 150€ la nuit.</p>


      <p> <strong>Horaires</strong></br>
      Départ avant 11:00.</br>
      Arrivée à partir de 15:00. Possibilité de laisser les bagages à l'hôtel avant de récupérer la chambre à 15h</br>
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
<img src="img/hotel-disney1.jpg" alt>
<img src="img/hotel-disney2.jpg" alt>
<img src="img/hotel-disney3.jpg" alt>
<img src="img/hotel-disney4.jpg" alt>
<img src="img/hotel-disney5.jpg" alt>
<img src="img/hotel-disney6.jpg" alt>
<img src="img/hotel-disney7.jpg" alt>
<img src="img/hotel-disney8.jpg" alt>
</div>
</div>
</div>  
    

  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'Disneyland-Hotel';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
