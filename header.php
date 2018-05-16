<span style="font-size:small;"><div id="banniere_image"> </div></span>

<div id="header-row">
            	<!-- MENU DEROULANT -->
			<ul id="menu-deroulant">
				<li>
					<a href="index.php">Accueil</a>
				</li>

				<li>
					<a href="#">Les villes</a>
					<ul>
						<li><a href="NewYork.php">New York</a></li>
						<li><a href="Orlando.php">Orlando</a></li>
						<li><a href="Paris.php">Paris</a></li>
						<li><a href="Perth.php">Perth</a></li>
						<li><a href="Santiago.php">Santiago</a></li>
					</ul>
				</li>


				<li>
					<a href="coupdecoeur.php">Nos coups de coeur</a>
				</li>

				<li>
					<a href="apropos.php">Qui sommes-nous ?</a>
				</li>

				<li>
					<a href="#">Identification</a>
					<ul>
				<?php

        			session_start();

					if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])){
						echo '<li>
						<a href="BD/sedeconnecter.php">Se déconnecter</a>
						</li>';
						if ($_SESSION['admin']=="oui"){
							echo '<li>
							<a href="page-admin.php">Page admin</a>
							</li>';
						}
					}else
					{
						echo '<li>
						<a href="page-inscription.php">S\'inscrire</a>
						</li>';
						echo '<li>
						<a href="page-seconnecter.php">Se connecter</a>
						</li>';
					}
				?>
					</ul>
				</li>




			</ul>

</div>
