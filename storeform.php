
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Store Form</title>
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
					<?PHP 

						require 'connect.php';
						if($_SERVER['REQUEST_METHOD']=='POST')
						{
							$target_dir = 'uploads/';
                $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
                $uploadOk=1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $check  = getImageSize($_FILES["fileToUpload"]['tmp_name']);
                if($check!==false)
                {
                  echo 'file is an image '.$check['mime'];
                  $uploadOk=1;
                }
                else
                {
                  echo 'file is not a image';
                  $uploadOk=0;
                }

               if(file_exists($target_file))
                {
                   echo 'sorry, file exist';
                   $uploadOk=0;
                }

              if($_FILES['fileToUpload']['size']>500000)
               {
                  echo 'sorry,your file is too large';
                  $uploadOk=0;
               }

              if($imageFileType!=='jpg' and $imageFileType!=='png'and $imageFileType!=='jpeg' and $imageFileType!=='gif')
              {
                echo 'sorry,only ';
                $uploadOk=0;
              }

            if($uploadOk==0)
            {
              echo 'sorry,your file was not uploaded';
            }
            else
            {
             if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file))
              {
                echo 'the file '.basename($_FILES['fileToUpload']['name']).'has been uploaded';
              }
              else
              {
                echo 'sorry,was an error';
              }

							$backgroundcolor = $_POST['BG'];
							$maincolor    = $_POST['main'];
							$subcolor    = $_POST['sub'];
							$patterntype  = $_POST['pattern'];
							$material  = $_POST['mater'];
							$sleevelength  = $_POST['sleeve'];
							$bouttomlength  = $_POST['bottom'];
							$image= $_POST['file'];

							$sql = "INSERT INTO clothes(BG,main,sub,pattern,mater,sleeve,bottom,file) VALUES('$backgroundcolor','$maincolor','$subcolor','$patterntype','$material','$sleevelength','$bouttomlength','$image')";

							$query = mysqli_query($conn,$sql);
							if($query)
							{
								echo "<script> alert('done');</script>";
							}							
						}
					}
					?>
							<form action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
								<div class="contact-bottom">


								    <div class="col-md-4 in-contact">
										<span>clothes Type</span>
										<select class= "list"  name='pattern'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="sh">Shirt</option>
                                            <option value="ts">T-Shirt</option>
                                            <option value="sk">Skirt</option>
                                            <option value="tr">Trouser</option>
                                            <option value="dr">Dress</option>
                                            <option value="ja">Jacket</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Pattern Type</span>
										<select class= "list"  name='pattern'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="fl">Floral</option>
                                            <option value="st">Striped</option>
                                            <option value="do">Dot</option>
                                            <option value="pl">Plaid</option>
                                            <option value="an">Animal</option>
                                            <option value="no">No Pattern</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Material</span>
										<select class= "list"  name='mater'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="FL">cotton</option>
                                            <option value="ST">polyester</option>
                                            <option value="DO">Fur</option>
                                            <option value="PL">Leather</option>
                                            <option value="AN">Silk</option>
                                            <option value="NO">Rayon</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Background Color</span>
										<select class= "list" name='BG'>
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
										<select class= "list" name='sub' multiple="multiple">
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
										<span>Sleeve Length</span>
										<select class= "list"  name='sleeve'>
                                            <option selected="selected" value="">Select...</option>
                                            <option value="SH">Short-Sleeved</option>
                                            <option value="ME">Medium-Sleeved</option>
                                            <option value="LO">Long-Sleeved</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Bottom  Length</span>
										<select class= "list"  name='bottom'>
										    <option selected="selected" value="">Select...</option>
                                            <option value="SH">Short-Bottom</option>
                                            <option value="ME">Medium-Bottom</option>
                                            <option value="LO">Long-Bottom</option>
                                        </select>
									</div>


									<div class="col-md-4 in-contact">
										<span>Upload Image</span>
										<input type="file" name="fileToUpload" id="fileToUpload" class="list">
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