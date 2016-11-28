<?php 
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile another User</title>
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
                <li class="active">Profile "User name"</li>
            </ol>
        </div>
    </div>
<div class="container" >
    <!--//background for profile-->
    <div class="register" style="background: url(images/tt.jpg) no-repeat center;background-size:100% 100%; width:100%;height:100%;">
    <?php 
        $id = $_GET['do'];
                      $ss="SELECT * FROM userclothes u INNER JOIN user us on us.id=u.userid where userid='$id'";
              $qq = mysqli_query($conn,$ss);
              $rr = mysqli_fetch_assoc($qq);


    ?>
      <h2> <img src="images/profile.png" alt="Mountain View" style="width:20%;height:20%;"><?php echo $rr['name'];?><br><button type="button">Follow</button></h2>
        

              <?php
              $id = $_GET['do'];
              $sql="SELECT * FROM userclothes u INNER JOIN user us on us.id=u.userid where userid='$id'";
              $query = mysqli_query($conn,$sql);

              ?>


              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="four">
                 <div class="col-md-6  register-top-grid">
                <?php 
                    while($result = mysqli_fetch_assoc($query))
                    {
                ?>      
                        <div class="col-md1 simpleCart_shelfItem">
                            
                            <?php echo "<img class='img-responsive' src='uploads/".$result['clothe']."' alt='' />"; ?>
                            
                            <h3><a href="profile.php">Noura</a></h3>
                            <div class="price">
                                    <h5 class="item_price"></h5>
                                    <a href="#" class="item_add">i just choosed this </a>
                                    <div class="clearfix"> </div>
                            </div>
                        </div>
                        </div>
                        <div class="clearfix"> </div>               


                <?php } ?>
                  
                     
                </form>
            </div>
        </div>



<!--footer-->
<?php include 'footer.php'; ?>
<!--footer-->



</body>
</html>