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
            <h1>The Alfond Inn</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/orlando_the_alfond_inn.jpg"> <img class="illustration" alt="" src="img/orlando_the_alfond_inn.jpg" /></a>
      <p>Situé à Winter Park en Floride, l'hôtel The Alfond Inn vous propose une connexion Wi-Fi gratuite et une piscine extérieure. Le Rollins College est situé à 650 mètres de l'établissement. Vous trouverez Park Avenue, où vous pourrez faire du shopping et dîner, à 750 mètres.





      </p>
      
      <p>Chaque chambre du The Alfond Inn de Winter Park dispose d'un réfrigérateur et d'une cafetière, ainsi que d'une télévision par câble et d'une station d'accueil pour iPod. Leur salle de bains privative comprend un sèche-cheveux.</p>

      <p>L'établissement The Alfond Inn met à votre disposition une salle de sport, un centre d'affaires et une laverie. Vous bénéficierez également d'un service quotidien de femme de chambre et d'une réception ouverte 24h/24.</p><br>Tarif 220$</br>

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
<img src="img/orlando_the_alfond_inn_img1.jpg" alt>
<img src="img/orlando_the_alfond_inn_img2.jpg" alt>
<img src="img/orlando_the_alfond_inn_img3.jpg" alt>
<img src="img/orlando_the_alfond_inn_img4.jpg" alt>
<img src="img/orlando_the_alfond_inn_img5.jpg" alt>
<img src="img/orlando_the_alfond_inn_img6.jpg" alt>
<img src="img/orlando_the_alfond_inn_img7.jpg" alt>
<img src="img/orlando_the_alfond_inn_img8.jpg" alt>
</div>
</div>
</div>  


  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'the_alfond_inn';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
