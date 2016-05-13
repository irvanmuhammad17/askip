<?php
include("include/koneksi.php");
?>


	<!--header-->
	<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
	 <table class="table table-condensed table-striped">
       <?php
       $tampil=mysql_query("select * from instansi where id_instansi='1'");
       while ($instansi=mysql_fetch_array($tampil))
       {
       ?>
        <tr>
          <th width="16%"><div align="center"><img src="images/<?php echo $instansi['logo'] ;?>" width="108" height="108"></div></th>
          <th width="68%">
         	 <div align="center">
	            <p><h3><?php echo $instansi['nama'];?></h3></p>
	            <p><h4><?php echo $instansi['alamat'];?></h4></p>
        	  </div>
          <th width="16%"><div align="center"><img src="images/LOGO-CAKRA.png" width="117" height="106"></div></th>
       	   </tr>
          </table>

       <?php } ?>

          </div></div>

<!-- ini logo
	<div class="logo">
		<div class="container">
			<div class="logo-info">
				<a href="index.php">
					<h1> The Envelope
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span> 

					</h1>
				</a>
			</div>
		</div>	
	</div>
	-->
	<!--//header-->		
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom active"><a href="home.php">Home <span class="glyphicon glyphicon-home"></span></a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="write.php">Buat Surat <span class="glyphicon glyphicon-send"></span>
					</a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="sm.php">Surat Masuk <span class="glyphicon glyphicon-save-file"></span>
					</a>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="sk.php">Surat Keluar <span class="glyphicon glyphicon-open-file"></span>
					</a>
					</li>
					<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan <span class="glyphicon glyphicon-wrench"></span></a>
						<ul class="dropdown-menu">
							<li><a class="hvr-bounce-to-bottom" href="instansi.php">Instansi Pengguna <span class="glyphicon glyphicon-briefcase"></span></a></li>
							<li><a class="hvr-bounce-to-bottom" href="user.php">Manajemen Admin <span class="glyphicon glyphicon-user"></span></a></li>     
						</ul>
					</li>	
					<!--
					<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="hvr-bounce-to-bottom" href="gallery.html">Gallery1</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery.html">Gallery2</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery.html">Gallery3</a></li>           
						</ul>
					</li>	
					<li class="hvr-bounce-to-bottom"><a href="codes.html">Short Codes</a></li>
					-->
				</ul>	
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	