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
            <h1>Perth</h1>
          </br>
          </div>





        <h2>Quelques informations sur Perth</h2>

      </br>
      </br>



    <div class="slideshow">
      <ul>
        <li><img alt="" src="img/perth1.jpg" /></li>
        <li><img alt="" src="img/perth2.jpg" /></li>
        <li><img alt="" src="img/perth3.jpg" /></li>
        <li><img alt="" src="img/perth4.jpg" /></li>
        <li><img alt="" src="img/perth5.jpg" /></li>
      </ul>
      <div class="barre_progression"></div>
    </div>

      <p> Située sur la côte ouest de l’Australie, Perth est la capitale de l’Etat d’Australie-Occidentale
      et quatrième ville du pays par sa population s’élevant à plus de 2 millions d’habitants. Elle est
      l’une des villes les plus isolées au monde, la ville de plus d’un million d’habitants la plus proche
      étant à 2104 km. Perth est une ville ensoleillée au climat méditerranéen, composée d’une métropole
      animée et de magnifiques plages de sable. Cette capitale adossée à l’océan indien offre un panel de
      paysages et d’activités incontournables : vignobles de la Swan Valley, ballades au Kings Park, visite
      en kayak des baies de Rottnest Island. Mais elle est également fascinante historiquement ! En effet,
      ce site était habité par des tribus aborigènes et fut par la suite, colonisé par des britanniques qui
      le baptisèrent Perth. Ce passé riche d’histoire est relaté dans les nombreux musées d’histoire de la ville.
      Que vous soyez un amoureux de la nature, ou bien un city-dweller, cette ville est faite pour vous ! </p>

<div class="hr-divider"></div>







  <!--Les parcs-->

      <h2>Les parcs d'attractions</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="just4fun.php "> <img class="imageOnglet" src="img/just4fun.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Just4Fun Aqua Park</strong>
              <p>
                Parc aquatique pour tout âge et tout type
                d'évènement !
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="adventureworld.php "> <img class="imageOnglet"
            src="img/adventureworld.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Adventure World</strong>
              <p>
                Parc à thème avec plus de 30 attractions, dont
                montagnes russes !
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="kalamunda.php "> <img class="imageOnglet" src="img/kalamunda.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Kalamunda Water Park</strong>
              <p>
                Parc aquatique avec toboggans et piscine olympique !
              </p>
            </div>
          </div>
        </li>
      </ul>


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



    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
