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

		<h3>Recherche des harrycos à rejoindre* <span class="h3_bubble">*on a trouvé 131 harryco(s)</span></h3>

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
			</div>

			<div class="zone_right">

				<form id="search-form" class="form-horizontal" role="form">
				    <select class="selectpicker" data-live-search="true" name="department">
						<option value="" selected="">Rechercher partout</option>
					</select>
				    <input type="text" id="tagsSearchInput" name="tags" placeholder="Tes compétences" class="form-control" value="">
				    <br />
				    <input id="refresh-btn" type="submit" value="Search">
				    <a class="p_button green" href="/people?people-for-my-project=1"><span class="glyphicon glyphicon-search"></span>  Harrycos qui ont besoin de moi</a>
				</form>

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

			</div>
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