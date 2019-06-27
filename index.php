<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  	<!-- Tab info: Name and image of the tab -->
  <title>Big Dog - Group4</title>
  <link rel="shortcut icon" href="assets/img/bigdog.png">

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/css-doodle/0.7.1/css-doodle.min.js"></script>

  <css-doodle grid="5" class="doodle">

		    :doodle {
		        @grid: 25 / 100vmax;
		        position:fixed;
    			z-index: -1;
		    }
		    background: @pick(#000000);
		    opacity: @r(0,.1);
		    clip-path: square(
		    );

	</css-doodle>


  <style>
  	body{
  		background-color: #FEDE45 !important;


  	}
  	marquee{
  		
  	}
  	img{

  		display: block;
  		margin-left: auto;
  		margin-right: auto;
  		color: transparent;
  	}

	h3{
  		text-align: center;
 
  	}
  	#big_dogs_logo{
  		display:block;
  		margin-left: auto;
  		margin-right: auto;
  	}

  	#main-content{
  		background-color: rgba(255,255,255,0.8);
  		bottom: 10px;
  		border-radius: 50px;
  		width: 50%;
  		margin-left: auto;
  		margin-right: auto;
		margin: auto;
		padding-top: 20px;
		padding-left: 20px;
		padding-right: 20px;
		height: 90%;
  	}

  	li{
		font-family: 'Baloo Bhai', cursive;"
  	}

  	p{

  		font-family: 'Baloo Bhai', cursive;"
  	}
 
  	.butn {
	  background: #FEDE45;
	  background-image: -webkit-linear-gradient(top, #FEDE45, #d6b627);
	  background-image: -moz-linear-gradient(top, #FEDE45, #d6b627);
	  background-image: -ms-linear-gradient(top, #FEDE45, #d6b627);
	  background-image: -o-linear-gradient(top, #FEDE45, #d6b627);
	  background-image: linear-gradient(to bottom, #FEDE45, #d6b627);
	  -webkit-border-radius: 5;
	  -moz-border-radius: 5;
	  border-radius: 5px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 20px;
	  padding: 10px 20px 10px 20px;
	  text-decoration: none;
	}

	.butn:hover {
	  background: #3ca4fa;
	  background-image: -webkit-linear-gradient(top, #3ca4fa, #338bd4);
	  background-image: -moz-linear-gradient(top, #3ca4fa, #338bd4);
	  background-image: -ms-linear-gradient(top, #3ca4fa, #338bd4);
	  background-image: -o-linear-gradient(top, #3ca4fa, #338bd4);
	  background-image: linear-gradient(to bottom, #3ca4fa, #338bd4);
	  text-decoration: none;
	}
	.container_test{
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}

	.Page{
		display:flex;
		flex-direction: row;
		height: 90%;
		width: 100%;
		justify-content: center;
		align-items: center;
	}

  </style>

</head>

<body>
  <?php // The active value must correspond to the highlighted menu item (note there are two one for mobile and one for non-mobile
	$active = "home";
        include 'includes/header.php'; ?>

	<div class="Page">

		<div id="big_dogs_logo" style = "height: 50%">
			<div><img id="head" src="assets/img/doghead.png"></div>
		</div>

		<div id="main-content">



		<!-- Title -->
		<h2 class="title" style="text-align: center">CMSC447 - Project</h2>

		<div class="content">
			<h3>Description:</h3>
			<p style="margin: 10px; font-family: 'Baloo Bhai', cursive; align-text:center;">This website was an assignment created by Prof. Russell Cain, guided by Dr. Amit Patra, and completed by Team BigDogs.  The webpages were developed in PHP, HTML, and CSS.  The game, which is written in Javascript, is based on Conway's Game of Life.</li>
			<br>
			<div style = "text-align: center;">	
				<a  style = "font-family: 'Baloo Bhai', cursive;" href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">(Wikipedia - Conway's Game of Life)</a>
			</div>
			<h3>Team BigDogs:</h3>

			<div style = "text-align: center;">

				<p> Daniel Diseroad</p>
				<p> Andrew Brewer </p>
				<p> Ren Brown </p>
				<p> Edwin Valdez </p>
				<p> Dion Olympia </p>
				<p> Yangyin Xu </p>


		</div>
		
		


		</div>
		<div class = "container_test" style = "margin: 50px;">
			<div>
				<div>
					<!-- A button that sends the user to the page that contains the game -->
					<a class="butn" href="assets/js/life/life.php"><span>Start Game</span></a>
				</div>
			</div>
		</div>


	</div>
	

	<!-- running dog -->
	<!--
	<marquee scrollamount="40"
		direction="left"
		behavior="scroll">
		<img src="assets/img/dog.gif" />
	</marquee>
	-->
	<?php include 'includes/footer.php'; ?>
</body>
</html>