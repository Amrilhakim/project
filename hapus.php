
<html>
<head>
<title>MENGHAPUS DATA ANGSURAN KREDIT ... </title>
<META http-equiv="refresh" content="2;URL=lihat.php"> 
</head>
<body>

<?php 
include('koneksi.php');
$resi = $_GET['resi'];
$query = mysql_query("delete from data where resi='$resi'") or die(mysql_error());


?>
<center>
<b> DATA BERHASIL DIHAPUS </b><br />
kembali ke tabel data .....<br/><br/><br/>

</center>
</body>
</html>