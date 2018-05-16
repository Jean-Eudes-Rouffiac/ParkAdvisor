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
            <h1>Paris</h1>
          </br>
          </div>





        <h2>Quelques informations sur Paris</h2>

      </br>
      </br>



    <div class="slideshow">
      <ul>
        <li><img alt="" src="img/paris.jpg" /></li>
        <li><img alt="" src="img/paris2.jpg" /></li>
        <li><img alt="" src="img/paris3.jpg" /></li>
        <li><img alt="" src="img/paris4.jpg" /></li>
        <li><img alt="" src="img/paris5.jpg" /></li>
      </ul>
      <div class="barre_progression"></div>
    </div>

      <p> Paris est la capitale de la France. Elle est considérée par beaucoup comme "la plus belle ville du monde".
          Avec 2.2 millions d'habitants, elle est la ville la plus peuplée et capitale de la France, chef-lieu de la région Île-de-France et unique commune-département du pays, se situe au centre du Bassin parisien, sur une boucle de la Seine.
          Paris est non seulement une ville importante à l'échelle mondiale (en économie, politique, militaire,....) et européenne. Mais elle est aussi une des villes la plus historique au monde.
          Son histoire remonte à avant l'époque Gallo-romaine, lors du Néolitique. Puis, vint l'époque de Louis VI, où la ville prospéra au niveau du commerce, puis, sous le règne de Robert le Pieux la ville se concentra sur la religion, où l'on voit s'élever dans les airs d'immenses cathédrâles, dont l'incontournable cathédrâle de Notre Dame de Paris.
          Puis vinrent la Renaissance, l'époque Moderne et Contemporaine qui façonnèrent les façades Parisiennes, pour nous donner aujourd'hui une magnifique ville. </br>
          Vous l'aurez compris, cette ville vaut le détour. Il y a de nombreux monuments à visiter mais si vous souhaitez vous amusez et vous détendre, laissez vous tenter par les parcs d'attractions que nous vous conseillons ! </p>

<div class="hr-divider"></div>







  <!--Les parcs-->

      <h2>Les parcs d'attractions</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="disneyland.php "> <img class="imageOnglet" src="img/disneyland.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Disneyland Paris</strong>
              <p>
                Le plus grand parc d'attraction d'Europe... incoutournable !
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="parc-Asterix.php "> <img class="imageOnglet" src="img/parcasterix.png" alt="onglet"/> </a>
            <div class="legende">
              <strong>Parc Astérix</strong>
              <p>
                Voyagez dans l’univers mythique de la bande dessinée de Goscinny et Uderzo...
              </p>
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="parc-aquaboulevard.php "> <img class="imageOnglet" src="img/Aquaboulevard.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Aquaboulevard</strong>
              <p>
                Venez vous amuser sur les nombreux toboggans... frissons assurés !
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
            <a href="hotel-disney-paris.php "> <img class="imageOnglet" src="img/hotel-disney.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Disneyland Hôtel</strong>
              <p>
                Aux portes du Parc Disneyland, ce majestueux hôtel vous offre la qualité irréprochable d'un service 5 étoiles.
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="hotel-asterix-paris.php "> <img class="imageOnglet" src="img/les3hiboux.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Hôtel Les Trois Hiboux</strong>
              <p>
                Après tant d'aventures, rien de tel qu'un bel hôtel pour se reposer au calme… et repartir de plus belle !
              </p>
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="hotel-lyric-paris.php "> <img class="imageOnglet" src="img/lyric-hotel.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Hôtel Lyric Paris</strong>
              <p>
               Situé dans une rue calme proche du magnifique Opéra Garnier, un des plus célèbres monuments de Paris, au cœur même de la ville lumière.
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
