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


          <div class="box-profile-left">

              <img class="p-pic" src="http://preactis.co/beta/labo/user/meetharryandco/images/img_demo4.png">

              <div class="infos-profile">
                <b>@Username</b>
                <br />
                Habite à City <b><i>Ile-de-France</i></b>
                <br />
                Diplômé de <b>HEC :)</b>
              </div>

          </div><!-- END box-profile-left -->

          <div class="box-profile-right">

              <div class="name" id="name-project">
                  <b>Mes matchs</b>

					<div class="panel-body">

						<div class="checkbox" id="whatDiv">
						  	  <label>
							    <input type="checkbox" name="accepted" value="1" class="option-input checkbox" CHECKED />
							    Accepté
							  </label>
							  <label>
							    <input type="checkbox" name="pending" value="1" class="option-input checkbox" />
							    En cours
							  </label>
							  <label>
							    <input type="checkbox" name="declined" value="1" class="option-input checkbox" />
							    Refusé
							  </label>
						</div>

						 <div class="checkbox" id="byWhomDiv">
						  	  <label>
							    <input type="checkbox" name="byme" value="1" class="option-input checkbox" CHECKED />
							    Envoyé de ma part
							  </label>
							  <label>
							    <input type="checkbox" name="tome" value="1" class="option-input checkbox" />
							    Envoyé vers moi
							  </label>
						</div>

					</div>

              </div>

              <div class="profile-content f-matchs">

                  <div class="profile-section">
						Quand un Harry est intéressé par toi ou par ton harryco, il peut demander à te contacter. Si tu acceptes, vous aurez tous les deux les coordonnées de l'autre (numéro de téléphone, lien Facebook et email). 
						<br />
						Ça ne t'oblige à rien. Alors, amuse toi !
				  </div>

                  <div class="profile-section">


						<ul id="Grid">


						<!--
						  	<li class="for-projects">
								<div class="grid-img">
							  		<img src="images/..." alt="..." />
							  	</div>
						  		<span>
						  		  	<div class="box-user-match">
										<div class="l-user-match">
											<a href="..."><img src="images/..." alt="..." /></a>
										</div>
										<div class="c-user-match">
											<i class="fa fa-arrow-left"></i>
										</div>
										<div class="r-user-match">
											<a href="..."><img src="images/..." alt="..." /></a>
										</div>
								  	</div>
						  			<a href="...">...</a> te suggère de jeter un oeil au harryco : <strong><a href="">...</a></strong>
								    <div id="resultDiv">
								      	Détails du contact de <a href="...">...</a> :
								        <br />
								        Téléphone : ...
								        <br />
								        <i class="fa fa-facebook-official"></i> <a href="..." target="_blank">facebook</a>
								        <br />
								        Email : ...
								    </div>
								    <div class="chat-matchs">
								    	<i class="fa fa-comment"></i>
								    	...
								    </div>
								</span>
						  	</li>
						-->


					</ul>


				  </div><!-- END profile-section -->


              </div><!-- END profile-content -->


          </div><!-- END box-profile-right -->






        </div><!-- END profile -->


		</div><!-- END inner box -->
	</div><!-- END inner -->
</section>




<?php include 'footer.php'; ?>




</div><!-- End Container -->

</body>
</html>