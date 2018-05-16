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
            <h1>Westgate Lakes Resort</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/orlando_west_lake_resort.jpg"> <img class="illustration" alt="" src="img/orlando_west_lake_resort.jpg" /></a>
      <p>Situé au bord d'un lac, le complexe Westgate Lakes Resort and Spa propose un service de transfert gratuit vers Disney World, Universal Studios, Sea World et le centre commercial Universal Premium Outlet Mall. Cet établissement comprend un spa à service complet et 7 piscines extérieures dotées de jacuzzis.</p>
      
      <p>Tous les studios et villas spacieuses du Westgate Lakes Resort and Spa disposent d'une kitchenette, d'une télévision par câble avec un lecteur DVD et d'une connexion Wi-Fi. Certaines villas comportent une cuisine entièrement équipée, un lave-linge et un sèche-linge.</p>

      <p>Ce complexe d'Orlando met à votre disposition des courts de tennis, un minigolf et une salle de jeux. La réception est ouverte 24h/24, pour plus de confort. Des postes de chargement pour les voitures électriques sont disponibles sur place.</p><br>Tarif 150$</br>

      <p> <strong>Horaires</strong></br>
      Départ avant 12:00.<br/>
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
<img src="img/orlando_westgate_lakes_resort_img1.jpg" alt>
<img src="img/orlando_westgate_lakes_resort_img2.jpg" alt>
<img src="img/orlando_westgate_lakes_resort_img3.jpg" alt>
<img src="img/orlando_westgate_lakes_resort_img4.jpg" alt>
<img src="img/orlando_westgate_lakes_resort_img5.jpg" alt>
<img src="img/orlando_westgate_lakes_resort_img6.jpg" alt>
<img src="img/orlando_westgate_lakes_resort_img7.jpg" alt>
<img src="img/orlando_westgate_lakes_resort_img8.jpg" alt>
</div>
</div>
</div>  


  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'westgate_lakes_resort';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
