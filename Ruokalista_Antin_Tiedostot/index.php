<!DOCTYPE html>
<!-- saved from url=(0038)http://getbootstrap.com/examples/grid/ -->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Ruokalista</title>

	



    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/grid.css" rel="stylesheet">
<link href="css/layout.css" rel="stylesheet" type=/css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Grid Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
  </head>

  <body>
  
  
  
    <div class="container">

      <div class="page-header">
	  	<img src="images/logo.jpg"/>
      </div>
	
	
      <div class="row">
	  
	
      	<div class="col-xs-2 
		  <?php 
		  index.php?day=20150127
		    if (date("l", $)_GET["day"]) == "Monday") {
			  echo "active";
			}
			?>
		">Ma<span class="hide-mobile">anantai</span></div>
		<a href="index.php?day=20150127>Keskiviikko </a>"
        <div class="col-xs-2
			 <?php 
		    if (date("l")== "Tuesday") {
			  echo "active";
			}
			?>
		">Ti<span class="hide-mobile">istai</span></div>
		
		
        <div class="col-xs-2
			<?php 
		    if (date("l") == "Wednesday") {
			  echo "active";
			}
			?>
		">Ke<span class="hide-mobile">skiviikko</span></div>
		
        <div class="col-xs-2
			<?php 
		    if (date("l") == "Thursday") {
			  echo "active";
			}
			?>
		">To<span class="hide-mobile">rstai</span></div>
		
		
        <div class="col-xs-2
			<?php 
		    if (date("l") == "Friday") {
			  echo "active";
			}
			?>
		">Pe<span class="hide-mobile">rjantai</span></div>
        <div class="col-xs-2"><img src="#"/></div>
	
		<!--INFOPAINIKE NÄKYVISSÄ VAIN MOBIILISSA KOSKA MUUTEN EI OLE TARVETTA, KESKEN VIELÄ-->
      </div>
	
      <div class="row">
	  	<div class="col-xs-12, col-sm-6" id="info">
			Mäkelän Koulun ravintola palvelee opiskelijoita, oppilaitoksen henkilökuntaa sekä ulkopuolelta tulevien yritysten henkilökuntaa ja vierailijoita arkisin klo 15 saakka. Sopimuksen mukaan avoinna myös iltaisin ja viikonloppuisin. Tältä sivulta näet viikon ruokalistan.
		</div>
	  	<div class="col-xs-12, col-sm-6">
			<h1>Päivän ruokalista</h1>
			<?php 
	include ("jsonesim.php"); 
	?>

			<h3>Arvostele valittu ruoka</h3>
			<!--TÄHÄN TULEE TÄHDET JOITA KLIKKAAMALLA RUOAN VOI ARVOSTELLA 1-5-->
			<!--TÄHÄN TULEE NUMEROILLA ARVOSTELUJEN KESKIARVO-->
		</div>
	  </div>

      
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Grid Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>