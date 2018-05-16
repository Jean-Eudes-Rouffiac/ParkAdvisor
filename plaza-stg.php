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
            <h1>Hôtel plaza de armas</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/plaza-de-armas-hostel.jpg "> <img class="illustration" alt="" src="img/plaza-de-armas-hostel.jpg" /></a>
      <p>L'hôtel est situé en plein coeur du centre historique et culturel de la capitale chilienne.<br/>
      La vue est imprenable sur la plaza de armas.<br/>
      </p>
      
      <p> La chambre avec salle de bain privée est à partir de 25.000$ la nuit.<br/><br/>
      Services inclus: petit-déjeuner, serviettes, Wi-Fi, TV, cuisine commune.
      </p>

      <p> <strong>Horaires</strong></br>
      Départ avant 12:00.<br/>
      Arrivée à partir de 14:00.<br/>
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
<img src="img/plaza-de-armas-hostel-1.jpg" alt>
<img src="img/plaza-de-armas-hostel-2.jpg" alt>
<img src="img/plaza-de-armas-hostel-3.jpg" alt>
<img src="img/plaza-de-armas-hostel-4.jpg" alt>
<img src="img/plaza-de-armas-hostel-5.jpg" alt>
<img src="img/plaza-de-armas-hostel-6.jpg" alt>
<img src="img/plaza-de-armas-hostel-7.jpg" alt>
<img src="img/plaza-de-armas-hostel-8.jpg" alt>
</div>
</div>
</div>  


  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'plaza de armas hostel';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
