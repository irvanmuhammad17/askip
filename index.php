<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>ASKIP | BCB IS</title>
<link rel="shortcut icon" href="images/envelope.ico">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crops Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>

	<!--//navigation-->
	<!--baner-->
	
	<!--//baner-->
	<!-- news -->
	
	<!-- container -->
	
	<!-- //news -->
	<!--main-->
	
	<!--//main-->
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title">Aplikasi Surat<br>Bintara - Cakra Buana <?php echo $user[''];?><i class="glyphicon glyphicon-send"></i></h3>

			
			
	
        <div id="loginbox" style="margin-top:25px;" class="mainbox col-md-4 col-md-offset-4">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                    
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form name="flogin" class="form-horizontal" role="form" method="post" action="ceklogin.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                                    </div>
                                    

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                     <input type="submit" name="login" value="Login" class="btn btn-success">
                                     

                                    </div>
                                </div>
                         
                            </form>     

                        </div>                     
                    </div>  
        </div>
      
    </div>
    
			






		<!--	Tutup ini tidak dipakai
		<div class="service-grids">
				<div class="col-md-4 srvc-grids-info">
					<a href="#">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>

					</div>
					<h5>Buat Surat Keluar</h5>
					</a>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</div>
					<h5>Tltrices</h5>
					<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					</div>
					<h5>Cltrices</h5>
					<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
					</div>
					<h5>Fltrices</h5>
					<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<h5>Processus</h5>
					<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
					</div>
					<h5>Sequitur</h5>
					<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
				</div>
				<div class="clearfix"> </div>				
			</div> -->
		</div>
	</div>
	<!--//services-->
	<!-- footer -->
	
	<?php
	include('footer.php');
	?>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>