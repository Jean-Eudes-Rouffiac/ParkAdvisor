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
            <h1>Fantasilandia</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/fantasilandia.jpg "> <img class="illustration" alt="" src="img/fantasilandia.jpg" /></a>
      <p><!--Fantasilandia est un parc d'attractions pour tous les goûts et pour tout âge.<br/>-->Équipé de manèges à sensations fortes, d'attractions familiales ou encore
      d'une zone enfants, le parc saura combler toutes vos envies !</p>

      <p> <strong>Horaires</strong></br>
      Lundi: Fermé sauf si férié ou vacances</br>
      Mardi: Fermé sauf si férié ou vacances</br>
      Mercredi: Fermé sauf si férié ou vacances</br>
      Jeudi: Fermé sauf si férié ou vacances</br>
      Vendredi: Fermé sauf si férié ou vacances</br>
      Samedi: 12:00-19:00</br>
      Dimanche: 12:00-19:00</br>
    
      </p>  
      <p><strong>Tarifs</strong><br/>
      Adulte: 14.990$<br/>
      Enfant: 6.990$<br/>
      Sénior: 6.990$<br/>
      </p>
      
      <p><a href="img/plan-fantasilandia.png" target="_blank">Plan du parc</a></p>
    
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
<img src="img/tren-fantasilandia.png" alt>
<img src="img/volare-fantasilandi.png" alt>
<img src="img/tsunami-fantasilandia.png" alt>
<img src="img/toingboing-fantasilandia.png" alt>
<img src="img/raptor-fantasilandia.png" alt>
<img src="img/xfall-fantasilandi.png" alt>
<img src="img/airrace-fantasilandia.png" alt>
<img src="img/mouse-fantasilandia.png" alt>
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
        $page = 'fantasilandia';
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
