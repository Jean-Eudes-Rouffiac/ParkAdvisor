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
            <h1>Adventure World</h1>
          </br>
          </div>
      <!-- /. PAGE TITLE-->


      <a href="img/adventureworld.jpg "> <img class="illustration" alt="" src="img/adventureworld.jpg" /></a>

      <p>Situé au pied de Bibra Lake, Adventure World est un parc à thème qui compte environ 36 attractions.
				Parmi ces attractions, on compte d'impressionantes montagnes russes, des attractions aquatiques et bien plus encore !
			Le parc offre la possibilité d'organiser des évènements, tels que : du team-building, activités scouts, sorties de clubs sportifs, vacances ...</p>
			<p><a href="img/adventureworldplan.png" target="_blank">Plan du parc</a></p>
      <p> <strong>Horaires du parc</strong></br>
				(de mi-Septembre à mi-Décembre et de Février à Avril) : 10h-17h DU JEUDI AU LUNDI</br>
				(de mi-Décembre à Janvier) : 10h-19h TOUS LES JOURS </br>
				**Ces horaires peuvent varier en fonction des conditions météorologiques
      </p>

      <p> <strong>Tarifs</strong></br>
				Adulte $52 </br>
				Enfant $30 </br>
				Sénior $44 </br>
				*Les tarifs peuvent varier, voir site officiel
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
<img src="img/adventureworld1.jpg" alt>
<img src="img/adventureworld2.jpg" alt>
<img src="img/adventureworld3.jpg" alt>
<img src="img/adventureworld4.jpg" alt>
<img src="img/adventureworld5.jpg" alt>
<img src="img/adventureworld6.jpg" alt>
<img src="img/adventureworld7.jpg" alt>
<img src="img/adventureworld8.jpg" alt>
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
        $page = 'adventureworld';
        include("commentaires.php");
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
