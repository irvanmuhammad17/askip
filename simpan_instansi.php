<?php 
include("include/koneksi.php");


$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$session=$_SESSION['user'];
$logo=$_FILES['logo']['name'];
$move=move_uploaded_file($_FILES['logo']['tmp_name'], "images/".$logo);if(empty($logo))
$yes='<script language="javascript">alert("Data berhasil disimpan");document.location="instansi.php" </script>';
$no='<script language="javascript">alert("Data gagal disimpan");document.location="instansi.php"</script>';


if (isset($_POST['simpan']))
{
	if(!empty($logo))
	{
		$eksekusi=mysql_query("update instansi set nama='$nama',alamat='$alamat',logo='$logo',update_by='$session' where id_instansi='1'");

		if ($eksekusi)
			{header("Location:instansi.php");die(); }
		else
			{header("Location:edit_instansi.php");die();}

	}
	else{
		$eksekusi=mysql_query("update instansi set nama='$nama',alamat='$alamat',update_by='$session' where id_instansi='1'");

		/*
		$eksekusi=mysql_query("insert into instansi(nama,alamat,logo,update_by) values ('$nama','$alamat','$logo','$session')")or die (mysql_error());

		$logo = $_FILES['logo']['name'];
		// Simpan di Folder Images
		move_uploaded_file($_FILES['logo']['tmp_name'], "images/".$_FILES['logo']['name']);
		*/
		if ($eksekusi)
			{header("Location:instansi.php");die(); }
		else
			{header("Location:edit_instansi.php");die();}
	}

}



?>