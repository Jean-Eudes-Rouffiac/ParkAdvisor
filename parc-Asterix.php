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
            <h1>Parc Astérix</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/parcasterix.png "> <img class="illustration" alt="" src="img/parcasterix.png" /></a>

      <p>Aventurez-vous au cœur du célèbre Village et goûtez aux joies d’une vie de Gaulois ; pénétrez dans l’Empire Romain et engagez-vous dans la légion ou assistez aux prouesses de nos fiers légionnaires dans les Arènes ; plongez dans la mythologie en Grèce Antique ; mettez votre courage à l’épreuve en affrontant les Vikings et traversez le temps en parcourant les rues de Paris, du Moyen-Age au XIXème siècle.</br>
        A l'entrée de l'imposante Gare Montparnoss, Pégase Express est la nouvelle grande attraction du Parc Astérix. Il s'agit du plus gros investissement du parc depuis son ouverture, d'une valeur de 16 millions d'euros. Cette nouvelle montagne russe propose un voyage à sensations autour du monde à bord d'un train de la Grèce Antique. </p> 
       <p>  De nombreux défis que petits et grands Gaulois devront relever pour espérer devenir à leur tour de vrais Irréductibles ! N'hésitez plus, foncez vers ce parc d'attractions, vous ne serez pas déçus !</p> 
       <p><a href="img/plan-parc_Asterix.jpg" target="_blank">Plan du parc</a></p> </br>

      <p> <strong>Horaires</strong></br> 
        Ouvert tous les jours de 10h à 18h du 31 mars au 4 novembre.
        </p> 


      <p> <strong>Tarif</strong></br> 
      Plein Tarif : 49€ - 41€ (moins de 12 ans)</br>
      Pass Saison : 104€ - 94€ (moins de 12 ans)</br>
      Tarif Famille (Au moins 5 personnes) : 46€ - 37€ (moins de 12 ans) </br>
        </p> 
   
    
<div class="hr-divider"></div>
    
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
<img src="img/parcasterix1.jpg" alt>
<img src="img/parcasterix2.jpg" alt>
<img src="img/parcasterix3.jpg" alt>
<img src="img/parcasterix4.jpg" alt>
<img src="img/parcasterix5.jpg" alt>
<img src="img/parcasterix6.jpg" alt>
<img src="img/parcasterix7.jpg" alt>
<img src="img/parcasterix8.jpg" alt>
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
        $page = 'ParcAsterix';
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
