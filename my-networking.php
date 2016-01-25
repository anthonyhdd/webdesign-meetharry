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
		<h3>Rencontre en vrai de supers Harrys !</h3>

		<div class="inner_box">
			<div class="zone_left">
				<a class="activate_filters" href="javascript:void(0);" onClick="$('.em_mobile').slideDown();"><i class="fa fa-search"></i> Filter Results</a>
				<div class="em_mobile">
					<h5><i class="fa fa-th-list"></i> Domain</h5>
					<ul class="filters">
						<li><a class="tech" href="#">Tech</a></li>
						<li><a class="biz" href="#">Business</a></li>
						<li><a class="creative" href="#">Creative</a></li>
						<li><a class="other" href="#">Other</a></li>
					</ul>
					<h5><i class="fa fa-map-marker"></i> Location</h5>
					<ul class="filters">
						<li><a href="#">Paris</a></li>
						<li><a href="#">Lyon</a></li>
						<li><a href="#">Marseille</a></li>
						<li><a href="#">Lille</a></li>
						<!-- More city -->
						<div id="more_city" style="display: none;">
							<li><a href="#">City</a></li>
							<li><a href="#">City</a></li>
							<li><a href="#">City</a></li>
							<li><a href="#">City</a></li>
						</div>
						<li><a href="javascript:void(0);" onClick="$('#more_city').slideDown(200);">+ More</a></li>
					</ul>
				</div>
			</div><!-- END zone_left -->


			<div class="zone_right">


				<div class="i-messages">
					<i class="fa fa-info-circle"></i>
					La recherche de matchs avec d'autres Harrys est en cours...
					<br />
					Merci de patienter. Tu vas rencontrer <b>business</b> et deux autres Harrys <b>Paris</b>
				</div>


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


			</div><!-- END zone_right -->

			<div class="pagination">
				<a href="#"><i class="fa fa-arrow-left"></i> Prev</a>
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">Next <i class="fa fa-arrow-right"></i></a>
			</div>
		</div>

	</div><!-- END inner -->
</section>




<?php include 'footer.php'; ?>




</div><!-- End Container -->

</body>
</html>