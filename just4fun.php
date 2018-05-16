<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8">


   		 <title>Park Advisor</title>

    <!-- width:device-width permet de mettre la page aux dimensions de l'appareil l'ouvrant
    intial-scale:1.0 donne le zoom a l'ouverture de la page-->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--Autheurs -->
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
            <h1>Just4Fun Aqua Park</h1>
          </br>
          </div>
      <!-- /. PAGE TITLE-->


      <a href="img/just4fun.jpg "> <img class="illustration" alt="" src="img/just4fun.jpg" /></a>

      <p>Situé sur l'île d'Avocet et au bord de l'eau, ce parc aquatique propose des activités en extérieur avec de nombreux équipements gonflables de qualité. Just4Fun offre également la possibilité d'organiser
			des anniversaires des sorties scolaires, des activités de team-building et bien plus encore ! </p></br>
     <div class="horaire">
      <p> <strong>Horaires du parc</strong></br>
				Rottnest Island :    	10h30-17h00     TOUS LES JOURS   (de Novembre à Mars/Avril selon la météo)</br>
				Mandurah :            10h30-17h00     TOUS LES JOURS   (Décembre/Janvier Vacances scolaires)</br>
				Mandurah :            10h30-17h00     LES WEEK-ENDS  	 (de Février à Mars)</br>
				*Les deux sites sont fermés à Noël et le Vendredi Saint</br>
				**Ces horaires peuvent varier en fonction des conditions météorologiques
        </p>
      </div>

      <div class="tarif">
      <p> <strong>Tarifs</strong></br>
				Parc principal $13 la ½ Heure - $20 l’Heure - $45 la Journée</br>
				Pataugeoire $7.50 la ½ Heure - $13 l’Heure - $25 la Journée</br>
				Pass famille $42 la ½ Heure - $65 l’Heure - $145 la Journée</br>
				Paddle $13 la ½ Heure - $20 l’Heure</br>
				Pédalo $13 la ½ Heure - $20 l’Heure</br>
				Chaises et parasol $4 la ½ Heure - $7.50 l’Heure</br>
        </p>
      </div>

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
<img src="img/just4fun1.jpg" alt>
<img src="img/just4fun2.jpg" alt>
<img src="img/just4fun3.JPG" alt>
<img src="img/just4fun4.jpg" alt>
<img src="img/just4fun5.jpg" alt>
<img src="img/just4fun6.jpg" alt>
<img src="img/just4fun7.jpg" alt>
<img src="img/just4fun8.jpg" alt>
</div>
</div>
</div>



<div class="hr-divider"></div>


<!--Les hotels-->

		<h2>Les hôtels</h2>
		<ul class="onglets">
			<li class="cadre3">
				<div class="onglet">
					<a href="quest-mandurah.php "> <img class="imageOnglet"
					src="img/quest-mandurah.jpg" alt="onglet"/> </a>
					<div class="legende">
						<strong>Quest Mandurah Hotel</strong>
						<p>
							Etablissement 4* qui saura vous séduire par ses services de qualité
						</p>
					</div>
				</div>
			</li>
			<li class="cadre3">
				<div class="onglet">
					<a href="localhotel.php "> <img
					class="imageOnglet" src="img/localhotel.jpg" alt="onglet"/> </a>
					<div class="legende">
						<strong>Local Hotel</strong>
						<p>
							Hôtel 2* en plein centre ville, abordable et confortable
						</p>
					</div>
				</div>
			</li>

			<li class="cadre3">
				<div class="onglet">
					<a href="possumcreeklodge.php "> <img class="imageOnglet" src="img/possumcreeklodge.jpg" alt="onglet"/> </a>
					<div class="legende">
						<strong>Possum Creek Lodge</strong>
						<p>
						 Hôtel 4* en retrait dans l'arrière-pays de Perth, vous serez en phase avec la nature
						</p>
					</div>
				</div>
			</li>
		</ul>


<div class="hr-divider"></div>

    <!-- insertion de la partie commentaire -->


      <?php
        $page = 'just4fun';
        include("commentaires.php");
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
