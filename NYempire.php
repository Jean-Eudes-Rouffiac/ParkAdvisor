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
            <h1>Empire Hotel</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/NYempire.jpg "> <img class="illustration" alt="" src="img/NYempire.jpg" /></a>
      <p>L'Empire Hotel se situe à Manhattan, à 83 mètres du Lincoln Center for the Performing Arts et à 161 mètres de Central Park.
      Cet hôtel propose une piscine extérieure sur le toit ouverte en saison, des cabines et 2 restaurants.</br>
      Décorées dans des tons ocre, les chambres modernes possèdent une télévision à écran plat, une station d'accueil pour iPod, un minibar complet
      ainsi qu'une salle de bains pourvue d'une douche vitrée à effet pluie.</br>
      Ouvert en saison et aménagé sur le toit, le bassin profond est entouré d'une terrasse bien exposée avec de grandes chaises longues et offrant une vue
      panoramique sur la ville de New York. De la nourriture et des boissons sont servis au Pool Deck.</br>
      Le bar du hall offre une ambiance décontractée et intimiste. Vous y dégusterez des tapas et des boissons. Le bar-salon sur le toit vous attend, quant à
      lui, au douzième étage et donne sur le Lincoln Center.</br>
      Times Square se trouve à 1,4 km de l'Empire Hotel, tandis que le musée des arts et du design est à 483 mètres.</br>
      C'est le quartier préféré des voyageurs visitant New York, selon les commentaires clients indépendants. Ce quartier est aussi idéal pour le shopping,
      avec des magasins célèbres. 
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
<img src="img/NYempire1.jpg" alt>
<img src="img/NYempire2.jpg" alt>
<img src="img/NYempire3.jpg" alt>
<img src="img/NYempire4.jpg" alt>
<img src="img/NYempire5.jpg" alt>
<img src="img/NYempire6.jpg" alt>
<img src="img/NYempire7.jpg" alt>
<img src="img/NYempire8.jpg" alt>
</div>
</div>
</div>  
    

  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'Empire';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
