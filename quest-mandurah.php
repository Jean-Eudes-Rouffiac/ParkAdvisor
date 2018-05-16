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
            <h1>Quest Mandurah</h1>
          </br>
          </div>

      <!-- /. PAGE TITLE-->


      <a href="img/quest-mandurah.jpg "> <img class="illustration" alt="" src="img/quest-mandurah.jpg" /></a>
      <p>Cet établissement 4 étoiles, situé à 12 minutes seulement de la plage, propose des appartements avec services hôteliers entièrement meublés.
				Il est idéalement situé non loin de Just4Fun Aqua Park et près de restaurants et magasins de toutes sortes. Vous aimerez sortir et flâner dans
				la ville ou bien vous balader à la plage, mais vous aimerez également rester à l’hôtel et profiter de ses nombreux aménagements :
				- piscine intérieure et extérieure</br>
				- spa</br>
				- jacuzzi</br>
				- wifi</br>
				- salle fitness</br>
				- barbecue</br>
				- climatisation</br>
				- blanchisserie</br>
				et bien plus encore !</p>

      <p>Les tarifs varient de $130 à $250.</p>


      <p> <strong>Horaires</strong></br>
				Départ entre 8h00 et 10h00 </br>
				Arrivée à partir de 14h00 </br>
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
<img src="img/quest-mandurah1.jpg" alt>
<img src="img/quest-mandurah2.jpg" alt>
<img src="img/quest-mandurah3.jpg" alt>
<img src="img/quest-mandurah4.jpg" alt>
<img src="img/quest-mandurah5.jpg" alt>
<img src="img/quest-mandurah6.jpg" alt>
<img src="img/quest-mandurah7.jpeg" alt>
<img src="img/quest-mandurah8.jpg" alt>
</div>
</div>
</div>



<div class="hr-divider"></div>

      <?php
        $page = 'Quest-Mandurah';  /* Mettre le nom de l'hotel */
        include("commentaires.php");
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
