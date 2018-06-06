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
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<style>

table.tftable {table-layout:fixed; word-break:break-all; font-size:12px;color:#333333;width:90%;border-width: 1px;border-collapse: collapse;}
table.tftable th {font-size:12px;background-color:#e5e5e5;border-width: 1px;padding: 4px; border-style: solid;border-color: #cccccc;text-align:center;}
table.tftable tr {background-color:#f6f6f6;}
table.tftable td {font-size:12px;border-width: 1px;padding: 3px;border-style: solid;border-color: #cccccc; text-align:left; }

</style>




</head>
<body>
<center>
<br/>
	<div class="login-01">
			<form method="post" id="theform" action="cari.php">
				<ul>
				<li class="first">
					<input type="text" name="resi" class="text" value="Nomor Resi" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Nomor Resi';}" >
					<div class="clear"></div>
				</li>
			    </ul>
			<input type="submit" onClick="myFunction()" value="cari" >
			<div class="clear"></div>
		</form>
</div>
<table id='tfhover' class='tftable' border='1' align='center'> <col width='30'><col width='50'><col width='50'><col width='50'><col width='50'><col width='200'><col width='20'><col width='20'><col width='20'>
<tr>
<th >No. Resi</th>
<th >Pengirim</th>
<th >Telp</th>
<th >Penerima</th>
<th >Telp</th>
<th >Tujuan</th> 
<th >Status</th> 
<th colspan="3">Aksi</th>
</tr>
<?php
include "koneksi.php"; 
				//$titel = $_REQUEST['titel'];
				$select = "select * from data order by resi ";
				$select_query = mysql_query($select);
				$no=1;

while($select_result = mysql_fetch_array($select_query))
{


$a 			= $select_result['resi'] ;
$b 			= $select_result['pengirim'] ;
$c 			= $select_result['telppengirim'] ;
$d 			= $select_result['penerima'] ;
$e 			= $select_result['telppenerima'] ;
$f			= $select_result['tujuan'] ;
$g			= $select_result['status'] ;

echo"
<tr>
<td style='text-align:center;'>$a</td>
<td>$b</td>
<td>$c</td>
<td>$d</td>
<td>$e</td>
<td>$f</td>
<td>$g</td>
<td><a href='hapus.php?resi=$a'><img src='images/delete.png'></img></a></td>
<td><a href='edit.php?resi=$a'><img src='images/edit.png'></img></a></td> 
<td><a href='print.php?resi=$a'>Lihat</a></td>
</tr>";
}

?>
</table>
<table id='tfhover' class='tftable' border='1' align='center'> <col width='30'>
<tr>
</tr>
</table>
</center>

</body>
</html>