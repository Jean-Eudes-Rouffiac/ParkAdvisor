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
            <h1>Disneyland Paris</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/disneyland.jpg "> <img class="illustration" alt="" src="img/disneyland.jpg" /></a>

      <p>Autrefois appelé Euro Disney Resort, Disneyland Paris est devenu un pôle touristique avec une superficie de plus de 22,30 km². Situé à Marne-la-Vallée (l’est de Paris), le parc est divisé en 2 : Disneyland Park, centré sur un monde fantastique avec plusieurs attractions divertissantes et décors attrayants et le parc Walt Disney Studios, est en revanche davantage axé sur le cinéma et l’univers d’Hollywood.
        Voulant satisfaire petits et grands, Disneyland Paris offre donc la possibilité aux enfants de découvrir la magie de Disney dans le premier parc et pour ceux qui recherchent des sensations fortes, le parc Walt Disney Studio saura les satisfaire.
        Le territoire est bien desservi par les transports : le RER A, l’autoroute A4 et une gare TGV permettent d’accéder à Disneyland Paris.
        Devenu le parc d’attractions n°1 de France, Disneyland Paris ouvre ses portes à des centaines de millions de visiteurs. Ces lieux sont composés d’une soixantaine d’attractions, de 8 hôtels, de 62 boutiques, de 58 restaurants et sans oublier d’une dizaine de salles de cinémas.</p>
        <p><a href="img/plan-Disneyland.jpg" target="_blank">Plan du parc</a></p> </br>
     <div class="horaire"> 
      <p> <strong>Horaires Parc Disneyland</strong></br>
        Tous les jours de 10h à 22h.
        </p> 
      <p> <strong>Horaires Parc Walt Disney Studios</strong></br> 
        Tous les jours de 10h à 19h.
        </p> 
      </div>   

      <div class="tarif"> 
      <p> <strong>Tarif</strong></br> 
      Billet Mini (Valable uniquement en semaine et hors vacances) : 49€/adulte (69€ pour un accès aux 2 parcs) et 42€/enfant (49€ pour un accès aux 2 parcs).</br>
      Billet Magic (Valable uniquement en semaine et hors vacances de haute saison) : 63€/adulte (83€ pour un accès aux 2 parcs) et 56€/enfant (76€ pour un accès aux 2 parcs).</br>
      Billet Super Magic (Valable tous les jours de l'année) : 79€/adulte (99€ pour un accès aux 2 parcs) et 71€/enfant (91€ pour un accès aux 2 parcs).
        </p> 
      </div>     
    
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
<img src="img/disneyland1.jpg" alt>
<img src="img/disneyland2.jpg" alt>
<img src="img/disneyland3.jpg" alt>
<img src="img/disneyland4.png" alt>
<img src="img/disneyland5.jpg" alt>
<img src="img/disneyland6.jpg" alt>
<img src="img/disneyland7.jpg" alt>
<img src="img/disneyland8.jpg" alt>
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
        $page = 'disneyland';
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
