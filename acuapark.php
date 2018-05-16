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
            <h1>Acuapark El Idilio</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/acuapark.jpg "> <img class="illustration" alt="" src="img/acuapark.jpg" /></a>
      <p>Parc aquatique pour toute la famille ! Tobbogans, piscines, zone de picnic, jeux...</p>

      <p> <strong>Horaires</strong> de novembre à mars</br>
      Lundi: 08:30-19:30</br>
      Mardi: 08:30-19:30</br>
      Mercredi: 08:30-19:30</br>
      Jeudi: 08:30-19:30</br>
      Vendredi: 08:30-19:30</br>
      Samedi: 08:30-19:30</br>
      Dimanche: 08:30-19:30</br>
    
      </p>  
      <p><strong>Tarif</strong><br/>
      6.000$<br/>
      </p>
      
      <p><a href="img/plan-acuapark.png" target="_blank">Plan du parc</a></p>
    
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
<img src="img/acuapark-pelican.jpg" alt>
<img src="img/acuapark-champi.jpg" alt>
<img src="img/acuapark-tobbogan.jpg" alt>
<img src="img/acuapark-toupi.jpg" alt>
<img src="img/acuapark1.jpg" alt>
<img src="img/acuapark2.jpg" alt>
<img src="img/acuapark3.jpg" alt>
<img src="img/acuapark4.jpg" alt>
</div>
</div>
</div>  

      
  
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
    
    <!-- insertion de la partie commentaire -->


      <?php 
        $page = 'acuapark';
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
