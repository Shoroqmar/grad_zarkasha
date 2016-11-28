<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
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
  <script type="text/javascript">
 $(document).ready(function()
 {
 $("#insert").click(function(){
 var title=$("#title").val();
 var duration=$("#duration").val();
 var price=$("#price").val();
 var dataString="title="+title+"&duration="+duration+"&price="+price+"&insert=";
 if($.trim(title).length>0 & $.trim(duration).length>0 & $.trim(price).length>0)
 {
 $.ajax({
 type: "POST",
 url:"http://localhost/phonegap/database/insert.php",
 data: dataString,
 crossDomain: true,
 cache: false,
 beforeSend: function(){ $("#insert").val('Connecting...');},
 success: function(data){
 if(data=="success")
 {
 alert("inserted");
 $("#insert").val('submit');
 }
 else if(data=="error")
 {
 alert("error");
 }
 }
 });
 }return false;
 });
 });
 </script>
  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body >
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">

					<h1><a href="index.html">Zarkasha</a></h1>	
				</div>
			<!-- <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div> -->
			</div>
			<!-- <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
					<p>Call me</p>
				</div> -->
			<div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">		
<!-- 				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
 -->			</div>
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
							<li><a href="index.html">Home</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												
											</ul>
										  </div>
									   </div>
									</div>
									<!-- Nav tabs -->
									                
								</div>				
							</li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Weather Recommendation<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												
											</ul>
										  </div>
										 
									   </div>
									</div>
									<!-- Nav tabs -->
									                   
								</div>				
							</li>
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
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--banner-->
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<A HREF="outfit.html"></A><img src="images/1.jpg" alt="" src= "outfit.html">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<a href="outfit.php"><h2>Want help with your outfit today ?</h2></a>
							
						</div>
	       			 </li>
			 		 <li>
	          			<img src="images/3.jpg" alt=""> 
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>					
	       			 </li>
					 <li>
	          			<img src="images/2.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi5.png" alt="" />
						</a>
						<h3><a href="single.html">Noura</a></h3>
						<div class="price">
								<h5 class="item_price"></h5>
								<a href="#" class="item_add">i just choosed this </a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
				<br>
				<!-- <div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
					<div class="col-md3">
						<div class="up-t">
							<h3>Flat 50% Offer</h3>
						</div>
					</div>
				</div> -->
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi4.png" alt="" />
						</a>
						<h3><a href="single.html">Hanen</a></h3>
						<div class="price">
								<h5 class="item_price"></h5>
								<a href="#" class="item_add">what a beautiful pants </a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>	
			<!-- <div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi3.png" alt="" />
						</a>
						<h3><a href="single.html">shoroq</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	 -->
			<!-- <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi2.png" alt="" />
						</a>
						<h3><a href="single.html">Trouser</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	 -->
			<!-- <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi6.png" alt="" />
						</a>
						<h3><a href="single.html">Trouser</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 cmn animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi8.png" alt="" />
						</a>
						<h3><a href="single.html">Palazoo</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	 -->
			<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</div>
<!--//content-->
	<!-- <div class="con-tp">
		<div class="container">
			<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
				<a href="products.html">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
										<h4>30%offer</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<a href="products.html">			
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>45%offer</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
				<a href="products.html">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>50%offer</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
			<a href="products.html">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>25%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
			<a href="products.html">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>50%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
			<a href="products.html">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>35%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div> -->
	<div class="c-btm">
		<div class="content-top1">
			<div class="container">
				<!-- <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi9.png" alt="" />
						</a>
						<h3><a href="single.html">john</a></h3>
						<div class="price">
								<h5 class="item_price"></h5>
								<a href="#" class="item_add">great outfit</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	 -->
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi10.png" alt="" />
						</a>
						<h3><a href="single.html">Chandler</a></h3>
						<div class="price">
								<h5 class="item_price"></h5>
								<a href="#" class="item_add">what do you think ? </a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi11.png" alt="" />
						</a>
						<h3><a href="single.html">Ross</a></h3>
						<div class="price">
								<h5 class="item_price"></h5>
								<a href="#" class="item_add">Great outfit . </a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<!-- <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi12.png" alt="" />
						</a>
						<h3><a href="single.html">Formal</a></h3>
						<div class="price">
								<h5 class="item_price">$400</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	 -->
			<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
            <div class="btn btn-primary"></div>
            
			</div>
	</div>
</div>
<!--footer-->
</body>
</html>