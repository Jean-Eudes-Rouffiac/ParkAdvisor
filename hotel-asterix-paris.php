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
            <h1>Hôtel Les Trois Hiboux</h1>  
          </br>     
          </div>

      <!-- /. PAGE TITLE-->

  
      <a href="img/les3hiboux.jpg "> <img class="illustration" alt="" src="img/les3hiboux.jpg" /></a>
      <p>Après tant d'aventures, rien de tel qu'un bel hôtel pour se reposer au calme… et repartir de plus belle !<br/>
      L'Hôtel*** Les Trois Hiboux est un vrai paradis pour les petitbonums : lits clos séparés de la chambre des parents, de grands espaces extérieurs, une salle de jeux dédiée aux fous rires... <br/></p>
      <p>L'Hôtel*** Les Trois Hiboux, c'est : </br>
      - Un chemin permettant d'accèder au Parc à pied </br>
      - Parking gratuit</br>
      - Au cœur de la forêt Gauloise</br>
      - Des chambres spécialement conçues pour les familles</br>
      - Un restaurant</br>
      - Espace agréable : bibliothèque, espace enfant, des spectacles (selon les saisons), etc...</br> 
      - Un petit-déjeuner buffet</br>
      - Wi-Fi gratuit</br>
      - Bagagerie à disposition et transfert bagages gratuit Parc/hotel et Hotel/Parc</br>
      - Une rencontre avec Astérix et Obélix le matin</br> </p>


      <p>A partir de 75€ par personne, en basse saison sur la base de 4 adultes.</p>


      <p> <strong>Horaires</strong></br>
      Départ avant 10:00</br>
      Arrivée à partir de 15:00</br>
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
<img src="img/les3hiboux1.jpg" alt>
<img src="img/les3hiboux2.jpg" alt>
<img src="img/les3hiboux3.jpg" alt>
<img src="img/les3hiboux4.jpg" alt>
<img src="img/les3hiboux5.jpg" alt>
<img src="img/les3hiboux6.jpg" alt>
<img src="img/les3hiboux7.png" alt>
<img src="img/les3hiboux8.jpg" alt>
</div>
</div>
</div>  
    

  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'Asterix-hotel';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
