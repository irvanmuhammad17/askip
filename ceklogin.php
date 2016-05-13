<?php
session_start();
include("include/koneksi.php");

# jika di tekan tombol login
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=($_POST['password']);

//pernyataan sql


		$sql=mysql_query("select * from divisi where username='$username' && password='$password'");
		$num=mysql_num_rows($sql); // menampung jumlah baris querynya

		$level=mysql_fetch_array($sql);
		if ($num==1) 
		
		{ // jika barisnya sama dengan 1
			// login benar //
			$_SESSION['user']=$username; // daftarkan session
			$_SESSION['pass']=$password;
			$_SESSION['level']=$level['level'];
			$_SESSION['id_divisi']=$level['id_divisi'];
			if ($level['level']=="admin")
			{
				?>
				<script language="javascript">
				alert('Selamat Datang Admin');
				document.location='home.php' // halaman yang muncul setelah login sukses
				</script>
				<?php
			}
				if ($level['level']=="user")
			{
				?>
				<script language="javascript">
				alert('Selamat Datang User ');
				document.location='index_user.php' // halaman yang muncul setelah login sukses
				</script>
      	      <?php
			}
		}
else
{ // jika barisnya bukan 1
// jika login salah
echo "<script>
alert('Maaf username atau password anda salah');
document.location='index.php'
</script>";
	}
}
?>