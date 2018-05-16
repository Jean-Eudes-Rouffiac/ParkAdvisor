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
            <h1>New York</h1>  
          </br>     
          </div>




      
        <h2>Quelques informations sur New York</h2>

      </br>  
      </br> 
    
        <div class="slideshow">
      <ul>
        <li><img alt="" src="img/newyork1.jpg" /></li>
        <li><img alt="" src="img/newyork2.jpg" /></li>
        <li><img alt="" src="img/newyork3.jpg" /></li>
        <li><img alt="" src="img/newyork4.jpg" /></li>
        <li><img alt="" src="img/newyork5.jpg" /></li>
      </ul>
      <div class="barre_progression"></div>
    </div>

      <p> Ceux qui n’y ont jamais posé les pieds la connaissent déjà, par le cinéma, les séries télé, la musique, la littérature.
      New York est une machine à rêves. Diverse, frénétique, électrique, magnétique, magique, vertigineuse, inventive, intensive...
      les adjectifs se bousculent pour la décrire. C’est la ville des extrêmes et des superlatifs.
      </br>
      New York demeure la mégapole la plus peuplée des États-Unis, la plus visitée aussi. Ses musées comptent parmi les plus riches du monde.
      New York, c’est LA ville, la ville des villes. Trop petite pour être un pays et trop grande pour être une simple cité.
	  </br>
	  New York affiche un bourdonnement créatif permanent, nourri par une énergie inépuisable. Et si certains épisodes sombres ont laissé des traces
	  indélébiles, New York se relève toujours, prête pour de nouveaux défis d'envergure.
	  </br>
	  Le tourisme tient une place importante dans la ville de New York où on trouve des centaines de lieux à visiter et d'endroits pour se divertir.
	  40 millions de touristes visitent la ville chaque année. Parmi les lieux de la ville qui accueillent le plus de touristes, on trouve Times Square,
	  Wall Street, la statue de la Liberté, l’Empire State Building, le pont de Brooklyn, la Cinquième avenue ou encore Central Park.
	  </br>
	  Laissez-vous tenter par les attractions uniques que New York peut vous offrir.
	  </p>  

<div class="hr-divider"></div>






  <!--Les parcs-->

      <h2>Les parcs d'attractions</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="NYconeyisland.php "> <img class="imageOnglet" src="img/NYconeyisland.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Coney Island</strong>  
              <p>
                Venez vous amuser au parc d'attractions incontournable de NY !
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="NYadventureland.php "> <img class="imageOnglet" src="img/NYadventureland.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Adventureland</strong>
              <p>
                Le fameux parc d'attractions dont a été inspiré le film du même nom
              </p>   
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="NYdarienlake.php "> <img class="imageOnglet" src="img/NYdarienlake.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Darien Lake</strong> 
              <p>
                Venez profiter des attractions que propose ce parc au bord du lac
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
            <a href="NYempire.php "> <img class="imageOnglet" src="img/NYempire.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Empire Hotel</strong>  
              <p>
                Idéal pour un séjour en amoureux
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="NYhudson.php "> <img class="imageOnglet" src="img/NYhudson.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Hôtel Hudson New York</strong>
              <p>
               Hôtel proche de Central Park
              </p>   
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="NYalex.php "> <img class="imageOnglet" src="img/NYalex.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Hôtel Alexander</strong> 
              <p>
				Hôtel milieu de gamme pour long séjour
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
