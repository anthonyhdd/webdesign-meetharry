<?php include 'header.php'; ?>



<nav id="sidebar">
	<?php include 'sidebar.php'; ?>
</nav><!-- End navigation -->

<div id="container" style="display:none;">

<header id="top" class="homepage" data-speed="10" data-type="background">
	<video id="video-background" autoplay muted loop class="fillWidth">
		<source src="videos/MP4/Dancing-Bulbs.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
		<source src="videos/WEBM/Dancing-Bulbs.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
		<source src="videos/OGV/Dancing-Bulbs.ogv" type="video/ogv" />Your browser does not support the video tag. I suggest you upgrade your browser.
	</video>
	<div class="video_overlay"></div>

	<a class="social_link_facebook" href="#"><i class="fa fa-facebook"></i></a>
	<a class="social_link_twitter" href="#"><i class="fa fa-twitter"></i></a>
	<a class="social_link_linkedin" href="#"><i class="fa fa-linkedin"></i></a>

	<div class="menu_first"><!-- Menu desktop -->
		<a class="logo" href="#"><img src="images/f_logo_white.png" alt="meetHarry&Co" width="300" height="39" /></a>
		<a id="button-menu" href="javascript:void(0);"><i class="fa fa-bars"></i></a><!-- Ouverture menu responsive -->
		<?php include 'menu.php'; ?>
	</div>

	<h1>Bienvenue, Harry</h1>
	<h2>Un endroit unique où vous pouvez rencontrer des personnes de mondes différents, et faire des choses géniales ensemble !</h2>
	<a class="p_button" href="#talents">Find a cofounder</a>
</header>


<section id="talents" style="border-bottom:3px solid #f8f8f8;">
	<p>
		Et n'oublie pas de <a href="">partager à tes amis</a> . Ensemble - c'est bien plus amusant !
		<br />
		<br />
		<br />
		... nouveaux harrys
	</p>
	<div class="in">
		<ul id="Grid">


				<!--
				  	<li class="...">
				  		<div class="city-user"><i class="fa fa-map-marker"></i> ...</div>
				  		<div class="grid-img">
				  			<img src="images/..." alt="..." />
				  		</div>
				  		<span>... <b>...</b></span>
				  		<div class="li-overlay"></div>
				  		<a class="view-more" href="">...</a>
				  	</li>
				-->

				<!-- li class="u-tech" -->
	            <!-- li class="u-biz" -->
	            <!-- li class="u-creative" -->
	            <!-- li class="u-other" -->

		</ul>

		<br />
		<br />

		<a class="p_button" href="people.php">Plus de Harrys</a>
	</div>
</section>




<section id="talents">
	<p>
		... nouveaux harrycos
	</p>
	<div class="in">
		<ul id="Grid">


				<!--
				  	<li class="for-projects">
				  		<div class="city-project"><i class="fa fa-map-marker"></i> ...</div>
				  		<div class="grid-img">
				  			<img src="images/..." alt="..." />
				  		</div>
				  		<span>
				  			<b>...</b>
				  			<br />
				  			...
				  		</span>
				  		<div class="li-overlay"></div>
				  		<a class="view-more" href="">...</a>
				  	</li>
				-->

		</ul>

		<br />
		<br />

		<a class="p_button" href="projects.php">Plus de Harrycos</a>
	</div>
</section>



<?php include 'footer.php'; ?>



</div><!-- End Container -->

</body>
</html>