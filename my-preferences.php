<?php include 'header.php'; ?>


<nav id="sidebar">
	<?php include 'sidebar.php'; ?>
</nav><!-- End navigation -->

<div id="container" style="display:none;">

<header class="pages" id="top" data-speed="10" data-type="background">
	<div class="menu_first"><!-- Menu desktop -->
		<a class="logo" href="#"><img src="images/f_logo.png" alt="meetHarry&Co" width="300" height="39" /></a>
		<a class="top_menu" id="hide_mobile" href="#">Sign In</a>
		<a id="button-menu" href="javascript:void(0);"><i class="fa fa-bars"></i></a><!-- Ouverture menu responsive -->


		<?php include 'menu.php'; ?>


	</div>
</header>




<section class="s_pages" id="discover">
	<div class="inner">

		<div class="inner_box">


        <div class="profile">


              <div class="name" id="name-project">
                  <b>Mes préférences</b>  
              </div>

              <div class="profile-content">
                  <div class="profile-section">


						<form class="preferences">
							<strong>Langue d'interface du site web :</strong>
						    <select>
								<option value="">Français</option>
							</select>
							<strong>&Agrave; quelle fréquence envoyer des emails sur les nouveaux matchs avec des harryco</strong>
						    <select>
								<option value="">&Agrave; chaque fois</option>
							</select>
							<strong>&Agrave; quelle fréquence envoyer des emails sur les rendez-vous physiques</strong>
						    <select>
								<option value="">&Agrave; chaque fois</option>
							</select>
						    <input id="refresh-btn" type="submit" value="Enregistrer les préférences">
						</form>


                  </div>
              </div>



        </div><!-- END profile -->


		</div><!-- END inner box -->
	</div><!-- END inner -->
</section>




<?php include 'footer.php'; ?>




</div><!-- End Container -->

</body>
</html>