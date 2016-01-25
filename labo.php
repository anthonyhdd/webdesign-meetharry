<?php include 'header.php'; ?>


<nav id="sidebar">
	<?php include 'sidebar.php'; ?>
</nav><!-- End navigation -->

<div id="container" style="display:none;">

<header id="top" data-speed="10" data-type="background">
	<video id="video-background" autoplay muted loop class="fillWidth">
		<source src="videos/MP4/We-Work-We-Wait.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
		<source src="videos/WEBM/We-Work-We-Wait.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
		<source src="videos/OGV/We-Work-We-Wait.ogv" type="video/ogv" />Your browser does not support the video tag. I suggest you upgrade your browser.
	</video>
	<div class="video_overlay"></div>

	<a class="social_link_facebook" href="#"><i class="fa fa-facebook"></i></a>
	<a class="social_link_twitter" href="#"><i class="fa fa-twitter"></i></a>
	<a class="social_link_linkedin" href="#"><i class="fa fa-linkedin"></i></a>

	<div class="menu_first"><!-- Menu desktop -->
		<a class="logo" href="#"><img src="images/f_logo_white.png" alt="meetHarry&Co" width="300" height="39" /></a>
		<a class="top_menu" id="hide_mobile" href="javascript:void(0);" onClick="$('.dialogbox').show();$('.dialogbox-overlay').fadeIn();">Sign In</a>
		<a id="button-menu" href="javascript:void(0);"><i class="fa fa-bars"></i></a><!-- Ouverture menu responsive -->
	</div>

	<h1>More than startups, we are passionate about people</h1>
	<h2>Meet tech, biz & design talents</h2>
	<a class="p_button" href="#">Find a cofounder</a>
	
	<div class="htw">
		<a class="hiw" href="faq.php">How it works</a>
		<div class="how_it_works">
			<span class="h_search"><i class="fa fa-check"></i> Search</span>
			<span class="h_meet"><i class="fa fa-check"></i> Meet</span>
			<span class="h_build"><i class="fa fa-check"></i> Build</span>
		</div>
	</div>
</header>


<!--
	Sur lien Sign In et autres...
	<a href="javascript:void(0);" onClick="$('.dialogbox').show();$('.dialogbox-overlay').fadeIn();">...</a>
-->
<div class="dialogbox">
  <h3>Titre</h3>
  <p>Ceci est une boite de dialogue...</p>
  <button onClick="$('.dialogbox').hide();$('.dialogbox-overlay').fadeOut();">Annuler</button>
  <button autofocus>OK</button>
</div>
<div class="dialogbox-overlay"></div>


<section id="talents">
	<h3>Choose from the best students and graduates</h3>
	<p>It's never been easler to meet talents to create a project together</p>
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
	</div>
</section>

<section id="projects">
	<div class="p_partners">
		<div class="p_partner"><img src="images/..." alt="" /></div>
		<div class="p_partner"><img src="images/..." alt="" /></div>
		<div class="p_partner"><img src="images/..." alt="" /></div>
		<div class="p_partner"><img src="images/..." alt="" /></div>
	</div>
	<a class="p_button" href="projects.php">Browse projects</a>
	<p>Meet a team in <b>France</b>, for the moment...</p>
</section>

<section id="ecosystem">
	<h3>The ecosystem loves <img class="img_f_logo" src="images/f_logo.png" alt="meetHarry&Co" /></h3>
	<div class="p_partners">
		<div class="p_partner"><img src="images/..." alt="" /></div>
		<div class="p_partner"><img src="images/..." alt="" /></div>
		<div class="p_partner"><img src="images/..." alt="" /></div>
	</div>
</section>

<section id="testamonials-section">
	<h3>What Drives Us</h3>
	<div class="testamonials">
	    <div class="inside">
	      <div class="testamonial">
	        <h4>Grâce à MeetHarry&Co, j'ai rencontré mon associé et nous avons récolté plus de 250 000 euros grâce à une campagne de crowdfunding.</h4>
	        <div class="author">
	          <p>Thomas Eros, ancien étudiant à l'ESTIA et cofondateur de SLICK</p>
	        </div>
	      </div>
	      <div class="faces">
	        <div class="line">
	          <a href="#" data-order="0" class="face selected"></a>
	          <a href="#" data-order="1" class="face"></a>
	          <a href="#" data-order="2" class="face"></a>
	        </div>
	      </div>
	    </div>
	  </div>
</section>

<section id="landing-cards">
	<div class="landing-cards-box">
		<h3>Nombre d'inscrits</h3>
		<p>...</p>
	</div>
	<div class="landing-cards-box">
		<h3>Nombre de matchs</h3>
		<p>...</p>
	</div>
	<div class="landing-cards-box">
		<h3>Nombre de projets</h3>
		<p>...</p>
	</div>
</section>

<section id="newsletter">
	<h3>Get notified when new exciting people and projects join us</h3>
	<p>It's never been easier to meet talents to create a project together</p>
	<div class="p_newletter">
		<form action="" method="post">
			<input class="general_in" type="email" name="" placeholder="@">
			<input type="submit" value="Submit">
		</form>
	</div>
</section>

<script>
$(document).ready(function(testam) {
    var faces = document.querySelectorAll('.face');
    var testamonial = document.querySelector('.testamonial');
    var testamonialHeadline = testamonial.querySelector('h4');
    var testamonialName = testamonial.querySelector('p');
    var setFace = function(current) {
      for (var i=0; i<faces.length; i++) {
        faces[i].classList.remove('selected');
      }
      faces[current].classList.add('selected');
    };
    var setTestamonial = function(quote) {
      testamonial.classList.add('invisible');
      setTimeout(function() {
        testamonialHeadline.innerHTML = quote.quote;
        testamonialName.innerHTML = quote.name;
        testamonial.classList.remove('invisible');
      }, 350);
    };
    var testamonialsCurrent  = 1;
	var quotes = [
	    {
	        name: 'Thomas Eros, ancien étudiant à l\'ESTIA et cofondateur de SLICK',
	        quote: 'Grâce à MeetHarry&Co, j\'ai rencontré mon associé et nous avons récolté plus de 250 000 euros grâce à une campagne de crowdfunding.'
	    },
	    {
	        name: 'Dorian Gobin, diplômé Université Paris I Sorbonne',
	        quote: 'MeetHarry&Co m\'intéresse particulièrement pour sa capacité à mettre en relation différents profils, assez facilement. C\'est du réseautage intelligent et pour le peu que j\'ai vu depuis mon inscription, c\'est assez bien mené. Bravo !'
	    },
	    {
	        name: 'Faidi Zied, diplômé à Paris V René Descartes et entrepreneur',
	        quote: 'J\'ai reçu pas mal de propositions et je viens de m\'associer avec un Harry (utilisateur) pour un projet innovant... Tout ça grâce à MeetHarry&Co. Bravo !'
	    }
	];
    for (var i=0; i<faces.length; i++) {
      faces[i].addEventListener('click', function(e) {
        e.preventDefault();
        this.classList.add('selected');
        testamonialsCurrent = this.dataset.order;
        setTestamonial(quotes[testamonialsCurrent]);
        setFace(testamonialsCurrent);
        testamonialsCurrent++;
      });
    }
});
</script>



<?php include 'footer.php'; ?>



</div><!-- End Container -->

</body>
</html>