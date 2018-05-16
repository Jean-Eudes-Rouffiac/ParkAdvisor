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
            <h1>Orlando Sea World</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/orlando_sea_world.jpg "> <img class="illustration" alt="" src="img/orlando_sea_world.jpg" /></a>
      <p><!--Fantasilandia est un parc d'attractions pour tous les goûts et pour tout âge.<br/>-->Au centre de l'État de la Floride, aux abords de l'agglomération d'Orlando, s'étire le parc marin le plus célèbre du monde : Seaworld, et ses grands mammifères et poissons emblématiques, orques, requins et grands dauphins.</p>

      <p> <strong>Horaires</strong></br>
      Lundi: 10:00-20:00</br>
      Mardi: 10:00-20:00</br>
      Mercredi: 10:00-20:00</br>
      Jeudi: 10:00-20:00</br>
      Vendredi: 10:00-00:00</br>
      Samedi: 10:00-00:00</br>
      Dimanche: 12:00-20:00</br>
    
      </p>  
      <p><strong>Tarifs</strong><br/>
      Adulte: 100$<br/>
      Enfant: 90$<br/>
      Sénior: 90$<br/>
      </p>
      
      <p><a href="img/orlando_sea_world_map.jpg" target="_blank">Plan du parc</a></p>
    
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
<img src="img/orlando_sea_world_img1.jpg" alt>
<img src="img/orlando_sea_world_img2.jpg" alt>
<img src="img/orlando_sea_world_img3.jpg" alt>
<img src="img/orlando_sea_world_img4.jpg" alt>
<img src="img/orlando_sea_world_img5.jpg" alt>
<img src="img/orlando_sea_world_img6.jpg" alt>
<img src="img/orlando_sea_world_img7.jpg" alt>
<img src="img/orlando_sea_world_img8.jpg" alt>
</div>
</div>
</div>  

      

  
<div class="hr-divider"></div>

  <!--Les hotels-->

      <h2>Les hôtels</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_melia_hotel.php "> <img class="imageOnglet" src="img/orlando_melia_hotel.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Melia Hotel</strong>  
              <p>
                Hôtel situé au coeur de la vieille moderne et à proximité des parcs de la ville
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_the_alfond_inn.php "> <img class="imageOnglet" src="img/orlando_the_alfond_inn.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>The Alfond Inn</strong>
              <p>
               Hôtel de haut standing avec suites
              </p>   
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="orlando_westgate_lakes_resort.php "> <img class="imageOnglet" src="img/orlando_westgate_lakes_resort.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Westgate Lakes Resort</strong> 
              <p>
        Hôtel milieu de gamme très proches des parcs à thèmes
              </p>
            </div>
          </div>
        </li>
      </ul>

  
<div class="hr-divider"></div>
    
    <!-- insertion de la partie commentaire -->


      <?php 
        $page = 'sea_world';
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
