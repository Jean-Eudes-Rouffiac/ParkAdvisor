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
            <h1>Hôtel Lyric Paris</h1>  
          </br>     
          </div>

      <!-- /. PAGE TITLE-->

  
      <a href="img/lyric-hotel.jpg "> <img class="illustration" alt="" src="img/lyric-hotel.jpg" /></a>
      <p>Le Lyric Hôtel est situé dans une rue calme proche du magnifique Opéra Garnier, un des plus célèbres monuments de Paris, au cœur même de la ville lumière. Les Galeries Lafayette et Le Printemps sont à quelques minutes de marche de l’hôtel, ainsi que l’église de période néo-classique La Madeleine. Les voyageurs d’affaires apprécieront la proximité du quartier des assurances, des banques, et de la Bourse.<br/><br/></p>
     <p> Les 45 chambres, décorées sur le thème de la musique et de la danse, offrent un style punchy et contemporain. Elles se déclinent en 5 catégories : classique double, double ou twin de luxe, triple de luxe, double ou twin exécutive, triple exxécutives.<br/></p>
      <p>Toutes les chambres sont équipées de :</br>
      - Air conditionné</br> 
      - Wifi gratuit</br> 
      - Coffre-fort</br> 
      - Insonorisation</br> 
      - Sèche-cheveux</br>  
      - TV satellite</br>
      - Produits d'accueil </p>

      <p>Services : l'hôtel propose un sauna, un hammam, et une piscine intérieure, caractérisée par son plafond « ciel étoilé », représentant la constellation de la Grande Ourse.</br></p>


      <p>A partir de 153€ la chambre double.</p>


      <p> <strong>Horaires</strong></br>
      Départ avant 10:00.</br>
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
<img src="img/lyric-hotel1.jpg" alt>
<img src="img/lyric-hotel2.jpg" alt>
<img src="img/lyric-hotel3.jpg" alt>
<img src="img/lyric-hotel4.jpg" alt>
<img src="img/lyric-hotel5.jpg" alt>
<img src="img/lyric-hotel6.jpg" alt>
<img src="img/lyric-hotel7.jpg" alt>
<img src="img/lyric-hotel.jpg" alt>
</div>
</div>
</div>  
    

  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'Lyric-hotel';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
