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
	 
.style1 {color: #FFFFFF}

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
</head>
<body>
  <a href='#' alt='back up database'><img src='images/database.png'></img></a>
<a href='javascript:window.print()' alt='print'><img src='images/print.png'></img></a>
<a href='excel.php'><img src='images/excel.png'></img></a>
<table style="font-size:11px;font-family:'arial';text-align:left;"border="1" width="70%" cellpadding="2"  cellspacing="2"  >
 <td>Resi</td>
 <td>Pengirim</td>
 <td>Penerima</td>
 <td colspan="2">Aksi</td>
  <tbody id="a">
  <?php
  $batas=2; //satu halaman menampilkan 30 baris
echo "<div id=error>";$halaman=$_GET['resi']; "</div>";
$posisi=null;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}

//query data menggunakan limit $posisi dan batas
$query="select * from data limit $posisi,$batas ";

$result=mysql_query($query) or die(mysql_error());
$no=1;

while($rows=mysql_fetch_object($result)){
?>

  <tr class=a>
  <div>
  	<td><?php echo $no ?></td> 
	<td><?php	echo $rows -> resi;?></td>
	<td><?php	echo $rows -> pengirim?></td>
	<td><?php	echo $rows -> penerima;?></td>
    <td><a href='hapus.php?resi=$a'><img src='images/delete.png'></img></a></td>
<td><a href='edit.php?resi=$a'><img src='images/edit.png'></img></a></td> 
   </div> 
    </tr>
	<?php		$no++;
			}?>

  </tbody></table>


<?php		
	//=============PAGING ========================
			$sql_paging = mysql_query("select*from data");
			$jmldata = mysql_num_rows($sql_paging);
			$jumlah_halaman = ceil($jmldata / $batas);

			
			//echo "<table border=1 width=20>";
			//echo "<tr>";
			//echo "<td width=55>";
			//echo "Halaman :";
			//echo "</td>";
			//echo "<td class=page align=left>";
			echo "<div id=paging>";
			echo "<ul>";
			echo "";
			for($i = 1; $i <= $jumlah_halaman; $i++)
				if($i != $halaman) {
					echo "<a href=datainput.php?resi=$i ><li>$i</li> </a>";
				} else {
					echo "<li class=page id=page><b>$i</b></li>";
				}
			
			
			echo " ";
			
						echo "</ul>";
	
			//echo "</td>";
			//echo "</tr>";
			//echo "</table>";
			mysql_close();	
			echo "</div>";
			?>
		
		&nbsp;&nbsp;  Jumlah data :<?php echo $jmldata;?> 
</body>
</html>