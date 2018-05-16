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
            <h1>Aquaboulevard</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/Aquaboulevard.jpg "> <img class="illustration" alt="" src="img/Aquaboulevard.jpg" /></a>

      <p>L’Aquaboulevard de Paris vous propose, ainsi qu’à vos familles, un embarquement immédiat dans le plus grand Parc Aquatique urbain d’Europe : 2 bassins à vagues, 11 toboggans géants, des jacuzzis intérieurs et extérieurs, des rivières à contre-courant, 4 000m² de sable fin pour une vraie plage de bord de mer, plus de 30 paillotes de l’Ile Maurice ainsi qu’une multitude de jeux d’eau… A l’Aquaboulevard de Paris, le dépaysement et l’amusement sont très importants, mais l’hygiène et la sécurité restent les priorités numéros 1. En matière d’hygiène, l’eau de tous les bassins est réalimentée, traitée et recyclée en temps réel, au-delà des normes de qualité légales obligatoires. En matière de sécurité, tout l’équipage de nos maîtres-nageurs diplômés reste très vigilant en permanence pour votre plus grande sécurité. Des caméras et le personnel de surveillance gardent sans cesse un œil discret mais vigilant sur votre tranquillité. Deux postes de sécurité sont installés à l’intérieur du Parc Aquatique. Parc interdit aux enfants de moins de 3 ans. Les extérieurs ne sont ouverts que pendant la saison haute. Parking couvert attenant à l’Aquaboulevard.</p> 
       <p><a href="img/plan-Aquaboulevard.png" target="_blank">Plan du parc</a></p> </br>

      <p> </p><strong>Horaires</strong></br>
      Lundi: 09:00-23:00</br>
      Mardi: 09:00-23:00</br>
      Mercredi: 09:00-23:00</br>
      Jeudi: 09:00-23:00</br>
      Vendredi: 09:00-00:00</br>
      Samedi: 08:00-00:00</br>
      Dimanche: 08:00-23:00</br>
    
      </p>  


      <p> <strong>Tarif</strong></br> 
      33€ - 19€ (de 3 à 11 ans)</br>

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
<img src="img/aquaboulevard1.jpg" alt>
<img src="img/aquaboulevard2.jpg" alt>
<img src="img/aquaboulevard3.jpg" alt>
<img src="img/aquaboulevard4.jpg" alt>
<img src="img/aquaboulevard5.jpg" alt>
<img src="img/aquaboulevard6.jpg" alt>
<img src="img/aquaboulevard7.jpg" alt>
<img src="img/aquaboulevard8.jpg" alt>
</div>
</div>
</div> 
      

  
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
    
    <!-- insertion de la partie commentaire -->


      <?php 
        $page = 'Aquaboulevard';
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
