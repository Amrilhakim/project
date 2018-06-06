<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Pink Contact Form Responsive Widget Template  :: w3layouts</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<style>
#cari
{
background-color:#990033;
width:400px;
height:100px;
} 
.tab{
background-color:#990000;
color:#FFFFFF;
}
</style>
</head>
<body>
<?php include "koneksi.php" ?>

<div id="cari" align="center">
<br><br>
<form method="POST" action="" id="form">   
<div align="center">
  <select name="kategori" hidden="hidden">  
    <option value="">-- Cari Berdasarkan --</option>  
    <option value="resi">Nomor Resi</option> 
  </select>  
</div>
<label for="txtsearch">
<div align="center">Cari: 
  <input type="text" name="txtsearch" size="30"> 
    <input type="submit" value="Cari" name="submit"/>  
</div>
</label>
<div align="center">
  
  <br>
  <br>  <br>
  <br>
  <?php 

  
  if (isset($_POST['submit'])) {
   $search = $_POST['txtsearch'];  
   //$cari = $_POST['kategori'];  
      
   $query = "SELECT * FROM data WHERE resi LIKE '%$search%'";
    
   $result=mysql_query($query) or die(mysql_error());
$no=1;

while($select_result=mysql_fetch_array($result)){


$a 			= $select_result['resi'] ;
$b 			= $select_result['pengirim'] ;
$c 			= $select_result['telppengirim'] ;
$d 			= $select_result['penerima'] ;
$e 			= $select_result['telppenerima'] ;
$f			= $select_result['tujuan'] ;
$g			= $select_result['status'] ;
if($search)
{
echo"
<table width=800 > 
<tr class=tab>
<td style='text-align:center;'  font-color='#ffffff'>No. Resi</td>
<td>Nama Pengirim</td>
<td>Telp. Pengirim</td>
<td>Nama Penerima</td>
<td>Telp. Penerima</td>
<td>Tujuan</td>
<td>Status</td>
<td align=center>Detail</td> 
</tr> 
<tr bgcolo='#990033'>
<td style='text-align:center;'>$a</td>
<td>$b</td>
<td>$c</td>
<td>$d</td>
<td>$e</td>
<td>$f</td>
<td>$g</td>  
<td align='center'><a href='printuser.php?resi=$a'>Preview</a></td>
</tr> 
</table>
";
}
else
{
echo " maaf, gk ada data";
}
}
}
?>
  
</div>
 </form></div>
</body>
</html>