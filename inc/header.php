<?php
	date_default_timezone_set('Europe/Amsterdam');
  	include("inc/sql.php");
?>

<html lang="nl">
  	<head>
    	<meta charset="utf-8">
  		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- ///////////// bootstrap core files /////////////// -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- ///////////// Awesome Fonts icons /////////////// -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<!-- ///////////// google webfonts /////////////// -->
		<link href="https://fonts.googleapis.com/css?family=Bangers|Cabin+Sketch|Chewy|Fredoka+One|Luckiest+Guy|Righteous|Work+Sans" rel="stylesheet">
		<!-- //////////// Social media buttons ////////// -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<title>Development</title>
		<!-- ///////////// local core files /////////////// -->
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
  	</head>
  	<body id="home">
    
		<section class="header">
			<div class="jumbotron topbanner"></div>
			<div class="container">
				<nav class="navbar navbar-expand-sm menubalk">
					<h3 class="brand">FS Webdesigns</h3>
					<ul class="nav justify-content-center">
						<li class="nav-item"><a href="#" class="nav-link menulink" id="homebtn">Home</a></li>
						<li class="nav-item"><a href="<? print $portws->website;?>#about" class="nav-link menulink" id="aboutbtn">Projecten</a></li>
						<li class="nav-item"><a href="<? print $portws->website;?>#services" class="nav-link menulink" id="servbtn">Diensten</a></li>
						<li class="nav-item"><a href="<? print $portws->website;?>#contact" class="nav-link menulink" id="contactbtn">Contact</a></li>
					</ul>
				</nav>
			</div>
		</section>
  
  	<script type="text/javascript">
    
		$(document).ready(function(){
			$("#aboutbtn").click(function(){
				$("#home").addClass('about')
				$("#home").removeClass('service')
				$("#home").removeClass('contact')
				$(".topbanner").animate({
					opacity: 0,
					height: 0,
					padding: 0
				});
				$(".aboutcontent").slideDown("slow");
				$(".menubalk").addClass("small");
				$(".servcontent").slideUp("slow");
				$(".contactcontent").slideUp("slow");
			});
		});

		$(document).ready(function(){
			$("#servbtn").click(function(){
				$("#home").addClass('service')
				$("#home").removeClass('about')
				$("#home").removeClass('contact')
				$(".topbanner").animate({
					opacity: 0,
					height: 0,
					padding: 0
				});
				$(".servcontent").slideDown("slow");
				$(".menubalk").addClass("small");
				$(".aboutcontent").slideUp("slow");
				$(".contactcontent").slideUp("slow");
			});
		});
		
		$(document).ready(function(){
			$("#contactbtn").click(function(){
				$("#home").addClass('contact')
				$("#home").removeClass('about')
				$("#home").removeClass('service')
				$(".contactcontent").slideDown("slow");
				$(".topbanner").animate({
					opacity: 0,
					height: 0,
					padding: 0
				});
				$(".menubalk").addClass("small");
				$(".aboutcontent").slideUp("slow");
				$(".servcontent").slideUp("slow");
			});
		});
		
		$(document).ready(function(){
			$("#homebtn").click(function(){
				$("#home").removeClass('about')
				$("#home").removeClass('service')
				$("#home").removeClass('contact')
				$(".topbanner").animate({
					height: 500,
					opacity: 1
				});
				$(".menubalk").removeClass("small");
				$(".aboutcontent").slideUp("slow");
				$(".servcontent").slideUp("slow");
				$(".contactcontent").slideUp("slow");
			});
		});

  	</script>
  
