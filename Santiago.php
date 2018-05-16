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
            <h1>Santiago</h1>  
          </br>     
          </div>




      
        <h2>Quelques informations sur Santiago</h2>

      </br>  
      </br> 
    
        <div class="slideshow">
      <ul>
        <li><img alt="" src="img/santiago.jpg" /></li>
        <li><img alt="" src="img/santiago2.jpg" /></li>
        <li><img alt="" src="img/santiago3.jpg" /></li>
        <li><img alt="" src="img/santiago4.jpg" /></li>
        <li><img alt="" src="img/santiago5.jpg" /></li>
      </ul>
      <div class="barre_progression"></div>
    </div>

      <p> Capitale du Chili, Santiago est encastrée entre collines et montagnes.
      Cette particularité crée une atmosphère unique dans la ville, sans qu'elle en perde pour autant son tempérament latin.
	  La ville s'étend sur environ 35 km. Il existe encore quelques maisons coloniales éparpillées dans le centre-ville mais,
	  au cours des dernières années, les gratte-ciels se sont multipliés surtout dans le centre et à l'est de la ville.
	  Santiago est située dans une cuvette au pied de la Cordillère des Andes.
	  <br/>
	  «L'ambiance qui y règne est très détendue et les options pour échapper au tumulte de la vie citadine ne manquent pas.
	  Pour se ressourcer ou faire la sieste, les habitants peuvent profiter des nombreux parcs situés le long de la rivière Mapocho»,
	  rapporte Beth Delthony, rédactrice pour le site Santiago Tourist.
	  </p>  

<div class="hr-divider"></div>






  <!--Les parcs-->

      <h2>Les parcs d'attractions</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="fantasilandia.php "> <img class="imageOnglet" src="img/fantasilandia.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Fantasilandia</strong>  
              <p>
                Parc d'attractions familial
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="acuapark.php "> <img class="imageOnglet" src="img/acuapark.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Acuapark El Idilio</strong>
              <p>
                Parc aquatique
              </p>   
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="mampato.php "> <img class="imageOnglet" src="img/mampato.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Parc Mampato</strong> 
              <p>
                Parc d'attractions pour enfants
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
            <a href="plaza-stg.php "> <img class="imageOnglet" src="img/plaza-de-armas-hostel.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Hôtel plaza de armas</strong>  
              <p>
                Hôtel situé au coeur de la vieille ville
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="mariott-stg.php "> <img class="imageOnglet" src="img/hotel-mariott-stg.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Hôtel Mariott</strong>
              <p>
               Hôtel de luxe 5*
              </p>   
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="novotel-stg.php "> <img class="imageOnglet" src="img/novotel-stg.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Hôtel Novotel</strong> 
              <p>
				Hôtel milieu de gamme pour séjour en famille
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
