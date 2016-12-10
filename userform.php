

<?php 
	require 'connect.php';
	require 'ifuser.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Form</title>
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
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>



<!--header-->
<?php include 'header.php'; ?>
<!--//header-->



<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Form</li>
			</ol>
		</div>
	</div>
<div class="contact">
			<div class="container">
				<h3>Form</h3>
					<?php 


					?>
				<div class="contact-grids">
					<div class="contact-form">

							<form action="result.php" method="POST">
								<div class="contact-bottom">

								    <div class="col-md-4 in-contact">
										<span>What is the clothe Type you have ?</span>
										<select class= "list"  name='clothe_have'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="shirt">Shirt</option>
                                            <option value="tshirt">TShirt</option>
                                            <option value="skirt">Skirt</option>
                                            <option value="trouser">Trouser</option>
                                            <option value="dress">Dress</option>
                                            <option value="jacket">Jacket</option>
                                        </select>
									</div>
 <div class="col-md-4 in-contact">
										<span>what is clothes type you want to get ? </span>
										<select class= "list"  name='clothe_want'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="shirt">Shirt</option>
                                            <option value="tshirt">T-Shirt</option>
                                            <option value="skirt">Skirt</option>
                                            <option value="trouser">Trouser</option>
                                            <option value="dress">Dress</option>
                                            <option value="jacket">Jacket</option>
                                            <option value="all">I DON'T HAVE A CLUE</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Pattern Type</span>
										<select class= "list" name='pattern'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="floral">Floral</option>
                                            <option value="striped">Striped</option>
                                            <option value="dot">Dot</option>
                                            <option value="plaid">Plaid</option>
                                            <option value="animal">Animal</option>
                                            <option value="no_pattern">No Pattern</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Material</span>
										<select class= "list" name='mate'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="co">cotton</option>
                                            <option value="po">polyester</option>
                                            <option value="fu">Fur</option>
                                            <option value="le">Leather</option>
                                            <option value="si">Silk</option>
                                            <option value="ra">Rayon</option>
                                        </select>
									</div>




									<div class="col-md-4 in-contact">
									<span>Background Color</span>
									<select class= "list" name='background'>
			                            <option selected="selected" value="">Select...</option>
			                            <option value="1" style="background-color:navy">navy</option>
			                            <option value="2" style="background-color:blue">blue</option>
			                            <option value="3" style="background-color:lightblue">cyan</option>
			                            <option value="4" style="background-color:green">green</option>
			                            <option value="5" style="background-color:lightgreen">light-green</option>
			                            <option value="6" style="background-color:yellow">yellow</option>
			                            <option value="7" style="background-color:orange">orange</option>
			                            <option value="8" style="background-color:darkorange">dark orange</option>
			                            <option value="9" style="background-color:orangered">OrangeRed</option>
			                            <option value="10" style="background-color:red">red</option>
			                            <option value="11" style="background-color:crimson">crimson</option>
			                            <option value="12" style="background-color:purple">purple</option>
			                            <option value="13" style="background-color:white">white</option>
                            			<option value="14" style="background-color:black">black</option>
			                        </select>  
									</div>


									<div class="col-md-4 in-contact">
										<span>Main Color</span>
										<select class= "list" name='main'>
			                            <option selected="selected" value="">Select...</option>
			                            <option value="1" style="background-color:navy">navy</option>
			                            <option value="2" style="background-color:blue">blue</option>
			                            <option value="3" style="background-color:lightblue">cyan</option>
			                            <option value="4" style="background-color:green">green</option>
			                            <option value="5" style="background-color:lightgreen">light-green</option>
			                            <option value="6" style="background-color:yellow">yellow</option>
			                            <option value="7" style="background-color:orange">orange</option>
			                            <option value="8" style="background-color:darkorange">dark orange</option>
			                            <option value="9" style="background-color:orangered">OrangeRed</option>
			                            <option value="10" style="background-color:red">red</option>
			                            <option value="11" style="background-color:crimson">crimson</option>
			                            <option value="12" style="background-color:purple">purple</option>
			                            <option value="13" style="background-color:white">white</option>
                           			    <option value="14" style="background-color:black">black</option>
			                        </select>  
									</div>


									<div class="col-md-4 in-contact">
										<span>Sub Color</span>
										<select class= "list" name='sub'>
			                            <option selected="selected" value="">Select...</option>
			                            <option value="na" style="background-color:navy">navy</option>
			                            <option value="bl" style="background-color:blue">blue</option>
			                            <option value="lb" style="background-color:lightblue">cyan</option>
			                            <option value="gr" style="background-color:green">green</option>
			                            <option value="lg" style="background-color:lightgreen">light-green</option>
			                            <option value="ye" style="background-color:yellow">yellow</option>
			                            <option value="lo" style="background-color:orange">orange</option>
			                            <option value="o" style="background-color:darkorange">dark orange</option>
			                            <option value="do" style="background-color:orangered">OrangeRed</option>
			                            <option value="re" style="background-color:red">red</option>
			                            <option value="dp" style="background-color:crimson">crimson</option>
			                            <option value="pu" style="background-color:purple">purple</option>
			                            <option value="13" style="background-color:white">white</option>
                            			<option value="14" style="background-color:black">black</option>
			                        </select>  
									</div>


									

									<div class="col-md-4 in-contact">
										<span>Sleeve Length</span>
										<select class= "list" name='sleeve'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="ss">Short-Sleeved</option>
                                            <option value="ms">Medium-Sleeved</option>
                                            <option value="ls">Long-Sleeved</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Bottom  Length</span>
										<select class= "list" name='bottom'>
										    <option selected="selected" value="">Select...</option>
                                            <option value="sb">Short-Bottom</option>
                                            <option value="mb">Medium-Bottom</option>
                                            <option value="lb">Long-Bottom</option>
                                        </select>
									</div>
                                    <div class="col-md-4 in-contact">
										<span>Sex</span>
										<select class= "list" name='sex'>
                                            <option selected="selected" value="">Select...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                            
                                        </select>
									</div>


									<div class="clearfix"> </div>
								</div>
							
								
								<input type="submit" value="Go for it">
							</form>
						</div>
				

			</div>
		</div>
	</div>
<!--//content-->

	


<!--footer-->
<?php include 'footer.php'; ?>
<!--footer-->



</body>
</html>