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

	            <?php include "header.php" ;?>	

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
	          			<A HREF="outfit_type.html"></A><img src="images/1.jpg" alt="" src= "outfit.html">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<a href="outfit_type.php"><h2>Want help with your outfit today ?</h2></a>
							
						</div>
	       			 </li>
			 		 <li>
	          			
	       			 </li>
					 <li>
	          			
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
    <div class="container">
        <div class="row">
            <div class="well">
                <div class="we">
               <?php
$url = file_get_contents("http://api.apixu.com/v1/current.json?key=aa456fd874f34932879144658161211&q=nablus");
$data = json_decode($url);
$temp = $data->current->temp_c;
$temp_1 = $temp-7 ; 
$temp_2 =$temp -1 ; 
if ($temp <=25){
    ?>
            
<h2 style="color:#FFC767;text-align:center;font-size:20px;">The tempreture is between "<?php echo $temp_1."-".$temp_2; ?>"</h2>
                <br>
    <h2 style="color:#FFC767;text-align:center;font-size:20px;">you should consider wearing jacket and more cozy clothes</h2>
                       
                
               
<div class="row">
  <div class="span4"></div>
  <div class="span4"><img class="center-block img-responsive" src="images/source.gif" /></div>
  <div class="span4"></div>
</div>
               
                
            <?php
} 
if ( $temp >=27){
    
    echo '<span style="color:#FFC767;text-align:center;font-size:20px;">The weather is a little hot . </span>'; 
    echo '<img src="images/.gif"  alt="hh"/>' ;
    
}
                     
                     
                     
                     ?>
            </div>
             </div>   
        </div>
    </div>
<!--//banner-->
<!--content-->

</div>

	
<!--footer-->
<div class="footer">
            <?php include "footer.php" ;?>	
</div>
<!--footer-->
</body>
</html>