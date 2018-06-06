<?php 
 include "koneksi.php"; 
 
?>

<html>
<head>
<title>Lihat Data</title>
<script type="text/javascript" src="cari spesial/jquery-1.4.js"></script>
<script type="text/javascript" src="cari spesial/jquery.validate.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $("#form").validate({
                rules: {
                  txtsearch: "required",
                  kategori: "required"
                },
             
        messages: { 
                 txtsearch: {
                    required: ''
                },
                  kategori: {
                    required: ''
                },
        },
                success: function(label) {
            label.text('').addClass('valid');
         }
            }); 
        });
		
		
		
		
		
    </script>
    
  
    
<style>

 
    tbody > tr:nth-child(2n+2) > td, 
	tbody > tr:nth-child(2n+2) > th {
        background-color: #ededed;
    }
    table{
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }

.a:hover { 
color:#990000; 
font: "Lucida Grande", Verdana, Arial, "Bitstream Vera Sans", sans-serif;
font-weight:bold;

}

#a{
box-shadow: 0 0 15px 15px lightgray; 
text-transform: uppercase;
 font:corleone; 
}

.page { border:solid 5px #990033; 
margin-top:-5px;
color:#0000FF; 
background-color:#666666; 
 }
#page { 
background-color:#666666; 
 }
 
 
#paging ul{width: 480px; padding:0px; margin:10px;background:#333333; margin-left:0px;}
#paging ul li { 
	border-radius: 10px;font-family:Arial, Helvetica, sans-serif;text-align:center; padding:7px 12px 7px 12px;
	background-color:#990000;color:#ffffff; float:left; list-style:none;cursor:pointer }
#paging ul li:hover{ color: #fff; cursor: pointer;background:#333333;}

#error {
font-size:0px;
} 
</style>
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
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}

.not{
background-color:#FF0000;
color:#FFFFFF;
}

.yet{
background-color:#00FF00;
color:#000000;
}
</style>
</head>
<body>

<label for="txtsearch">
<form method="POST" action="" id="form"> 
<select name="kategori" hidden="hidden">  
<option value="">-- Cari Berdasarkan --</option>  
 <option value="resi">Nomor Resi</option> 
</select> 

  <a href='db.php' alt='back up database'><img src='images/database.png'></img></a>
<a href='javascript:window.print()' alt='print'><img src='images/print.png'></img></a>
<a href='excel.php'><img src='images/excel.png'></img></a> 
Cari: <input type="text" name="txtsearch"> 
<input type="submit" value="Cari" name="submit"/>  
 </label>  
<table style="font-size:11px;font-family:'arial';text-align:left;"border="1" width="70%" cellpadding="2"  cellspacing="2"  >
 <td style="font-size:16px; color:#990000"><strong>No.</strong></td>
  <td style="font-size:16px; color:#990000"><strong>Resi</strong></td>
 <td style="font-size:16px; color:#990000"><strong>Pengirim</strong></td>
 <td style="font-size:16px; color:#990000"><strong>Telp. Pengirim</strong></td>
 <td style="font-size:16px; color:#990000"><strong>Penerima</strong></td>
 <td style="font-size:16px; color:#990000"><strong>Telp. Penerima</strong></td>
 <td style="font-size:16px; color:#990000"><strong>Kota Asal</strong></td>
 <td style="font-size:16px; color:#990000"><strong>Kota Tujuan</strong></td>
  <td style="font-size:16px; color:#990000"><strong>Paket</strong></td> 
  <td style="font-size:16px; color:#990000"><strong>Tanggal Pengiriman</strong></td>  
  <td style="font-size:16px; color:#990000"><strong>Tanggal</strong></td>    
  <td style="font-size:16px; color:#990000"><strong>Status</strong></td>   
  <td style="font-size:16px; color:#990000"><strong>Estimasi</strong></td> 
  <tbody id="a">
  <?php
  $batas=100; //satu halaman menampilkan 30 baris
echo "<div id=error>";$halaman=$_GET['resi']; "</div>";
$posisi=null;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}

//query data menggunakan limit $posisi dan batas
$query="select * from data order by paket desc limit $posisi,$batas ";

$result=mysql_query($query) or die(mysql_error());
$no=1;

