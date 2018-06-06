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

#a
{
margin-top:50px;
width:900px;
height:570px;
}
#b
{
margin-left:1000px;
width:200px;
height:100px;
margin-top:-400px;
}
.style3 {
color:#990000;
	font-weight: bold;
	font-size: 18px;
}
.style4 {
font:"kingthings Trypewriter 2";
	font-size: 16px;
}
.style5 {font-family: "kingthings Trypewriter 2";font-weight: bold;}
-->
</style>
</head>

<body>

<div id="a"> 
<div style="padding:7px; height:100%;border:2px dashed #990000;margin-top:20px; auto ">
<table width="884" border="0" class="style1">
<tr>
<td height="135" colspan="5"><div align="center"><img src="images/logo2.png" width="469" height="112" /></div></td> 
<tr></tr>
</tr>
  <tr>
    <td height="70" colspan="4" bgcolor="#990000"><div align="center"><span class="style2">STRUK PENGIRIMAN</span></div></td>
    <td width="260" bgcolor="#CCCCCC"><div align="center"><span class="style3">Nomor Resi : <?php echo"$resi"; ?></span></div></td>
  </tr>
  <tr>
    <td width="166" height="30">Nama Pengirim</td>
    <td width="239">: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$pengirim"; ?></span></td>
    <td width="14" height="30">&nbsp;</td>
    <td height="30">Nama Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$penerima"; ?></span></td>
  </tr>
  <tr>
    <td height="30">Alamat Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$alamat"; ?></span></td>
    <td>&nbsp;</td>
    <td height="30">Alamat Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$alamatpenerima"; ?></span></td>
  </tr>
  <tr>
    <td height="30">Telp. Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$telppengirim"; ?></span></td>
    <td>&nbsp;</td>
    <td height="30">Telp. Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$telppenerima"; ?></span></td>
  </tr>
  <tr>
    <td height="30">Kota Asal</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$dari"; ?></span></td>
    <td>&nbsp;</td>
    <td height="30">Kota Tujuan</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$tujuan"; ?></span></td>
  </tr> 
  <tr>
    <td height="30" colspan="5" bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr>
    <td width="166" height="30">Paket Pengiriman</td>
    <td width="239">: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$paket"; ?></span></td>
    <td width="14" height="30">&nbsp;</td>
    <td>Berat Barang</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$berat"; ?></span></td>
  </tr>
  <tr>
    <td>Jenis Barang</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$jenis"; ?></span></td>
    <td>&nbsp;</td>
    <td>Waktu Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$waktukirim"; ?></span></td>
  </tr>
  <tr>
    <td>Status Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$status"; ?></span></td>
    <td>&nbsp;</td>
    <td>Waktu Sampai</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$lama"; ?></span></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td>: &nbsp;&nbsp;&nbsp;<span class="style5"><?php echo"$total"; ?></span></td>
  </tr>
  <tr>
    <td height="30" colspan="5" bgcolor="#990000">&nbsp;</td>
  </tr>
</table>

</div>  
  
</div> 
<div id="b"><a href="cariuser.php"><button onClick="window.print(); return confirm('Terimakasih Atas Kunjungannya Sobat')"><img src='images/print.png'></a>

<br /><br />

</button><a href="cariuser.php"><button onclick="return confirm('Terimakasih Atas Kunjungannya Sobat')">Cancel</button></a></div>


</body>
</html>

<?php
}
?>
 