<?php
include "koneksi.php"; 

///$resi 					= $_POST ['resi'];
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
$lama 					= $_POST ['lama'] ;
$status 				= $_POST ['status'] ;
$waktukirim 			= $_POST ['waktukirim'];
$total		 			= $_POST ['total'] ;
$tgl		 			= $_POST ['tgl'] ;
 

mysql_query("INSERT INTO data( pengirim,alamat,telppengirim,penerima,alamatpenerima,telppenerima,dari,tujuan,berat,paket,jenis,lama,status,waktukirim,total,tgl)
    VALUEs(  				 
'$pengirim', 			 
'$alamat', 		 
'$telppengirim', 			 
'$penerima', 				 
'$alamatpenerima',
'$telppenerima',
'$dari',
'$tujuan',
'$berat', 
'$paket',
'$jenis',
'$lama',
'$status', 
'$waktukirim', 
'$total', 
'$tgl')")or die(mysql_error());
    header('location:lihat.php'); 
 
 
$insert = mysql_query($query_insert);

if($insert)
	{
	echo "berhasil... ";
	echo "<META http-equiv='refresh' content='0;URL=lihat.php'>";
	}

else
	{
	echo "Gagal insert brow ... ";
	
	} 
?>