while($rows=mysql_fetch_object($result)){ 

?> 
  <tr class=a>
  <div>
  	<td><?php echo $no ?></td> 
	<td><?php	echo $rows -> resi;?></td>
	<td><?php	echo $rows -> pengirim?></td>
	<td><?php	echo $rows -> telppengirim?></td>
	<td><?php	echo $rows -> penerima;?></td>
	<td><?php	echo $rows -> telppenerima;?></td>
	<td><?php	echo $rows -> dari;?></td>
	<td><?php	echo $rows -> tujuan;?></td>
	<td><?php	echo $rows -> paket;?></td> 
	<td><?php	echo $rows -> waktukirim;?></td>
	<td><?php	echo $rows -> tgl;?></td>    
	<td><?php
	
	if ($rows -> status=="On Process")
        {
            echo "<span class='not'> On Process </span>";
        }
        elseif ($rows -> status=="Done")
        {
            echo "<span class='yet'> Done </span>";
        } 
	
	?>
    </td>
	<td><?php	echo $rows -> lama;?></td>  
   </div> 
    </tr>
    
	<?php		$no++;
			}?>
  </tbody></table> 
<br><br>
<?php		
	//=============PAGING ========================
			$sql_paging = mysql_query("select*from data");
			$jmldata = mysql_num_rows($sql_paging);
			$jumlah_halaman = ceil($jmldata / $batas);
 
			echo "<div id=paging>";
			echo "<ul>";
			echo "";
			for($i = 1; $i <= $jumlah_halaman; $i++)
				if($i != $halaman) {
					echo "<a href=lihat.php?resi=$i ><li>$i</li> </a>";
				} else {
					echo "<li class=page id=page><b>$i</b></li>";
				}
			
			
			echo " ";
			
						echo "</ul>"; 
			mysql_close();	
			echo "</div>";
			?>
		
        
        
        
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Jumlah  :<?php echo $jmldata;?> &nbsp;&nbsp;&nbsp;<?php  
include "koneksi.php";
  if (isset($_POST['submit'])) {
   $search = $_POST['txtsearch'];  
   //$cari = $_POST['kategori'];  
      
   $query = "SELECT * FROM data WHERE resi LIKE '%$search%'";
    
   $result=mysql_query($query) or die(mysql_error());
$no=1;

while($select_result=mysql_fetch_array($result)){


$a 			= $select_result['resi'] ;
$b			= $select_result['paket'] ;
$c 			= $select_result['pengirim'] ;
$d 			= $select_result['telppengirim'] ;
$e 			= $select_result['penerima'] ;
$f 			= $select_result['telppenerima'] ;
$g			= $select_result['dari'] ;
$h			= $select_result['tujuan'] ; 
$i			= $select_result['waktukirim'] ;  
$j			= $select_result['tgl'] ;  
$k			= $select_result['status'] ; 

echo"
<table width=800 > 
<tr class=tab>
<td style='text-align:center;'  font-color='#ffffff'>No. Resi</td>
<td>Nama Pengirim</td>
<td>Telp. Pengirim</td>
<td>Nama Penerima</td>
<td>Telp. Penerima</td>
<td>Kota Asal</td>
<td>Kota Tujuan</td>
<td>Paket</td>
<td>Waktu Pengiriman</td>
<td>Tanggal</td>
<td>Status</td>
<td colspan=3 align=center>Aksi</td> 
</tr> 
<tr bgcolo='#990033'>
<td style='text-align:center;'>$a</td>
<td>$c</td>
<td>$d</td>
<td>$e</td>
<td>$f</td> 
<td>$g</td>
<td>$h</td>
<td>$b</td> 
<td>$i</td> 
<td>$k</td> 
<td>
";
?>
<?php
if ($j=="On Process")
        {
            echo "<span class='not'> On Process </span>";
        }
        elseif ($j=="Done")
        {
            echo "<span class='yet'> Done </span>";
        } 
?>
<?php 
echo"		
		  </td> 
<td><a href='hapus.php?resi=$a'><img src='images/delete.png'></img></a></td>
<td><a href='edit.php?resi=$a'><img src='images/edit.png'></img></a></td> 
<td><a href='print.php?resi=$a' ><img src='images/print.png'></a></td>
</tr> 
</table>";
}
}
?> 
</form>
</body>
</html>