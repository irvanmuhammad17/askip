<?php
include('include/koneksi.php');


$tgl=$_POST['tgl'];
$ss=$_POST['sifatsurat'];
$noindex=$_POST['noindex'];
$nosurat=$_POST['nosurat'];
$perihal=$_POST['perihal'];
$penerima1=$_POST['penerima1'];
$penerima2=$_POST['penerima2'];	
$isiringkas=$_POST['isiringkas'];
$isidisposisi=$_POST['isidisposisi'];
$tanggpan1=$_POST['tanggpan1'];
$tanggpan2=$_POST['tanggpan2'];
$catatan=$_POST['catatan'];
$session=$_SESSION['user'];

$sukses='<script language="javascript">alert("Data berhasil disimpan");document.location="sk.php" </script>';
$gagal='<script language="javascript">alert("Data gagal disimpan");document.location="write.php"</script>';


if (isset($_POST['simpan'])) {
	
	$eksekusisimpan=mysql_query("INSERT INTO surat_keluar (no_sk,id_div,tgl_surat,no_index,perihal,to_1,to_2,
		isi_ringkas,isi_disposisi,tanggapan1,tanggapan2,catatan,insert_by) values
		 ('$nosk','id_div','tgl_surat','no_index','$perihal','$penerima1','$penerima2','$isiringkas',
		 	'isidisposisi','tanggapan1','tanggapan2','$catatan','$session')")or die(mysql_error());

	if ($eksekusisimpan)
		{ echo $sukses; }
		else
		{echo $gagal; }
}

elseif (isset($_POST['edit'])) {
	
	$eksekusiedit=mysql_query("update surat_keluar set tanggapan_1='$tanggapan1',tanggpan_2='$tanggapan2,
		catatan='$catatan'")or die(mysql_error());

	if ($eksekusiedit)
		{ echo $sukses; }
		else
		{echo $gagal; }

}