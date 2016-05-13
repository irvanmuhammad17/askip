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
<link href="css/datepicker.css" type="text/css" rel="stylesheet">
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
<h3 class="title">Buat Surat Disposisi</h3>
<br>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">

<form name="finstansi" method="post" action="simpan_surat.php" enctype="multipart/form-data">
	<table width="697" border="0" class="table table-condensed">
		  <tr>
		    <th>Tanggal</th>
		    <th>
		    <input type="text" name="tgl" class="datepicker form-control input-sm"></th>
		    <th colspan="2">Sifat Surat <br>

			  <label><input type="checkbox" name="sifatsurat" value="Penting" id="sifatsurat"> Penting </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <label><input type="checkbox" name="sifatsurat" value="Rahasia" id="sifatsurat"> Rahasia </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <label><input type="checkbox" name="sifatsurat" value="Segera" id="sifatsurat"> Segera </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <label><input type="checkbox" name="sifatsurat" value="Biasa" id="sifatsurat"> Biasa </label>
		    </th>
		  </tr>
		  <tr>
		    <th>No Index</th>
		    <th><input type="text" name="noindex" class="form-control input-sm" id="angka" /></th>
		    <th>Nomor Surat</th>
		    <th><input type="text" name="nosurat" class="form-control input-sm" /></th>
		  </tr>
		  <tr>
		    <th>Perihal</th>
		    <th><input type="text" name="perihal" class="form-control input-sm" /></th>
		    <th>Upload File Surat</th>
		    <th><input type="file" class="btn btn-warning col-sm-8" name="file"></th>
		  </tr>
		  <tr>
		    <th>Penerima 1</th>
		    <th>
		    <select name="penerima1" class="form-control input-sm">
		    <option value="">--- Pilih Penerima ---</option>
		    	<?php 
					  $option=mysql_query("select * from divisi order by id_divisi asc");
					  while ($fdata=mysql_fetch_array($option))
			    { ?>
		    <option value="<?php echo $fdata['nama_divisi'];?>"> <?php echo $fdata['nama_divisi'];?></option>
		    <?php } ?>
		    </select>
		    </th>
		    <th>Penerima 2</th>
		    <th>  <select name="penerima2" class="form-control input-sm">
		    <option value="">--- Pilih Penerima ---</option>
		    	<?php 
					  $option=mysql_query("select * from divisi order by id_divisi asc");
					  while ($fdata=mysql_fetch_array($option))
			    { ?>
		    <option value="<?php echo $fdata['nama_divisi'];?>"> <?php echo $fdata['nama_divisi'];?></option>
		    <?php } ?>
		    </select></th>
		  </tr>
		  <tr>
		   
		  </tr>
		  <tr>
		    <th>Isi Disposisi</th>
		    <th colspan="4" rowspan="2"><textarea name="isidisposisi" class="form-control" cols="45" rows="5"></textarea></th>
		  </tr>
		  <tr>
		    <th>&nbsp;</th>
		  </tr>
		  <tr>
		    <th height="23">Tanggapan</th>
		    <th colspan="4" rowspan="2"><textarea name="tanggapan1" class="form-control" cols="45" rows="5"></textarea></th>
		  </tr>
		  <tr>
		    <th>&nbsp;</th>
		  </tr>
		  <tr>
		    <th height="23">Tanggapan</th>
		    <th colspan="4" rowspan="2"><textarea name="tanggapan2" class="form-control" cols="45" rows="5"></textarea></th>
		  </tr>
		  <tr>
		    <th>&nbsp;</th>
		  </tr>
		   <tr>
		    <th height="23">Catatan Penyelesaian</th>
		    <th colspan="4" rowspan="2"><textarea name="catatan" class="form-control" cols="45" rows="5"></textarea></th>
		  </tr>
		  <tr>
		  <th></th>
		  </tr>
		  	<tr>
				<td colspan="4" align="center">
					<input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
					<a href="home.php"><input type="button" class="btn btn-danger" value="Batal"></a>
				</td>
	</tr>

	</table>
</form>

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



     <!-- Datepicker -->
        <script src="js/datepicker/bootstrap-datepicker.js"></script>
       
<script>
            $(document).ready(function() {
                
                $('.datepicker').datepicker({
                    "autoclose": true,
                    format : "yyyy-mm-dd"
                });
                
            });
            </script>

<script type="text/javascript">
	
	$(document).ready(function() {
	    $('#angka').keyup(function () {  
	      // setiap karakter yang diketik akan langsung dihapus   
	      this.value = this.value.replace(/[^0-9\.]/g,'');
	    });
	});
</script>