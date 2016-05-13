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
<h3 class="title">Surat Masuk</h3>
<br>
<div class="container">
	<div class="row">
	

		<table class="table table-condensed table-hover table-bordered table-striped" id="datatable">
			<thead>
				<tr>
					<th class="text-center">No Surat</th>
					<th class="text-center">Isi Ringkas</th>
					<th class="text-center">Asal Surat</th>
					<th class="text-center">Tgl Surat Masuk</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<?php
				$tampil=mysql_query("select * from surat_keluar where id_div=$session");
			?>
				<tr>
					<td><?php echo $sm['no_surat'];?></td>
					<td><?php echo $sm['isi_ringkas'];?></td>
					<td><?php echo $sm['insert_by'];?></td>
					<td><?php echo $sm['tgl'];?></td>
					<td class="text-center">
						<a href="edit_sm.php?idsk=<?php echo $sm['id_sk'];?>" class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-pencil'></i></a>
						<a href="cetak_sm.php?idsk=<?php echo $sm['id_sk'];?>" class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-print'></i></a>
					</td>
				</tr>
		</table>
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