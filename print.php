<?php
include "koneksi.php";
$resi = $_GET['resi'];
$select = "select * from data where resi='$resi'";
$select_query = mysql_query($select);


while($select_result = mysql_fetch_array($select_query))
{

$resi 					= $select_result['resi'] ;
$pengirim 				= $select_result['pengirim'] ;
$alamat			 		= $select_result['alamat'] ;
$telppengirim 			= $select_result['telppengirim'] ;
$penerima 				= $select_result['penerima'] ;
$alamatpenerima 		= $select_result['alamatpenerima'] ;
$telppenerima 			= $select_result['telppenerima'] ;
$dari 					= $select_result['dari'] ;
$tujuan 				= $select_result['tujuan'] ;
$berat 					= $select_result['berat'] ; 
$paket 					= $select_result['paket'] ;
$jenis 					= $select_result['jenis'] ;
$lama 					= $select_result['lama'] ; 
$status 				= $select_result['status'] ;
$waktukirim 			= $select_result['waktukirim'] ; 
$total		 			= $select_result['total'] ;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 
<style type="text/css">
<!--
.style1 {
font:"Courier New", Courier, monospace;
font-size:16px;
color:#000000;}
.style2 {
	font-size: 36px;
	font-weight: bold;
	color: #FFFFFF;
} 
.bg{ 
opacity:0.1;  
background-repeat:no-repeat;
width:850px;
height:700px;
margin-bottom:-740px; 
margin-left:20px;
}

#a1
{
margin-top:50px;
width:900px;
height:530px;
}
#a2
{
margin-top:50px;
width:900px;
height:610px;
}
#b
{
margin-left:1000px;
width:200px;
height:100px;
margin-top:-400px;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18px;
}

.kapital{
text-transform:uppercase;
font-family:"kingthings Trypewriter 2";
border:0px;
}
-->
</style>


</head>

<body>

<div id="a1"> 
<div style="padding:7px; height:100%;border:2px dashed #990000;margin-top:20px; auto ">
<table width="884" border="0" class="style1">
<tr>
<td colspan="5"><div align="center"><img src="images/logo2.png" width="469" height="112" /></div></td> 
</tr>
  <tr>
    <td height="70" colspan="4" bgcolor="#990000"><div align="center"><span class="style2">STRUK PENGIRIMAN</span></div></td>
    <td width="260" bgcolor="#CCCCCC"><div align="center"><span class="style3">Nomor Resi : <?php echo"<span class='kapital'> $resi </span>"; ?></span></div></td>
  </tr>
  <tr>
    <td width="166" height="30">Nama Pengirim</td>
    <td width="239">: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'>$pengirim </span> </span>"; ?></td>
    <td width="14" height="30">&nbsp;</td>
    <td width="183" height="30">Nama Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $penerima </span> </span>"; ?></td>
  </tr>
  <tr>
    <td height="30">Alamat Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $alamat </span> </span>"; ?></td>
    <td>&nbsp;</td>
    <td height="30">Alamat Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $alamatpenerima </span> </span>"; ?></td>
  </tr>
  <tr>
    <td height="30">Telp. Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $telppengirim </span>"; ?></td>
    <td>&nbsp;</td>
    <td height="30">Telp. Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $telppenerima </span>"; ?></td>
  </tr>
  <tr>
    <td height="30">Kota Asal</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $dari </span>"; ?></td>
    <td>&nbsp;</td>
    <td height="30">Kota Tujuan</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $tujuan </span>"; ?></td>
  </tr> 
  <tr>
    <td height="34" colspan="5" bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Jenis Barang</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $jenis </span>"; ?></td>
    <td height="30">&nbsp;</td>
    <td>Tanggal Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $waktukirim </span>"; ?></td>
  </tr>
  <tr>
    <td>Berat Barang</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $berat </span>"; ?></td>
    <td>&nbsp;</td>
    <td>Lama Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $lama </span>"; ?></td>
  </tr>
  <tr>
    <td>Paket Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $paket </span>"; ?></td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $total </span>"; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="30" colspan="5" bgcolor="#990000">&nbsp;</td>
  </tr>
</table>

</div>  
<br /><br />
<hr border:2px dashed #990000; />

<div id="a2">
<div style="padding:7px; height:100%;border:2px dashed #990000;margin-top:20px; auto ">
<table width="884" border="0" class="style1">
<tr>
<td colspan="5"><div align="center"><img src="images/logo2.png" width="469" height="112" /> </div></td> 
</tr>
  <tr>
    <td height="70" colspan="4" bgcolor="#990000"><div align="center"><span class="style2">STRUK PENGIRIMAN</span></div></td>
    <td width="260" bgcolor="#CCCCCC"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="166" height="30">Nama Pengirim</td>
    <td width="239">: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $pengirim </span>"; ?></td>
    <td width="14" height="30">&nbsp;</td>
    <td height="30">Nama Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $penerima </span>"; ?></td>
  </tr>
  <tr>
    <td height="30">Alamat Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $alamat </span>"; ?></td>
    <td>&nbsp;</td>
    <td height="30">Alamat Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $alamatpenerima </span>"; ?></td>
  </tr>
  <tr>
    <td height="30">Telp. Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $telppengirim </span>"; ?></td>
    <td>&nbsp;</td>
    <td height="30">Telp. Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $telppenerima </span>"; ?></td>
  </tr>
  <tr>
    <td height="30">Kota Asal</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $dari </span>"; ?></td>
    <td>&nbsp;</td>
    <td height="30">Kota Tujuan</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $tujuan </span>"; ?></td>
  </tr> 
  <tr>
    <td height="34" colspan="5" bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Barang</td>
    <td width="239">: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $jenis </span>"; ?></td>
    <td width="14" height="30">&nbsp;</td>
    <td width="183">Tanggal Pengiriman</td>
    <td width="260">: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $waktukirim </span>"; ?></td>
  </tr>
  <tr>
    <td>Berat Barang</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $berat </span>"; ?></td>
    <td>&nbsp;</td>
    <td>Lama Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $lama </span>"; ?></td>
  </tr>
  <tr>
    <td>Paket Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<?php echo"<span class='kapital'> $paket </span>"; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>TTD</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TTD</td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kurir</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Penerima</td>
  </tr>
  <tr>
    <td height="30" colspan="5" bgcolor="#990000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>  
</div> 
<div id="b"><a href="lihat.php"><button onClick="window.print(); return confirm('Terimakasih...')"><img src='images/print.png'></button></a>

<br /><br />

<a href="lihat.php"><button onclick="return confirm('Terimakasih...')">Cancel</button></a></div>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</body>
</html>

<?php
}
?>
 