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
            <h1>Local Hotel</h1>
          </br>
          </div>

      <!-- /. PAGE TITLE-->


      <a href="img/localhotel.jpg "> <img class="illustration" alt="" src="img/localhotel.jpg" /></a>
      <p>Cet hôtel 2 étoiles est placé au coeur de Perth et vous permettra, non seulement l’accès à Adventure World, mais également l’accès aux différents sites touristiques de cette ville baignée par l’Océan Indien.
				Cet établissement possède plusieurs équipements, qui garantiront votre confort : </br>
				- restaurant </br>
				- bar/lounge </br>
				- terrasse </br>
				- climatisation </br>
				- réfrigérateur en chambre </br>
				- wifi </br>
				et bien plus encore !</p>

      <p>Les tarifs varient de $90 à $142.</p>


      <p> <strong>Horaires</strong></br>
				Départ avant 10h</br>
				Arrivée entre 14h et 22h</br>
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
<img src="img/localhotel.jpg" alt>
<img src="img/localhotel1.jpg" alt>
<img src="img/localhotel2.jpg" alt>
<img src="img/localhotel3.jpg" alt>
<img src="img/localhotel4.jpg" alt>
<img src="img/localhotel5.jpg" alt>
<img src="img/localhotel6.jpg" alt>
<img src="img/localhotel7.jpg" alt>
</div>
</div>
</div>



<div class="hr-divider"></div>

      <?php
        $page = 'Local-Hotel';  /* Mettre le nom de l'hotel */
        include("commentaires.php");
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
