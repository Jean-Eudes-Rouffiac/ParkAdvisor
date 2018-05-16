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
            <h1>Kalamunda</h1>
          </br>
          </div>
      <!-- /. PAGE TITLE-->


      <a href="img/kalamunda.jpg "> <img class="illustration" alt="" src="img/kalamunda.jpg" /></a>

      <p>Êtes-vous à la recherche d'une sortie en famille par un jour d'été ensoleillé ? Ne cherchez plus, Kalamunda Water Park est fait pour vous !
				Ce parc comporte une piscine olympique de 50m, des pataugeoires, deux immenses toboggans aquatiques, un slip 'n slide gonflable géant, et des espaces verts.
				Et tout cela, à prix abordable !</p>

      <p> <strong>Horaires du parc</strong></br>
				(de Novembre à Mars) : 9h-18h </br>
				 Nage en longueur (mercredi et vendredi) : 6h-9h </br>  
				Toboggan (week-ends et vacances scolaires) : 10h-17h </br>
				Bateau-tamponneur (week-ends) : 12h-13h30
      </p>

      <p> <strong>Tarifs entrée</strong></br>
				Natation : adulte $5.70 - enfant $4.60 - senior $4.60 - famille $17.50 </br>
				Natation + toboggan : adulte $16.50 - enfant $13.50 - spectateur $3.00 - famille $53.50 </br>
			</p>

			<p> <strong>Tarifs location</strong></br>
				Location de couloir d’eau : $11.50 </br>
			</p>

			<p> <strong>Tarifs pass</strong></br>
				Multi Pass 10 entrées : adulte $49.50 - enfant $42.00 - senior $42.00 </br>
				Pass Saison Natation : adulte $82.50 - enfant $72.00 - famille $180.00 </br>
				Groupes toboggan  - plus de 50 personnes : $13.00 - plus de 100 personnes : $11.00
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
<img src="img/kalamunda1.jpg" alt>
<img src="img/kalamunda2.jpg" alt>
<img src="img/kalamunda3.jpg" alt>
<img src="img/kalamunda4.jpg" alt>
<img src="img/kalamunda5.jpg" alt>
<img src="img/kalamunda6.jpg" alt>
<img src="img/kalamunda7.jpg" alt>
<img src="img/kalamunda8.jpg" alt>
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
        $page = 'kalamunda';
        include("commentaires.php");
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
