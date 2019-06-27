<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Big Dog - Group4</title>
	<link rel="shortcut icon" href="assets/img/bigdog.png">

	<style>
    tab1 { padding-left: 1em; }
    tab2 { padding-left: 8em; }
    tab3 { padding-left: 12em; }
    tab4 { padding-left: 16em; }
    tab5 { padding-left: 20em; }
    tab6 { padding-left: 24em; }
    tab7 { padding-left: 28em; }
    tab8 { padding-left: 32em; }
    tab9 { padding-left: 36em; }
    tab10 { padding-left: 40em; }
    tab11 { padding-left: 44em; }
    tab12 { padding-left: 48em; }
    tab13 { padding-left: 52em; }
    tab14 { padding-left: 56em; }
    tab15 { padding-left: 60em; }
    tab16 { padding-left: 64em; }

	span.tab{
	position:absolute;
	width: 500px;
	height: 500px;
	text-align: center;
	margin: auto;
    padding: 0 80px; /* Or desired space*/
	left: 250px;

	.center{text-align: center;}
	.center_b{
	border: 1px solid #aaa;
	width: 200px;
	height: 100px;
	background: #AAAAAA;
	margin: auto;
	}
}
</style>

</head>
<body onload="firstscript();">
  <?php // The active value must correspond to the highlighted menu item (note there are two one for mobile and one for non-mobile
	$active = "home";
        include 'includes/header.php'; ?>

	<div id="main-content">

    <h2 class="title">CMSC447 - Game Of Life</h2>

	<div class="content">
	<h3>Welcome</h3>
    <a class="btn btn-primary" href="index.php"><span>Go Back</span></a>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.1/p5.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.1/addons/p5.dom.js"></script>
	<!--
	<script type="text/javascript" src="assets/js/sketch.js"></script>
	-->

    </div>
</html>