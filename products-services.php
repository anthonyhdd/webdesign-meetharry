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

<section class="s_pages serv-products" id="discover">
	<div class="inner">

		<div class="inner_box">

				<div class="i-messages">
					<h1>Products & Services</h1>
					Découvrez ici nos produits & services ...
				</div>

				<ul id="Grid">


				<!--
				  	<li>
				  		<div class="grid-img">
				  			<img src="..." alt="..." />
				  		</div>
				  		<span>... <strong>...</strong></span>
				  		<div class="li-overlay"></div>
				  		<a class="view-more" href=""><i class="fa fa-shopping-cart"></i> ...</a>
					</li>
				-->


				</ul>

		</div>
	</div><!-- END inner -->
</section>



<?php include 'footer.php'; ?>



</div><!-- End Container -->

</body>
</html>