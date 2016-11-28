<?php session_start();
		ob_start();
	 ?>
<!DOCTYPE html>
<html>
<head>
<title>What you would be</title>
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



<div class="account">
	<div class="container">
		<h2>SignUp as</h2>
		<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<?php 
					require 'connect.php';
					if($_SERVER['REQUEST_METHOD']=='POST')
					{
						$email = $_POST['email'];
						$pass  = $_POST['password'];
						$sql = "SELECT * from user where email='$email' and pass='$pass'";
						$query = mysqli_query($conn,$sql);
						$count = mysqli_num_rows($query);
						$data  = mysqli_fetch_assoc($query);
						if($count > 0 )
						{
							$_SESSION['id']=$data['id'];
							$_SESSION['email']=$data['email'];
							$_SESSION['pass']=$data['pass'];
							header("location: index.php");
							exit;
						}

						else 
						{
							echo 'error is : ' .mysqli_error($conn);
						}					}
				 ?>
					<span>User</span>
					<a href="register.php"><img src="images/us.png" height="90" width="80"> </a>
				
					<span>Store</span>
					<a href="storeRegister.php"><img src="images/st.png" height="80" width="80"></a> 
					
			    </form>
			   </div>	
			   
			   <div class="clearfix"> </div>
			 </div>
	</div>
</div>

<!--footer-->

<!--footer-->
</body>
</html>