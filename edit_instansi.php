<?php
include("include/koneksi.php");

?>

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

<?php
include("header.php");
 ?>
<h3 class="title">Instansi Pengguna</h3>
<br>
<div class="container">
<div class="row">

<?php
$tampil=mysql_query("select * from instansi");
while ($instansi=mysql_fetch_array($tampil))
{
?>
	
<form name="finstansi" method="post" action="simpan_instansi.php" enctype="multipart/form-data">
	<table class="table table-striped">
		<thead>
		<tr>
			<th>Nama Instansi</th>
			<td><input type="text" name="nama" class="form-control input-sm" value="<?php echo $instansi['nama'];?>"></td>
			
		</tr>
		<tr>
			<th>Alamat</th>
			<td><input type="text" name="alamat" class="form-control input-sm" value="<?php echo $instansi['alamat'];?>"></td>
		</tr>
		<tr>
			<th>Logo</th>
			<td><img src="images/<?php echo $instansi['logo'];?>" width="80" height="80"> 
			<input type="file" name="logo"></td>
		</tr>
		<tr>
		<td colspan="2">
				<input type="submit" class="btn btn-primary" value="Simpan" name="simpan"></td>
		</tr>
		</thead>
	</table>
</form>
<?php } ?>

</div>
</div>


 <?php
include("footer.php")
 ?>



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