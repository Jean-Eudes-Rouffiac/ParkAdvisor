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
            <h1>Possum Creek Lodge</h1>
          </br>
          </div>

      <!-- /. PAGE TITLE-->


      <a href="img/possumcreeklodge.jpg "> <img class="illustration" alt="" src="img/possumcreeklodge.jpg" /></a>
      <p>Cet établissement est un hôtel 4 étoiles situé près de Kalamunda Water Park. Il est localisé à Perth Hills à l’écart et immergé dans la nature.
				Entouré par la faune et la flore, et de jardins parfaitement aménagés, il est à seulement 5 minutes du centre de Kalamunda et une trentaine de Perth. Les équipements proposés par cet hôtel sont : </br>
				- laverie </br>
				- barbecue </br>
				- wifi </br>
				- télévision </br>
				- spa </br>
				- climatisation </br>
				et bien plus encore !</p>

      <p>Les tarifs varient de $148 à $186.</p>


      <p> <strong>Horaires</strong></br>
				Départ avant 11h00</br>
				Arrivée entre 14h00 et 19h30</br>
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
<img src="img/possumcreeklodge1.jpg" alt>
<img src="img/possumcreeklodge2.jpg" alt>
<img src="img/possumcreeklodge3.jpg" alt>
<img src="img/possumcreeklodge4.jpg" alt>
<img src="img/possumcreeklodge5.jpg" alt>
<img src="img/possumcreeklodge6.jpeg" alt>
<img src="img/possumcreeklodge7.jpeg" alt>
<img src="img/possumcreeklodge8.jpeg" alt>
</div>
</div>
</div>



<div class="hr-divider"></div>

      <?php
        $page = 'Possum-Creek-Lodge';  /* Mettre le nom de l'hotel */
        include("commentaires.php");
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
