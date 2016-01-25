<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=no">
	<title>Labo de MeetHarry&Co</title>
	<meta name="description" content="">
	<meta name="robots" content="noindex, nofollow" />
	<meta name="googlebot" content="noindex, nofollow" />

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="http://preactis.co/beta/labo/user/meetharryandco/css/style.css" />
<script src="https://code.jquery.com/jquery-2.0.0b1.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function(returntop) {
	    var scrollWin = function (selector) {
	        jQuery('html, body').animate({
	        scrollTop: jQuery(selector).offset().top
	        }, 1200);
	      }
	      jQuery("[href^=#]").click(function(e) {
	        scrollWin (jQuery(this).attr("href"));
	        return false;
	      });
	});


	$(document).ready(function(parallax){
	    $window = $(window);
	        $('header[data-type="background"]').each(function(){
	          var $bgobj = $(this);
	            $(window).scroll(function() {     
	        var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
	        var coords = '50% '+ yPos + 'px';
	        $bgobj.css({ backgroundPosition: coords });
	      });
	    });
	});


	$(window).load(function(cooleffect) {
		$('#container').delay(1000).fadeIn(600);
		$('#intro').delay(300).fadeOut(600);
	});


    $(document).ready(function(clickmenu){
	 	$('#button-menu').on('click', function(){
	        $('#sidebar').addClass('open-sidebar');
	    });
	 	$('#button-menu-close').on('click', function(){
	        $('#sidebar').removeClass('open-sidebar');
	    });
	});
</script>
</head>

<body>

<div id="intro"><div class="loadimg"><img src="images/loading.png" alt="loading..." width="100" height="100" /></div></div>