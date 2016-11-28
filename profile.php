<?php 
require 'ifuser.php';
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile User</title>
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
                <li class="active">Profile</li>
            </ol>
        </div>
    </div>
<div class="container">
    <div class="register">
      <p> <h2> <img src="images/one.jpg" alt="Mountain View" style="border-radius: 50%; width: 150px; height: 150px;
                border: 1px solid #ccc; border-radius:50%;"> Kety Shandow <br>
            1244 Follower | 3768 Following </h2> </p>

              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                 <div class="col-md-12  register-top-grid">
                    
                    <div class="mation">
                        <?php 
                        	$id =$_SESSION['id'];

                        	$sql ="SELECT * FROM clothes c INNER JOIN userclothes U on c.clothes_id=U.clothid where userid='$id'";
                     		$query=mysqli_query($conn,$sql);
                     		while($result=mysqli_fetch_assoc($query))
                     		{
                     			$img = $result['file'];
                     			?>
                     			       <div class="mation">
                        <span> <img src="uploads/<?php echo $img;?>" alt="Mountain View" style="width:10%;height:10%;"> &nbsp Kety Shandow</span>
                    </div>




                    <!-- like...................................... -->
                   
                    <!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="like" data-white_label="true" data-identifier="item_1" data-show_like_label="false" data-dislike_enabled="false" data-popup_disabled="true" data-share_enabled="false"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->



                 </div>


                    </div>


                     	<?php	}
                        ?>




                  
                     <div class="clearfix"> </div>
                
                     
                   </form>
                </div>
           </div>
</div>



<!--footer-->
<?php include 'footer.php'; ?>
<!--footer-->



</body>
</html>