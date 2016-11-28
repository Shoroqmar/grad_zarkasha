<?php 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<title> Weather Page </title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="weather-icons.min.css">

<link rel="stylesheet" href="weather.css"> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<!--    weather j query -->
    <script src="//code.jquery.com/jquery-3.0.0.min.js"></script>

<script src="yahoo-weather-jquery-plugin.js"></script>

  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					<h1><a href="index.html">Zarkasha</a></h1>	
				</div>
		
	

				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
				   <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							
							<li class="dropdown mega-dropdown active">
											
								<div class="dropdown-menu mega-dropdown-menu">
			
							<li class="dropdown mega-dropdown active">		
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" 
										 
									   </div>
									</div>
									<!-- Nav tabs -->
									                   
								</div>				
							</li>
                            <li><a href="products.html">Home</a</li>
							<li><a href="products.html">Setting</a></li>
							<li><a href="account.html">Weather</a></li>
							<li class="last"><a href="contact.html">Contact</a></li>
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						
					</div>				
				</div>

	<!---->		
		</div>
	</div>
</div>
<!--banner-->
<!--            weather -->
            <div class="container" > 
             <div class="well  well-sm">
            
      <a href="http://www.accuweather.com/en/ps/nablus/261361/weather-forecast/261361" class="aw-widget-legal">
<!--f
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1479139187119" class="aw-widget-current"  data-locationkey="261361" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1479139187119"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                </div> 
            </div>
            <div class="container">
                 
                     
                 <?php
$jsonurl = "http://weather.yahooapis.com/forecastrss";
$json = file_get_contents($jsonurl);

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
                 
                 <?php
$url = file_get_contents("http://api.apixu.com/v1/current.json?key=aa456fd874f34932879144658161211&q=nablus");
$data = json_decode($url);
$temp = $data->current->temp_c;
$temp_1 = $temp-7 ; 
$temp_2 =$temp -1 ; 
if ($temp <=25){
 echo '<span style="color:#FFC767;text-align:center;font-size:20px;">The tempreture is between</span>'; 
echo $temp_1."-".$temp_2; 
     echo '<span style="color:#FFC767;text-align:center;font-size:20px;">you should consider wearing jacket and more cozy clothes</span>'; 
    echo '<img src="images/sweat.gif"  alt="hh"/>';
} 
if ( $temp >=27){
    
    echo '<span style="color:#FFC767;text-align:center;font-size:20px;">The weather is a little hot . </span>'; 
    echo '<img src="images/.gif"  alt="hh"/>' ;
    
}
                     
                     
                     
                     ?>

                         <br>
    
                     </div>
<!--            //weather -->
            

               
<!--//banner-->
<!--content-->

<!--//content-->
	
	
<!--footer-->

<div class="footer">
	
		<div class="footer-bottom">
		<div class="container">

		
		
			
				<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2016 Zarkasha . All Rights Reserved </p>
			</div>
	</div>
</div>

<!--footer-->
</body>
</html>