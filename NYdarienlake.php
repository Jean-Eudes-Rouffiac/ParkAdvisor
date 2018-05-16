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
            <h1>Darien Lake</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/NYdarienlake.jpg "> <img class="illustration" alt="" src="img/NYdarienlake.jpg" /></a>
      <p>Depuis des générations, Darien lake est une destination pour les familles et crée des souvenirs qui dureront longtemps.
      Avec 45 attractions, un parc aquatique et une variété de spectacles et de divertissements, le parc saura vous combler.
	  </p>

      <p> <strong>Horaires</strong> de juin à août</br>
      Lundi: 10:30-22:00</br>
      Mardi: 10:00-22:00</br>
      Mercredi: 10:30-22:00</br>
      Jeudi: 10:30-22:00</br>
      Vendredi: 10:30-22:00</br>
      Samedi: 10:30-22:00</br>
      Dimanche: 10:30-22:00</br>
      </p>  
      <p><strong>Tarifs</strong><br/>
       $34.99 pour une personne de plus de 2 ans.
      </p>
      
      <p><a href="img/NYdarienlakeplan.jpg" target="_blank">Plan du parc</a></p>
    
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
<img src="img/NYdarienlake1.jpg" alt>
<img src="img/NYdarienlake2.jpg" alt>
<img src="img/NYdarienlake3.jpg" alt>
<img src="img/NYdarienlake4.jpg" alt>
<img src="img/NYdarienlake5.jpg" alt>
<img src="img/NYdarienlake6.jpg" alt>
<img src="img/NYdarienlake7.jpg" alt>
<img src="img/NYdarienlake8.jpg" alt>
</div>
</div>
</div>  

      

  
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
    
    <!-- insertion de la partie commentaire -->


      <?php 
        $page = 'darienlake';
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
