<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>User Home</title>
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
<?php include 'header.php'; ?>
<!--//header-->


<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			</ol>
		</div>
</div>


<!--banner-->

<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
											<?php 
							require_once 'connect.php';
							$sql="SELECT * FROM userclothes u INNER JOIN user us on us.id=u.userid";
							$query = mysqli_query($conn,$sql);
							while($result = mysqli_fetch_assoc($query))
							{
						?>
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">


							<?php echo "<img class='img-responsive' src='uploads/".$result['clothe']."' alt='' />"; ?>
						</a>
						<?php echo "<h3><a href='other.php?do=".$result['userid']."'>";?><?php echo $result['name'];?></a></h3>
						<div class="price">
								<h5 class="item_price"></h5>
								<a href="#" class="item_add">i just choosed this </a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	

				<br>
			
				
			
			<div class="clearfix"> </div>
			</div>	
				<?php }  ?>
			
	</div>
	</div>
	</div>


<!--footer-->
<?php include 'footer.php'; ?>
<!--footer-->


</body>
</html>