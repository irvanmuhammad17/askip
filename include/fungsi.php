<?php 

	
function tanggal($tgl)
{
	$tahun	= substr($tgl,0,4);
	$bulan  = substr($tgl,5,2);
	$tanggal= substr($tgl,8,2);
	
	
	if ($bulan=='01'){$namabulan='Januari';}
	elseif ($bulan=='02'){$namabulan='Februari';}
	elseif ($bulan=='03'){$namabulan='Maret';}
	elseif ($bulan=='04'){$namabulan='April';}
	elseif ($bulan=='05'){$namabulan='Mei';}
	elseif ($bulan=='06'){$namabulan='Juni';}
	elseif ($bulan=='07'){$namabulan='Juli';}
	elseif ($bulan=='08'){$namabulan='Agustus';}
	elseif ($bulan=='09'){$namabulan='September';}
	elseif ($bulan=='10'){$namabulan='Oktober';}
	elseif ($bulan=='11'){$namabulan='November';}
	elseif ($bulan=='12'){$namabulan='Desember';}
	
	$newdate	= $tanggal."-".$bulan."-".$tahun;
	return $newdate;
}
	?>
	
 