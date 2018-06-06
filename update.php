
<?php
include "koneksi.php"; 
$resi 					= $_POST ['resi'] ;
$pengirim 				= $_POST ['pengirim'];
$alamat			 		= $_POST ['alamat'];
$telppengirim 			= $_POST ['telppengirim'];
$penerima 				= $_POST ['penerima'] ;
$alamatpenerima 		= $_POST ['alamatpenerima'] ;
$telppenerima 			= $_POST ['telppenerima'] ;
$dari 					= $_POST ['dari'] ;
$tujuan 				= $_POST ['tujuan'] ;
$berat 					= $_POST ['berat'] ; 
$paket 					= $_POST ['paket'] ;
$jenis 					= $_POST ['jenis'] ;
//$lama 					= $_POST ['lama'] ;
$status 				= $_POST ['status'] ;
//$waktukirim 			= $_POST ['waktukirim'];
//$total		 			= $_POST ['total'] ; 

 

$query = mysql_query("update data set
pengirim='$pengirim', 			 
alamat='$alamat', 		 
telppengirim='$telppengirim', 			 
penerima='$penerima', 				 
alamatpenerima='$alamatpenerima',
telppenerima='$telppenerima',
dari='$dari',
tujuan='$tujuan',
berat='$berat', 
paket='$paket',
jenis='$jenis', 
status='$status' 
where resi='$resi'");
 

if($query)
	{
	echo "berhasil update... ";
	echo "<META http-equiv='refresh' content='0;URL=lihat.php'>";
	}

else
	{
	echo "Gagal update ... ";
	
	}

?>