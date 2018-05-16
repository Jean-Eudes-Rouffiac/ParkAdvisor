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
            <h1>Melia Hotel</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/orlando_melia_hotel.jpg "> <img class="illustration" alt="" src="img/orlando_melia_hotel.jpg" /></a>
      <p>Un hôtel moderne dans le magnifique village de Celebration, en Floride, à proximité des parcs Walt Disney World et d'autres attractions d'Orlando (Sea World, Universal Studios Orlando)
      </p>
      
      <p> Notre chambre classique d’environ 29 m2 peut loger 2 personnes confortablement avec un lit king-size somptueux dans la chambre, des draps en coton égyptien et des couettes. La chambre inclut une TV LCD à écran plat de 43’’ et un espace de travail confortable. 140$ la nuit.
      </p>

      <p> <strong>Horaires</strong></br>
      Départ avant 13:00.<br/>
      Arrivée à toute heure.<br/>
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
<img src="img/orlando_melia_hotel_img1.jpg" alt>
<img src="img/orlando_melia_hotel_img2.jpg" alt>
<img src="img/orlando_melia_hotel_img3.jpg" alt>
<img src="img/orlando_melia_hotel_img4.jpg" alt>
<img src="img/orlando_melia_hotel_img5.jpg" alt>
<img src="img/orlando_melia_hotel_img6.jpg" alt>
<img src="img/orlando_melia_hotel_img7.jpg" alt>
<img src="img/orlando_melia_hotel_img8.jpg" alt>
</div>
</div>
</div>  


  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'melia_hotel';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
