<?php
  date_default_timezone_set('Europe/Amsterdam');
  include("../inc/sql.php");
?>

<html lang="nl">
  <head>
    <meta charset="utf-8">
  	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- ///////////// bootstrap core files /////////////// -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- ///////////// Awesome Fonts icons /////////////// -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- ///////////// google webfonts /////////////// -->
    <link href="https://fonts.googleapis.com/css?family=Bangers|Cabin+Sketch|Chewy|Fredoka+One|Luckiest+Guy|Righteous" rel="stylesheet">
    <!-- //////////// Social media buttons ////////// -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  	<title>Create & Design | Uw webdeveloper voor al uw websites</title>
  	<!-- ///////////// local core files /////////////// -->
  	<link href="../css/create.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>
  <section class="header">
    <nav class="navbar navbar-inverse menubalk">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="<? print $portws->website;?>" class="menulink">Back</a></li>
            <li><a href="#" class="menulink">Projects</a></li>
            <li><a href="#" class="menulink">Prices</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<? print $portws->website;?>" class="menulink">Portfolio</a></li>
            <li><a href="#" class="menulink">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row toprow">
      <div class="container">
        <div class="jumbotron topbanner">
          <div class="container text-left">
            <h1 class="webbrand">Create & Design</h1>
            <p class="subtitle">Mission: Vision & Realise</p>
          </div>
        </div>
      </div>
    </div>
    
    <script type="text/javascript">
      $(window).scroll(function() {
  		  if ($(document).scrollTop() > 50) {
  			$('.menubalk').addClass('big');
  		  } else
  			  $('.menubalk').removeClass('big');
  		});
  		
  		$(document).ready(function(){
        $("#morebtn").click(function(){
            $(".header").animate({
                height: 0,
                padding: 0,
            });
            $(".topbanner").amimate({
                height: 0,
                padding: 0
            });
        });
    });
    </script>
    
  </section>
  
  
